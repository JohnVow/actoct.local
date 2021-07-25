<?php

namespace AndreiShilov\UTMShopaholic;

use AndreiShilov\UTMSaver\Facades\UTM;
use Backend\Widgets\Filter;
use Backend\Widgets\Form;
use Backend\Widgets\Lists;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Event;
use Lovata\OrdersShopaholic\Classes\Processor\OrderProcessor;
use Lovata\OrdersShopaholic\Controllers\Orders;
use Lovata\OrdersShopaholic\Models\Order;
use October\Rain\Database\Builder;
use October\Rain\Database\Model;
use System\Classes\PluginBase;
use Lang;

class Plugin extends PluginBase
{
    public $require = [
        'AndreiShilov.UTMSaver',
        'Lovata.Shopaholic',
        'Lovata.OrdersShopaholic',
    ];

    public function pluginDetails()
    {
        return [
            'name' => 'andreishilov.utmshopaholic::lang.plugin.name',
            'description' => 'andreishilov.utmshopaholic::lang.plugin.description',
            'author' => 'andreishilov.utmshopaholic::lang.plugin.author',
            'icon' => 'icon-magnet'
        ];
    }

    public function registerPermissions()
    {
        return [
            'andreishilov.utmshopaholic.widgets' => [
                'label' => 'andreishilov.utmshopaholic::lang.plugin.name',
            ],
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'AndreiShilov\UTMShopaholic\ReportWidgets\SourcesOfOrders' => [
                'label' => 'andreishilov.utmshopaholic::lang.reportwidget.sourcesoforders.name',
                'context' => 'dashboard',
                'permissions' => [
                    'andreishilov.utmshopaholic.widgets',
                ],
            ],
        ];
    }

    public function boot()
    {
        Event::listen(OrderProcessor::EVENT_ORDER_CREATED, function ($obOrder) {
            if (!App::runningInBackend()) {
                UTM::save();
                $utmParameters = UTM::all();
                if (count($utmParameters) > 0) {
                    $utm = new Models\UTM($utmParameters);
                    $utm->order()->associate($obOrder);
                    $utm->save();
                }
            }
        });

        Order::extend(function ($model) {
            $model->hasOne['utm'] = [
                Models\UTM::class,
                'delete' => true
            ];

            $model->addDynamicMethod('scopeHasUtmLike', function (Builder $query, $value) {
                $query->whereHas('utm', function (Builder $query) use ($value) {
                    $query->where('utm_source', 'like', '%' . $value . '%')
                        ->orWhere('utm_campaign', 'like', '%' . $value . '%')
                        ->orWhere('utm_medium', 'like', '%' . $value . '%')
                        ->orWhere('utm_term', 'like', '%' . $value . '%')
                        ->orWhere('utm_content', 'like', '%' . $value . '%');
                });
            });
        });

        Event::listen('backend.form.extendFields', function (Form $widget) {
            if (!$widget->getController() instanceof Orders || !$widget->model instanceof Order) {
                return;
            }

            $widget->addTabFields([
                'utm' => [
                    'type' => 'partial',
                    'tab' => 'UTM',
                    'path' => '$/andreishilov/utmshopaholic/controllers/orders/_field_utmparameters.htm',
                ]
            ]);
        });

        Orders::extend(function ($controller) {
            $myConfigPath = '$/andreishilov/utmshopaholic/controllers/orders/config_relation.yaml';

            if (!isset($controller->relationConfig)) {
                $controller->addDynamicProperty('relationConfig');
            }

            $controller->relationConfig = $controller->mergeConfig(
                $controller->relationConfig,
                $myConfigPath
            );
        });

        Orders::extendListColumns(function (Lists $list, Model $model) {
            if (!$model instanceof Order) {
                return;
            }

            $utm = [
                'utm_source',
                'utm_campaign',
                'utm_medium',
                'utm_term',
                'utm_content',
            ];

            foreach ($utm as $parameter) {
                $list->addColumns([
                    'utm[' . $parameter . ']' => [
                        'label' => Lang::get('andreishilov.utmshopaholic::lang.utm.' . $parameter),
                        'sortable' => false,
                    ],
                ]);
            }
        });

        Event::listen('backend.filter.extendScopes', function (Filter $filterWidget) {
            if (!$filterWidget->getController() instanceof Orders) {
                return;
            }

            $filterWidget->addScopes([
                'utm' => [
                    'label' => 'utm',
                    'type' => 'text',
                    'scope' => 'hasUtmLike',
                ]
            ]);
        });
    }
}
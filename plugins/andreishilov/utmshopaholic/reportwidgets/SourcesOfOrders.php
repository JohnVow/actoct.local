<?php

namespace AndreiShilov\UTMShopaholic\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Carbon;
use Lovata\OrdersShopaholic\Models\Order;
use Illuminate\Support\Facades\DB;

class SourcesOfOrders extends ReportWidgetBase
{
    public function defineProperties()
    {
        return [
            'days' => [
                'title' => 'Number of days',
                'default' => '30',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$'
            ],
        ];
    }

    public function render()
    {
        $options = $this->getProperties();
        $dateFrom = Carbon::today()->addDays(-$options['days']);

        $query = Order::query()
            ->join('andreishilov_utmshopaholic_utm', function (JoinClause $join) {
                $join->on('andreishilov_utmshopaholic_utm.order_id', '=', 'lovata_orders_shopaholic_orders.id');
            })
            ->groupBy('andreishilov_utmshopaholic_utm.utm_source')
            ->where('lovata_orders_shopaholic_orders.created_at', '>=', $dateFrom)
            ->orderBy('amount', 'desc')
            ->select([
                DB::raw('count(lovata_orders_shopaholic_orders.id) as amount'),
                'andreishilov_utmshopaholic_utm.utm_source as utm_source'
            ]);

        $items = $query->get();

        $this->vars['days'] = $options['days'];
        $this->vars['data'] = [
            'items' => $items->toArray(),
            'total' => 0,
        ];

        foreach ($items as $item) {
            $this->vars['data']['total'] += $item['amount'];
        }

        return $this->makePartial('widget');
    }
}
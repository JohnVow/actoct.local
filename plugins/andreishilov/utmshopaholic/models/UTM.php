<?php namespace AndreiShilov\UTMShopaholic\Models;

use Lovata\OrdersShopaholic\Models\Order;
use October\Rain\Support\Str;

/**
 * Model
 */
class UTM extends \Model
{
    protected $fillable = ['order_id', 'utm_source', 'utm_campaign', 'utm_medium', 'utm_term', 'utm_content'];

    public $timestamps = false;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'andreishilov_utmshopaholic_utm';

    public $belongsTo = [
        'order' => [
            Order::class
        ],
    ];

    public function setUtmSourceAttribute($value)
    {
        $this->attributes['utm_source'] = Str::substr($value, 0 , 128);
    }

    public function setUtmCampaignAttribute($value)
    {
        $this->attributes['utm_campaign'] = Str::substr($value, 0 , 128);
    }

    public function setUtmMediumAttribute($value)
    {
        $this->attributes['utm_medium'] = Str::substr($value, 0 , 128);
    }

    public function setUtmTermAttribute($value)
    {
        $this->attributes['utm_term'] = Str::substr($value, 0 , 512);
    }

    public function setUtmContentAttribute($value)
    {
        $this->attributes['utm_content'] = Str::substr($value, 0 , 128);
    }
}

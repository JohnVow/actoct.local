<?php namespace ArtDark\EasyMarket\Models;

use Model;
use Lovata\Shopaholic\Models\Product;
/**
 * Model
 */
class Order extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    /**
     * @var array Validation rules
     */
    public $rules = [
        'product_id'         => 'required',
    ];
  
    public $belongsTo = [
       'product' => [
            'Lovata\Shopaholic\Models\Product',
       ]
    ];

    /**
     * @var string The database table used by the model.
     */


    public $table = 'artdark_easymarket_orders';

    public function onGetProductName() {
       

        return [0 => '<span class="noparent"> -- </span>'] + Product::lists('name', 'id');
    }
}

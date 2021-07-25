<?php namespace ArtDark\EasyMarket\Models;

use Model;
use ValidationException;

/**
 * Model
 */
class Setting extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */

  

    public $jsonable = [
        'fields_orders',
        'fields_required',
        'fields_review',
        's_order_admin_emails',
        's_review_admin_emails',
        's_required_admin_emails',
        'footer_social',
    ];

    public $timestamps = true;

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name'         => 'required|unique:artdark_easymarket_settings',
        'currency'   => 'required',
        'shop_name'   => 'required',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'artdark_easymarket_settings';


    public $attachMany = [
        'logos' => ['System\Models\File', 'order' => 'sort_order', 'delete' => true],
    ];


    function beforeSave()
    {
        if($this->time_reshipment == null ) {
            $this->time_reshipment = 60;
        }
    }

    public function afterCreate()
    {
        if ($this->active) {
            $this->makePrimary();
        }
    }

    public function makePrimary()
    {
        $this->newQuery()->where('id', $this->id)->update(['active' => true]);
        $this->newQuery()->where('id', '<>', $this->id)->update(['active' => false]);
    }

    public function beforeUpdate()
    {
        if ($this->isDirty('active')) {
            $this->makePrimary();
        }
    }



}

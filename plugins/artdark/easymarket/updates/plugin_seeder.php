<?php namespace ArtDark\EasyMarket\Updates;

use ArtDark\EasyMarket\Models\Setting;
use October\Rain\Database\Updates\Seeder;

class PluginSeeder extends Seeder
{
    public function run()
    {

        $fields_required = json_decode('[{"required":"1","value":"name"},{"required":"1","value":"phone"},{"required":"1","value":"email"},{"required":"1","value":"message"},{"required":"1","value":"accepted"}]');
        $fields_review = json_decode('{"0":{"required":"1","value":"name"},"2":{"required":"1","value":"email"},"3":{"required":"1","value":"message"},"4":{"required":"1","value":"accepted"}}');
        $fields_orders = json_decode('[{"required":"1","value":"name"},{"required":"1","value":"phone"},{"required":"1","value":"email"},{"required":"1","value":"message"},{"required":"1","value":"accepted"}]');

        Setting::create([
            'name' => 'Default',
            'review_rating' => 1,
            'active' => 1,
            'currency' => 'USD',
            'shop_name' => 'EasyMarket',
            'text_link' => 'buyer\'s contract',
            'accept_link' => 'https://www.google.com/',
            's_order_user' => 1,
            's_order_admin' => 0,
            's_order_admin_emails' => [],
            's_required_user' => 1,
            's_required_admin' => 0,
            's_required_admin_emails' => [],
            's_review_user' => 1,
            's_review_admin' => 0,
            's_review_admin_emails' => [],
            'footer_social' => [],
            'fields_required' => $fields_required,
            'fields_review' => $fields_review,
            'fields_orders' => $fields_orders,
        ]);


    }
}
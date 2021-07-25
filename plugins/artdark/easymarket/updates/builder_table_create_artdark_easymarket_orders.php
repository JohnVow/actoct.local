<?php namespace ArtDark\EasyMarket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArtdarkEasymarketOrders extends Migration
{
    public function up()
    {
        Schema::create('artdark_easymarket_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->boolean('active')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->text('message');
            $table->integer('product_id');
            $table->string('ip');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('artdark_easymarket_orders');
    }
}

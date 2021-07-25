<?php namespace ArtDark\EasyMarket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArtdarkEasymarketSettings extends Migration
{
    public function up()
    {
        Schema::create('artdark_easymarket_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->default('Default');
            $table->boolean('active')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('time_reshipment')->nullable()->default(60);
            $table->text('accept_link')->nullable();
            $table->string('text_link')->nullable();
            $table->text('fields_orders')->nullable();
            $table->text('fields_required')->nullable();
            $table->text('fields_review')->nullable();
            $table->boolean('review_rating')->nullable()->default(1);
            $table->string('currency')->default('usd');
            $table->string('shop_name')->default('EasySHop');
            $table->boolean('s_order_user')->default(1);
            $table->boolean('s_order_admin')->default(1);
            $table->text('s_order_admin_emails')->nullable();;
            $table->boolean('s_required_user')->default(1);
            $table->boolean('s_required_admin')->default(1);
            $table->text('s_required_admin_emails')->nullable();;
            $table->boolean('s_review_user')->default(1);
            $table->boolean('s_review_admin')->default(1);
            $table->text('s_review_admin_emails')->nullable();;
            $table->text('footer_social')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('artdark_easymarket_settings');
    }
}

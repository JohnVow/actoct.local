<?php

namespace AndreiShilov\UTMShopaholic\Updates;

use October\Rain\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class CreateUTMTable extends Migration
{
    public function up()
    {
        Schema::create('andreishilov_utmshopaholic_utm', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('order_id')->unsigned()->nullable()->unique();
            $table->string('utm_source', 128)->nullable();
            $table->string('utm_campaign', 128)->nullable();
            $table->string('utm_medium', 128)->nullable();
            $table->string('utm_term', 512)->nullable();
            $table->string('utm_content', 128)->nullable();

            $table->index('utm_source');
            $table->index('utm_campaign');
        });
    }

    public function down()
    {
        Schema::dropIfExists('andreishilov_utmshopaholic_utm');
    }
}

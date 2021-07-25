<?php namespace AndreiShilov\UTMTracker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTables extends Migration
{
    public function up()
    {
        Schema::create('andreishilov_utmtracker_fields', function ($table) {
            $table->increments('id');
            $table->string('code', 16);
            $table->string('name', 128);
            $table->string('default_value', 512)->nullable();
            $table->timestamps();

            $table->unique('code');
        });

        Schema::create('andreishilov_utmtracker_values', function ($table) {
            $table->increments('id');
            $table->integer('field_id')->unsigned()->nullable();
            $table->string('utm_source', 128);
            $table->string('value', 512);
            $table->timestamps();

            $table->unique(['field_id', 'utm_source']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('andreishilov_utmtracker_values');
        Schema::dropIfExists('andreishilov_utmtracker_fields');
    }
}

<?php namespace ArtDark\EasyMarket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArtdarkEasymarketRequireds extends Migration
{
    public function up()
    {
        Schema::create('artdark_easymarket_requireds', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->boolean('active')->nullable()->default(0);
            $table->string('email');
            $table->string('phone');
            $table->text('message');
            $table->string('ip');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('artdark_easymarket_requireds');
    }
}

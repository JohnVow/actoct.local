<?php namespace ArtDark\EasyMarket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArtdarkEasymarketReviews extends Migration
{
    public function up()
    {
        Schema::create('artdark_easymarket_reviews', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->boolean('active')->nullable()->default(0);
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('message');
            $table->string('answer_name')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('answer_text')->nullable();
            $table->boolean('answer_active')->nullable()->default(0);
            $table->integer('rating')->default(5);
            $table->string('ip')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('artdark_easymarket_reviews');
    }
}

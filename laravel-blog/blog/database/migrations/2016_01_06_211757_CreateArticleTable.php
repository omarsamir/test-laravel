<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    	Schema::create('articles',function (Blueprint $table){
    		$table->increments('id');
    		$table->string("articleTitle");
    		$table->string("articleSubTite");
    		$table->timestamp("publishDate");
    		$table->timestamp("modifiedDate");
    		$table->string("articleBody");
    		$table->string("articleSummry");
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    	Schema::drop('articles');
    }
}

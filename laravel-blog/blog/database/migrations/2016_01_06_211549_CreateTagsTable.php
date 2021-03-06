<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    	Schema::create('tags',function (Blueprint $table){
    		$table->increments('id');
    		$table->string("tagName");
    		$table->timestamp("creationDate");
    		$table->integer("resourcesCount");
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
    	Schema::drop('tags');
    }
}

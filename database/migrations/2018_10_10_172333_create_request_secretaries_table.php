<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestSecretariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_secretaries', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id');
		    $table->integer('user_id')->unsigned();
		    $table->integer('course_release_id')->unsigned();
		    $table->string('name', 155)->nullable();
		    $table->text('description')->nullable();
		    $table->string('status', 45)->nullable();
		    
		    $table->index('user_id','fk_request_secretaries_users1_idx');
		    $table->index('course_release_id','fk_request_secretaries_course_editions1_idx');
		
		    $table->foreign('user_id')
		        ->references('id')->on('users');
		
		    $table->foreign('course_release_id')
		        ->references('id')->on('course_releases');
		
		    $table->timestamps();
		
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_secretaries');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolls', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id');
		    $table->integer('user_id')->unsigned();
		    $table->integer('course_release_id')->unsigned();
		    $table->integer('function_enroll_id')->unsigned();
		    $table->integer('status_enroll_id')->unsigned();
		
		    $table->index('status_enroll_id','fk_enrols_status_enroll1_idx');
		    $table->index('function_enroll_id','fk_enrols_functions1_idx');
		    $table->index('user_id','fk_enrols_users1_idx');
		    $table->index('course_release_id','fk_enrols_course_releases1_idx');
		
		    $table->foreign('status_enroll_id')
		        ->references('id')->on('status_enrolls');
		
		    $table->foreign('function_enroll_id')
				->references('id')->on('function_enrolls')
				->onDelete('cascade');
		
		    $table->foreign('user_id')
				->references('id')->on('users')
				->onDelete('cascade');
		
		    $table->foreign('course_release_id')
				->references('id')->on('course_releases')
				->onDelete('cascade');
		
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
        Schema::dropIfExists('enrolls');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseReleaseAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_release_attachments', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id');
		    $table->integer('course_releases_id')->unsigned();
		    $table->string('name', 155)->nullable();
		    $table->string('description', 155)->nullable();
		
		    $table->index('course_releases_id','fk_course_release_attachment_course_releases1_idx');
		
		    $table->foreign('course_releases_id')
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
        Schema::dropIfExists('course_release_attachments');
    }
}

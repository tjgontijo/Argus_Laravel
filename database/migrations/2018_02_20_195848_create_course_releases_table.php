<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_releases', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id');
		    $table->integer('course_id')->unsigned();
		    $table->integer('status_release_id')->unsigned();
            $table->date('date_schedule_start')->nullable();
            $table->date('date_start')->nullable();
            $table->date('date_schedule_end')->nullable();
            $table->date('date_end')->nullable();
		    $table->integer('vacancies')->nullable();
		    $table->integer('vacancies_fill')->nullable();
		    $table->integer('vacancies_conclusive')->nullable();
		    $table->string('level')->nullable();
		    $table->string('duration')->nullable();
		    $table->string('workload')->nullable();
		    $table->text('requeriments')->nullable();
		    $table->text('regime')->nullable();
		    $table->text('observation')->nullable();
		
		    $table->index('course_id','fk_course_release_courses1_idx');
		    $table->index('status_release_id','fk_course_release_status_releases1_idx');
		
		    $table->foreign('course_id')
                ->references('id')->on('courses')
                ->onDelete('cascade');
		
		    $table->foreign('status_release_id')
		        ->references('id')->on('status_releases');
		
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
        Schema::dropIfExists('course_releases');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id');
		    $table->integer('course_type_id')->unsigned();
		    $table->integer('unit_teach_id')->unsigned();
		    $table->integer('unit_executing_id')->default(73)->unsigned();
		    $table->string('short_name', 20)->nullable();
		    $table->string('name', 150)->nullable();
		    $table->text('description')->nullable();
		
		    $table->index('course_type_id','fk_courses_course_type1_idx');
		    $table->index('unit_teach_id','fk_courses_units_teach1_idx');
		    $table->index('unit_executing_id','fk_courses_units_executing1_idx');
		
		    $table->foreign('course_type_id')
		        ->references('id')->on('course_types')
		        ->onDelete('cascade');
		
		    $table->foreign('unit_teach_id')
                ->references('id')->on('unit_teaches')
                ->onDelete('cascade');
            
                $table->foreign('unit_executing_id')
                ->references('id')->on('units')
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
        Schema::dropIfExists('courses');
    }
}

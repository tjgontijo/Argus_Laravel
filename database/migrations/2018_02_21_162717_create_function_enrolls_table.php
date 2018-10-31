<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunctionEnrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('function_enrolls', function (Blueprint $table) {
            $table->engine = 'InnoDB';
		
		    $table->increments('id');
		    $table->string('name', 90)->nullable();
		    $table->string('description', 90)->nullable();
		
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
        Schema::dropIfExists('function_enrolls');
    }
}

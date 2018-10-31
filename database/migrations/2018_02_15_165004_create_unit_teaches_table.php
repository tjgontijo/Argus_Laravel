<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitTeachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_teaches', function (Blueprint $table) {
            $table->engine = 'InnoDB';
		
		    $table->increments('id');
		    $table->string('short_name', 15)->nullable();
		    $table->string('name', 90)->nullable();
		    $table->string('description', 155)->nullable();
		
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
        Schema::dropIfExists('unit_teaches');
    }
}

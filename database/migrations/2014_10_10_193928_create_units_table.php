<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('units', function(Blueprint $table) {
        $table->engine = 'InnoDB';
        
        $table->increments('id');
        $table->integer('ra_id')->unsigned();
        $table->string('short_name', 20);
        $table->string('name', 200);
        $table->string('telephone', 15)->nullable();
        $table->string('cellphone', 15)->nullable();
        
        $table->index('ra_id','fk_units_ras1_idx');
        
        $table->foreign('ra_id')
        ->references('id')->on('ras');
        
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
        Schema::dropIfExists('units');
    }
}

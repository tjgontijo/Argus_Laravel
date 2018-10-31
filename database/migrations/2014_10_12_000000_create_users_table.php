<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
		    $table->integer('unit_id')->unsigned()->default(104);
		    $table->string('name', 90)->nullable();
		    $table->string('username', 60);
		    $table->date('date_admission')->nullable();
		    $table->date('date_birth')->nullable();
		    $table->string('gender', 10)->nullable();
		    $table->string('rg', 8)->nullable();
		    $table->string('cpf', 15)->nullable();
		    $table->string('naturalness', 45)->nullable();
		    $table->string('breed', 45)->nullable();
		    $table->string('registration', 15)->nullable();
		    $table->string('grade', 90)->nullable();
		    $table->string('cellphone', 15)->nullable();
		    $table->string('phone', 15)->nullable();
		    $table->string('email', 100)->nullable();
		    $table->string('email2', 100)->nullable();
		    $table->string('cep', 15)->nullable();
		    $table->string('complement', 155)->nullable();
		    $table->string('number', 45)->nullable();
		    $table->string('address', 155)->nullable();
		    $table->string('district', 155)->nullable();
		    $table->string('city', 90)->nullable();
		    $table->string('state', 90)->nullable();
		    $table->string('password', 255)->nullable();
		
		    $table->index('unit_id','fk_users_units1_idx');
		
		    $table->foreign('unit_id')
		        ->references('id')->on('units');
		
			$table->timestamps();
			$table->rememberToken();
		
		});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

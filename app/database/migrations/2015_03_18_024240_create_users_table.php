<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
            $table->engine = 'MyISAM';
            $table->string('name'); // nombre del administrado
            $table->string('lastname'); // apellido
            $table->string('image')->nullable(); // imagen para mostrar en su sección
            $table->string('email'); // cuenta de correo
            $table->string('password'); // clave de acceso
            $table->rememberToken();
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
		Schema::drop('users');
	}

}

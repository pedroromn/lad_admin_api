<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
            $table->engine = 'MyISAM';
            $table->string('title'); // título
            $table->string('direction'); // director o directores
            $table->string('description'); // descripción cortica
            $table->string('format')->nullable(); // formato
            $table->string('length')->nullable(); // tiempo de duración
            $table->string('state')->nullable(); // estado del proyecto: finalizado, en proceso 
            $table->string('link')->nullable(); // link a un video de trailer o cortometraje
            $table->string('image')->nullable(); // imagen para mostrar en la vista de detalle del proyecto
            $table->string('slide1')->nullable(); // Ruta de la imagen 1 para el slide
            $table->string('slide2')->nullable(); // Ruta de la imagen 2 para el slide
            $table->string('slide3')->nullable(); // Ruta de la imagen 3 para el slide
            $table->string('slide4')->nullable(); // Ruta de la imagen 4 para el slide  
            $table->text('synopsis')->nullable(); // sinopsis del proyecto
            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}

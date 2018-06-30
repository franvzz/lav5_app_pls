<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTareasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectos_tareas', function(Blueprint $table)
		{
			$table->bigIncrements('id');

			$table->bigInteger('proyecto_id')->unsigned();
			$table->foreign('proyecto_id')->references('id')->on('proyectos');

			$table->string('tarea');
			$table->string('fecha_limite');
			$table->integer('avance');
			$table->string('responsable');

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
		Schema::drop('proyectos_tareas');
	}

}

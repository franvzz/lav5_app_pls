<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspaciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('espacios', function(Blueprint $table)
		{
			$table->bigIncrements('id');

			$table->bigInteger('propietario_id')->unsigned();
			$table->foreign('propietario_id')->references('id')->on('propietarios'); // ->onDelete('cascade');

			$table->bigInteger('num_local');
			$table->string('id_comercial');
			$table->string('isla');
			$table->string('tipo_de_espacio');

			$table->string('escritura');
			$table->string('m2');
			$table->string('proindiviso');
			$table->string('expediente');
			$table->string('num_registro');
			$table->string('volumen');
			$table->string('libro');
			$table->string('fecha_registro');

			$table->string('comentarios');
			$table->string('estatus');

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
		Schema::drop('espacios');
	}

}

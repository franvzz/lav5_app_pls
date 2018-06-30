<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropietariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('propietarios', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('nombre');
			$table->string('contacto');
			$table->string('telefono');
			$table->string('celular');
			$table->string('correo');
			$table->string('direccion');
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
		Schema::drop('propietarios');
	}

}

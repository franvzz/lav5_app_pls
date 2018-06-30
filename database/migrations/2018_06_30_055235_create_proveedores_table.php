<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedores', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('razon_social');
			$table->string('contacto');
			$table->string('domicilio');
			$table->string('telefono');
			$table->string('correo');
			$table->string('giro');
			$table->string('pdf_contrato');
			$table->string('fecha_inicio');
			$table->string('fecha_fin');
			$table->string('departamento');
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
		Schema::drop('proveedores');
	}

}

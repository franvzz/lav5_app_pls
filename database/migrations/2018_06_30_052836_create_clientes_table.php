<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->boolean('es_propietario');
			$table->string('giro');
			$table->string('rfc');
			$table->string('razon_social');
			$table->string('razon_comercial');
			$table->string('contacto');
			$table->string('email');
			$table->string('telefono');
			$table->string('domicilio');
			$table->string('pdf_contrato');
			$table->string('pdf_servicios');
			$table->string('pdf_otro');
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
		Schema::drop('clientes');
	}

}

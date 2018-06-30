<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolizaDeCondominosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('poliza_de_condominos', function(Blueprint $table)
		{
			$table->bigIncrements('id');

			$table->bigInteger('cliente_id')->unsigned();
			$table->foreign('cliente_id')->references('id')->on('clientes'); // ->onDelete('cascade');

			$table->string('locales');
			$table->string('compania_seguro');
			$table->string('vigencia_inicio');
			$table->string('vigencia_fin');
			$table->string('num_poliza');
			$table->string('observaciones');
			$table->string('pdf');

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
		Schema::drop('poliza_de_condominos');
	}

}

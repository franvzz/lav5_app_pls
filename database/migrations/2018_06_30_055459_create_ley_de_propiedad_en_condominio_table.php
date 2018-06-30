<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeyDePropiedadEnCondominioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ley_de_propiedad_en_condominio', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('year');
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
		Schema::drop('ley_de_propiedad_en_condominio');
	}

}

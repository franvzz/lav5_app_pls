<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientoCategoriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mantenimiento_categorias', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('parent_id');
			$table->string('nombre');
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
		Schema::drop('mantenimiento_categorias');
	}

}

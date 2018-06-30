<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsambleaExtraordinariasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asamblea_extraordinarias', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('year');
			$table->string('pdf');
			$table->string('comentarios');
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
		Schema::drop('asamblea_extraordinarias');
	}

}

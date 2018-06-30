<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvenioPuentePeatonalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('convenio_puente_peatonal', function(Blueprint $table)
		{
			$table->bigIncrements('id');
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
		Schema::drop('convenio_puente_peatonal');
	}

}

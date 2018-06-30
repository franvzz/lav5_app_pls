<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuntaDeComiteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('junta_de_comite', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('year');
			$table->integer('mes');
			$table->string('pdf');
			$table->string('pdf_anexo');
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
		Schema::drop('junta_de_comite');
	}

}

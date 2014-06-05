<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticulo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articulo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('idcategoria');
			$table->string('nombre');
			$table->text('contenido');
			$table->text('resumen');
			$table->timestamps();
			$table->foreign('idcategoria')->references('id')->on('categoria')->onDelete('CASCADE')->onUpdate('CASCADE');

		});
		
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articulo');
	}

}

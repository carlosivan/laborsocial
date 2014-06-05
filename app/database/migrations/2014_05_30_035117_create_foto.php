<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFoto extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('foto', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('idarticulo');
			$table->string('ruta');
			$table->timestamps();
			$table->foreign('idarticulo')->references('id')->on('articulo')->onDelete('cascade')->onUpdate('CASCADE');
		});
		
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('foto');
	}

}

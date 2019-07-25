<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSosmedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sosmed', function(Blueprint $table)
		{
			$table->integer('id_sosmed')->primary();
			$table->string('nama_sosmed', 50);
			$table->string('icon_sosmed', 150)->nullable();
			$table->string('url_sosmed', 150)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sosmed');
	}

}

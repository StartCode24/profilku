<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSosmedLinkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sosmed_link', function(Blueprint $table)
		{
			$table->integer('id_sosmed_link')->primary();
			$table->integer('id_sosmed')->index('id_sosmed');
			$table->bigInteger('id_users')->unsigned()->index('id_users');
			$table->text('url', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sosmed_link');
	}

}

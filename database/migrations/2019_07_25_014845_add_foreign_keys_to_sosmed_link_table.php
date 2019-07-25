<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSosmedLinkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sosmed_link', function(Blueprint $table)
		{
			$table->foreign('id_sosmed', 'FK_sosmed_link_sosmed')->references('id_sosmed')->on('sosmed')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_users', 'FK_sosmed_link_users')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sosmed_link', function(Blueprint $table)
		{
			$table->dropForeign('FK_sosmed_link_sosmed');
			$table->dropForeign('FK_sosmed_link_users');
		});
	}

}

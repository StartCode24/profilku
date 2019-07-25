<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name', 191);
			$table->string('email', 191)->unique();
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password', 191);
			$table->string('remember_token', 100)->nullable();
			$table->string('address', 150);
			$table->string('website', 50)->nullable();
			$table->text('bio', 65535)->nullable();
			$table->string('profile_photo', 150)->nullable();
			$table->string('interest', 150)->nullable()->comment('ketertarikan, misal : web, fashion, kuliner, robotik, dll');
			$table->string('occupation', 150)->nullable()->comment('pekerjaan atau hobi, misal : desainer, programmer, manajer, dll');
			$table->string('education', 150)->nullable();
			$table->string('phone', 15)->nullable();
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
		Schema::drop('users');
	}

}

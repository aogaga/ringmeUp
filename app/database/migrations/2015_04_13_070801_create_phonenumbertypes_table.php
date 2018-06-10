<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonenumbertypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phonenumbertypes', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			$table->increments('id');
			$table->string('phone_type');

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
		Schema::drop('phonenumbertypes');
	}

}

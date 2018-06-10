<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			$table->increments('id');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('middlename');
			$table->string('title');
			$table->string('occupation');
			$table->string('businessname');


			$table->integer('contacttype_id')->unsigned();
			$table->foreign('contacttype_id')->references('id')->on('contacttypes');

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
		Schema::drop('contacts');
	}

}

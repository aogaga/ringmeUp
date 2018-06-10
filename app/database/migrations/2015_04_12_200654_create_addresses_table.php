<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			$table->increments('id');
			$table->string('houseno');
			$table->string('street');
			$table->string('city');
			$table->string('state');
			$table->integer('countrie_id')->unsigned();
			$table->foreign('countrie_id')->references('id')->on('countries');

			$table->integer('addresstype_id')->unsigned();
			$table->foreign('addresstype_id')->references('id')->on('addresstypes');


				$table->integer('contact_id')->unsigned();
			$table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');





			$table->string('lat');
			$table->string('long');
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
		Schema::drop('addresses');
	}

}

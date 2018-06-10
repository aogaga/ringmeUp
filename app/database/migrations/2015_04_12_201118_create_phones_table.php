<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phones', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			$table->increments('id');
			$table->string('number');
			$table->integer('phonenumbertype_id')->unsigned();
			$table->foreign('phonenumbertype_id')->references('id')->on('phonenumbertypes');

			$table->integer('contact_id')->unsigned();
			$table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');


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
		Schema::drop('phones');
	}

}

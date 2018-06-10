<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emails', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			$table->increments('id');
			$table->string('emaiaddress');


			$table->integer('contact_id')->unsigned();
			$table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');


			$table->integer('emailtype_id')->unsigned();
			$table->foreign('emailtype_id')->references('id')->on('emailtypes');


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
		Schema::drop('emails');
	}

}

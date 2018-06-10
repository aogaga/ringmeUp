<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('websites', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			$table->increments('id');
			$table->string('websiteaddress');

			$table->integer('contact_id')->unsigned();
			$table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');

			$table->integer('websitetype_id')->unsigned();
			$table->foreign('websitetype_id')->references('id')->on('websitetypes');

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
		Schema::drop('websites');
	}

}

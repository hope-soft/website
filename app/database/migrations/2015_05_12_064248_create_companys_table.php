<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companys', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('address1');
			$table->text('address2')->nullable();
			$table->int('country_id');
			$table->int('zip_code');
			$table->string('phone');
			$table->string('fax');
			$table->string('email');
			$table->string('currency_symbol');
			$table->dateTime('financial_year_from');
			$table->dateTime('books_begining_from');
			$table->int('is_active');
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
		Schema::drop('companys');
	}

}

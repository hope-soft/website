<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLadgerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ledger', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('code');
			$table->integer('group_id');
			$table->text('address');
			$table->integer('is_inventory_affected');
			$table->string('sales_tax_number');
			$table->text('ledger_no');
			$table->integer('company_id');
			$table->integer('is_active');
			$table->integer('transction_id');
			$table->integer('ledger-type');
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
		Schema::drop('ledger');
	}

}

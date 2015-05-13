<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostCategory extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cost_category', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('company_id');
			$table->integer('under_id');
			$table->integer('is_active');
			$table->integer('entity_type')->nullable();
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
		Schema::drop('cost_category');
	}

}

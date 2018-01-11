<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medico', function(Blueprint $table)
		{
			$table->integer('CRM')->primary();
			$table->string('Nome', 100);
			$table->integer('Telefone');
			$table->date('DataNasc')->nullable();
			$table->string('Especialidade', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('medico');
	}

}

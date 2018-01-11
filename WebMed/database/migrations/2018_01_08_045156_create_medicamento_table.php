<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medicamento', function(Blueprint $table)
		{
			$table->integer('cod_medicamento', true);
			$table->text('Nome', 65535);
			$table->text('Descricao', 65535);
			$table->string('fabricante', 40)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('medicamento');
	}

}

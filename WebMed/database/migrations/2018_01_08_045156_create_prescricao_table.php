<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrescricaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prescricao', function(Blueprint $table)
		{
			$table->integer('codPrescricao', true);
			$table->integer('codConsulta')->unique('codConsulta');
			$table->integer('codMedicamento')->nullable()->unique('codMedicamento');
			$table->integer('codExame')->nullable()->unique('codExame');
			$table->text('Comentario', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prescricao');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsultaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consulta', function(Blueprint $table)
		{
			$table->integer('codConsulta')->primary();
			$table->date('dataConsulta');
			$table->string('cpfPaciente', 11)->index('cpfPaciente');
			$table->integer('crmMedico')->index('crmMedico');
			$table->text('descricaoConsulta', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('consulta');
	}

}

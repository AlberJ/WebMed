<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToConsultaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('consulta', function(Blueprint $table)
		{
			$table->foreign('crmMedico', 'FK_MEDICO')->references('CRM')->on('medico')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('cpfPaciente', 'FK_PACIENTE')->references('CPF')->on('paciente')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('consulta', function(Blueprint $table)
		{
			$table->dropForeign('FK_MEDICO');
			$table->dropForeign('FK_PACIENTE');
		});
	}

}

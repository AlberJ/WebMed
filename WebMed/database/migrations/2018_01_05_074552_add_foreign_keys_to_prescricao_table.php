<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrescricaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('prescricao', function(Blueprint $table)
		{
			$table->foreign('codConsulta', 'FK_CONSULTA')->references('codConsulta')->on('consulta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('codExame', 'FK_EXAME')->references('tipoExame')->on('exame')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('codMedicamento', 'FK_MEDICAMENTO')->references('cod_medicamento')->on('medicamento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('prescricao', function(Blueprint $table)
		{
			$table->dropForeign('FK_CONSULTA');
			$table->dropForeign('FK_EXAME');
			$table->dropForeign('FK_MEDICAMENTO');
		});
	}

}

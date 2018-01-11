<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PacienteSeeder::class);
    }
}

class PacienteSeeder extends Seeder {

    public function run(){

        DB::insert('insert into paciente(CPF, Nome, Convenio, Telefone, DataNasc, TipoSanguineo)
        VALUES (?, ?, ?, ?, ?, NULL)', array('10912275430','Amanda Borges','Particular','32315013','20091994'));

    }

}

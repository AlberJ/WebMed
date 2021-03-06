<?php

namespace App\Repositories;

use App\Models\Medico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MedicoRepository
 * @package App\Repositories
 * @version January 9, 2018, 3:15 am UTC
 *
 * @method Medico findWithoutFail($id, $columns = ['*'])
 * @method Medico find($id, $columns = ['*'])
 * @method Medico first($columns = ['*'])
*/
class MedicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'CRM',
        'Nome',
        'Telefone',
        'DataNasc',
        'Especialidade'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Medico::class;
    }
}

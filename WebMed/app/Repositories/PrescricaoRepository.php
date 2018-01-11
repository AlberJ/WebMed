<?php

namespace App\Repositories;

use App\Models\Prescricao;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PrescricaoRepository
 * @package App\Repositories
 * @version January 9, 2018, 3:17 am UTC
 *
 * @method Prescricao findWithoutFail($id, $columns = ['*'])
 * @method Prescricao find($id, $columns = ['*'])
 * @method Prescricao first($columns = ['*'])
*/
class PrescricaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idConsulta',
        'idMedicamento',
        'idExame',
        'Comentario'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Prescricao::class;
    }
}

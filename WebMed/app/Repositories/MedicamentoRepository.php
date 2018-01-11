<?php

namespace App\Repositories;

use App\Models\Medicamento;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MedicamentoRepository
 * @package App\Repositories
 * @version January 9, 2018, 3:16 am UTC
 *
 * @method Medicamento findWithoutFail($id, $columns = ['*'])
 * @method Medicamento find($id, $columns = ['*'])
 * @method Medicamento first($columns = ['*'])
*/
class MedicamentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nome',
        'Descricao',
        'fabricante'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Medicamento::class;
    }
}

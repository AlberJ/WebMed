<?php

namespace App\Repositories;

use App\Models\$UserLogin;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class $UserLoginRepository
 * @package App\Repositories
 * @version January 10, 2018, 1:26 am UTC
 *
 * @method $UserLogin findWithoutFail($id, $columns = ['*'])
 * @method $UserLogin find($id, $columns = ['*'])
 * @method $UserLogin first($columns = ['*'])
*/
class $UserLoginRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cpf',
        'password',
        'tipousuario',
        'ativo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return $UserLogin::class;
    }
}

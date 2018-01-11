<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class UserLogin
 * @package App\Models
 * @version January 10, 2018, 1:56 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection consulta
 * @property string cpf
 * @property string password
 * @property string tipousuario
 * @property integer ativo
 */
class UserLogin extends Model
{

    public $table = 'userlogin';
    
    public $timestamps = false;



    public $fillable = [
        'cpf',
        'password',
        'tipousuario',
        'ativo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cpf' => 'string',
        'password' => 'string',
        'tipousuario' => 'string',
        'ativo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

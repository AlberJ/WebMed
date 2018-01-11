<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Medico
 * @package App\Models
 * @version January 9, 2018, 3:15 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Consultum
 * @property integer CRM
 * @property string Nome
 * @property string Telefone
 * @property date DataNasc
 * @property string Especialidade
 */
class Medico extends Model
{

    public $table = 'medico';
    
    public $timestamps = false;



    public $fillable = [
        'CRM',
        'Nome',
        'Telefone',
        'DataNasc',
        'Especialidade'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'CRM' => 'integer',
        'Nome' => 'string',
        'Telefone' => 'string',
        'DataNasc' => 'date',
        'Especialidade' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function consulta()
    {
        return $this->hasMany(\App\Models\Consultum::class);
    }
}

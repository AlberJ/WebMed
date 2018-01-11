<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Medicamento
 * @package App\Models
 * @version January 9, 2018, 3:16 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection consulta
 * @property \Illuminate\Database\Eloquent\Collection Prescricao
 * @property string Nome
 * @property string Descricao
 * @property string fabricante
 */
class Medicamento extends Model
{

    public $table = 'medicamento';
    
    public $timestamps = false;



    public $fillable = [
        'Nome',
        'Descricao',
        'fabricante'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Nome' => 'string',
        'Descricao' => 'string',
        'fabricante' => 'string'
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
    public function prescricaos()
    {
        return $this->hasMany(\App\Models\Prescricao::class);
    }
}

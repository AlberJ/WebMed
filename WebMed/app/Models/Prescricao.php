<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Prescricao
 * @package App\Models
 * @version January 9, 2018, 3:17 am UTC
 *
 * @property \App\Models\Consultum consultum
 * @property \App\Models\Exame exame
 * @property \App\Models\Medicamento medicamento
 * @property \Illuminate\Database\Eloquent\Collection consulta
 * @property integer idConsulta
 * @property integer idMedicamento
 * @property integer idExame
 * @property string Comentario
 */
class Prescricao extends Model
{

    public $table = 'prescricao';
    
    public $timestamps = false;



    public $fillable = [
        'idConsulta',
        'idMedicamento',
        'idExame',
        'Comentario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idConsulta' => 'integer',
        'idMedicamento' => 'integer',
        'idExame' => 'integer',
        'Comentario' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function consultum()
    {
        return $this->belongsTo(\App\Models\Consultum::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function exame()
    {
        return $this->belongsTo(\App\Models\Exame::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function medicamento()
    {
        return $this->belongsTo(\App\Models\Medicamento::class);
    }
}

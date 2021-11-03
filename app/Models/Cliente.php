<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version October 26, 2021, 3:04 am UTC
 *
 * @property string $apn_nom
 * @property integer $celular
 * @property string $sexo
 */
class Cliente extends Model
{
    //use SoftDeletes;

    public $table = 'cliente';
    protected $primaryKey= 'idcliente';
    public $timestamps= false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'apn_nom',
        'celular',
        'sexo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcliente' => 'integer',
        'apn_nom' => 'string',
        'celular' => 'integer',
        'sexo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'apn_nom' => 'nullable|string|max:45',
        'celular' => 'nullable|integer',
        'sexo' => 'nullable|string|max:45'
    ];

    
}

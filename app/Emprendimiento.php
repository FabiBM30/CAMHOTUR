<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Emprendimiento
 *
 * @property $idEmprendimiento
 * @property $nombreEmprendimiento
 * @property $descripcionEmprendimiento
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Emprendimiento extends Model
{
    
    static $rules = [
//		'idEmprendimiento' => 'required',
		'nombreEmprendimiento' => 'required',
		'descripcionEmprendimiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEmprendimiento','nombreEmprendimiento','descripcionEmprendimiento'];



}

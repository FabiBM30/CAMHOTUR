<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Distrito
 *
 * @property $id
 * @property $nombreDistrito
 * @property $descripcionDistrito
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Distrito extends Model
{
  protected $primaryKey = 'id';
    static $rules = [
		'nombreDistrito' => 'required',
		'descripcionDistrito' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','nombreDistrito','descripcionDistrito', 'imagenDistrito'];

}


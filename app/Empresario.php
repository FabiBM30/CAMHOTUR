<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresario
 *
 * @property $idEmpresario
 * @property $nombreEmpresario
 * @property $apellidoEmpresario
 * @property $generoEmpresario
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresario extends Model
{
  protected $primaryKey = 'idEmpresario';
    static $rules = [
		//'idEmpresario' => 'required',
		'nombreEmpresario' => 'required',
		'apellidoEmpresario' => 'required',
		'generoEmpresario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEmpresario','nombreEmpresario','apellidoEmpresario','generoEmpresario'];



}

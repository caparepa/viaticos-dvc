<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\DB;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    //
    use Authenticatable, CanResetPassword;

    //roles de usuarios
    const ROL_SUPER = 'superadmin';
    const ROL_ADMIN = 'admin';
    const ROL_USUARIO = 'usuario';

    //status de usuarios
    const STATUS_ACTIVE = 'active';
    const STATUS_BLOCKED = 'blocked';

    //cargos de usuarios
    const CARGO_DIRECTOR = 'direccion';
    const CARGO_GERENTE_PROYECTOS = 'proyectos';
    const CARGO_ADMINISTRACION = 'administracion';
    const CARGO_CAPTACION = 'captacion';
    const CARGO_COMUNICACION = 'comunicacion';

    public $timestamps = true;

    //Tabla a utilizar en base de datos
    protected $table = 'usuarios';

    //Atributos a utilizar en BD
    protected $fillable = [
		'nombre',
		'apellido',
		'email',
		'password',
		'ci_rif',
		'telefono',
		'cargo',
		'rol',
		'status',
		'created_by'
	];

	//Atributos protegidos
	protected $hidden = ['password', 'remember_token'];

    //fechas
    protected $dates = ['created_at', 'updated_at', 'last_login'];
}

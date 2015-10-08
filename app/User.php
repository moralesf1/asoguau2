<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Validator;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, SoftDeletes;

	protected $dates = ['deleted_at'];

	/*
	 * Aqui son las reglas de validacion
	 * */

	public static $rules = [
		'nombre'   => 'required',
		'apellido' => 'required',
		'telefono' => 'required',
		'correo'   => 'required|email',
		'password' => 'required'
	];

	public static $messages;

	public static function isValid($input)
	{
		$validator = Validator::make($input, self::$rules);

		if ($validator->fails()) {
			self::$messages = $validator->messages();
			return false;
		}
		return true;
	}

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuario';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','telefono','correo', 'password', 'idtipousuario', 'idestatususuario'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', 'idestatususuario'];

	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = \Hash::make($value);
	}

	public function rol()
	{
		return $this->belongsTo('App\Rol', 'idtipousuario', 'id');
	}
}

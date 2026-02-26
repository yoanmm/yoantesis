<?php
/**
*@author Yoan  
*@date Fri May 09 13:47:32 GMT-04:00 2025  
*@time Fri May 09 13:47:32 GMT-04:00 2025  
*/
namespace Modules\security\Models;


use App\Models\BaseModel;

use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Modules\general\Models\Persona;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * Este es la clase modelo para la tabla usuarios.
 *
 * Los siguientes son los campos de la tabla 'usuarios':
 * @property integer $id_usuario
 * @property string $username
 * @property string $password
 * @property string $correo
 * @property Carbon $creado
 * @property Carbon $actualizado
 * @property boolean $activo
 * @property integer $id_persona

 * Los siguientes son las relaciones de este modelo :

 * @property Persona $persona
 * @property Log[] $array_log
 * @property Usuario_rol[] $array_usuario_rol
 **/



class Usuarios extends BaseModel implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract,
    JWTSubject
{
    use \Illuminate\Auth\Authenticatable, \Illuminate\Foundation\Auth\Access\Authorizable, \Illuminate\Auth\Passwords\CanResetPassword, \Illuminate\Auth\MustVerifyEmail,HasFactory,Notifiable;
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'usuarios';

   /**
     * The connection name for the model.
     *
     * @var string|null
     */
    protected $connection = 'db';

    /**
     * The primarykey associated with the table-model.
     *
     * @var integer
     */
    protected $primaryKey = 'id_usuario';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */

    public $timestamps = false;


    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password'];

    const RELATIONS = ['persona','array_log','array_usuario_rol'];
/**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 15;

    protected $appends = [];

    /**
     * Model Class Name
     *
     * @var string
     */
    const MODEL = 'Usuarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id_usuario',
      'username',
      'password',
      'correo',
      'creado',
      'actualizado',
      'activo',
      'id_persona'
    ];

	 /**
     * Get the Persona
     */
	  public function persona()
		{
			return $this->belongsTo(Persona::class,'id_persona','id_persona');
		}


	 /**
     * 
     * Get array_log
     */
	  public function array_log()
		{
			return $this->hasMany(Log::class,'id_usuario','id_usuario');
		}

	 /**
     * 
     * Get array_usuario_rol
     */
	  public function array_usuario_rol()
		{
			return $this->hasMany(Usuario_rol::class,'id_usuario','id_usuario');
		}

//    public function hasPermission($controller, $action) {
//        // Buscamos si alguno de los roles del usuario tiene el permiso
//        return $this->array_usuario_rol()->whereHas('permisos', function($query) use ($controller, $action) {
//            $query->where('controller', $controller)
//                ->where('accion', $action)
//                ->where('habilitado', 1);
//        })->exists();
//    }

    protected function rules($scenario='create')
    {
          $rules=[
            'create'=>[
                'username' =>'nullable|max:255',
                'password' =>'nullable|max:255',
                'correo' =>'nullable|max:255',
                'creado' =>'nullable|date',
                'actualizado' =>'nullable|date',
                'activo' =>'nullable|boolean',
                'id_persona' =>'nullable|exists:'.$this->connection.'.persona,id_persona'
            ],
            'update'=>[
                'id_usuario' =>'required|unique:'.$this->connection.'.usuarios,id_usuario,'.$this->id_usuario.',id_usuario',
                'username' =>'nullable|max:255',
                'password' =>'nullable|max:255',
                'correo' =>'nullable|max:255',
                'creado' =>'nullable|date',
                'actualizado' =>'nullable|date',
                'activo' =>'nullable|boolean',
                'id_persona' =>'nullable|exists:'.$this->connection.'.persona,id_persona'
            ]
        ];
        if(!isset($rules[$scenario]))
            throw new \Exception('Scenario '.$scenario.' not exist');
        return $rules[$scenario];
    }

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::updating(function (Model $model) {
            $changed_pass = $model->isDirty('password');
            if ($changed_pass)
                $model->password = Hash::make($model->password);
        });
        static::creating(function (Model $model) {
            $model->password = Hash::make($model->password);
        });

    }
    public function getAuthPassword()
    {
        return $this->attributes['password'];
    }

    /**
     * @inheritDoc
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Obtiene los nombres de los roles asociados al usuario.
     */
    public function getRoles()
    {
        // Cargamos la relación 'rol' dentro de 'array_usuario_rol'
        // y extraemos solo el nombre.
        return $this->array_usuario_rol->map(function ($item) {
            // Asumiendo que el modelo Usuario_rol tiene una relación 'rol'
            // y esta tiene un atributo 'nombre' o 'name'
            return $item->rol ? $item->rol->nombre_rol : null;
        })->filter()->values()->toArray();
    }
    /**
     * @inheritDoc
     */
    public function getJWTCustomClaims()
    {
        return [
            'username' => $this->username, //
            'correo'   => $this->correo,   // Usamos 'correo' que es el campo en tu tabla
            'roles'    => $this->getRoles(),
        ];
    }
}


<?php
/**
*@author Yoan  
*@date Sat May 10 00:07:04 GMT-04:00 2025  
*@time Sat May 10 00:07:04 GMT-04:00 2025  
*/
namespace Modules\general\Models;


use App\Models\BaseModel;

use Illuminate\Support\Carbon;

/**
 * Este es la clase modelo para la tabla evento_deportivo.
 *
 * Los siguientes son los campos de la tabla 'evento_deportivo':
 * @property integer $id_evento
 * @property string $nombre_evento
 * @property string $descripcion_evento
 * @property string $logo
 * @property Carbon $fecha_inicio
 * @property Carbon $fecha_fin
 * @property string $curso
 * @property string $edicion_evento
 * @property boolean $terminado
 * @property string $resultado_edicion
 * @property string $descripcion_delegaciones
 * @property integer $id_regla_evento

 * Los siguientes son las relaciones de este modelo :

 * @property Evento_deportivo_regla $regla_evento
 * @property Competencia[] $array_competencia
 * @property Delegacion_evento[] $array_delegacion_evento
 **/



class Evento_deportivo extends BaseModel 
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'evento_deportivo';

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
    protected $primaryKey = 'id_evento';

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

    const RELATIONS = ['regla_evento','array_competencia','array_delegacion_evento'];
/**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 15;

    protected $appends = [];

    protected $casts = [
        'fecha_inicio' => 'date:Y-m-d',
        'fecha_fin' => 'date:Y-m-d',
    ];

    /**
     * Model Class Name
     *
     * @var string
     */
    const MODEL = 'Evento_deportivo';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id_evento',
      'nombre_evento',
      'descripcion_evento',
      'logo',
      'fecha_inicio',
      'fecha_fin',
      'curso',
      'edicion_evento',
      'terminado',
      'resultado_edicion',
      'descripcion_delegaciones',
      'id_regla_evento',
      'reglamento'
    ];

	 /**
     * Get the Evento_deportivo_regla
     */
	  public function regla_evento()
		{
			return $this->belongsTo(Evento_deportivo_regla::class,'id_regla_evento','id_regla_evento');
		}


	 /**
     * 
     * Get array_competencia
     */
	  public function array_competencia()
		{
			return $this->hasMany(Competencia::class,'id_evento','id_evento');
		}

	 /**
     * 
     * Get array_delegacion_evento
     */
	  public function array_delegacion_evento()
		{
			return $this->hasMany(Delegacion_evento::class,'id_evento','id_evento');
		}


    protected function rules($scenario='create')
    {
            $rules=[
            'create'=>[
              'nombre_evento' =>'nullable|max:255',
              'descripcion_evento' =>'nullable|max:255',
              'logo' =>'nullable|max:255',
              'fecha_inicio' =>'nullable|date|after_or_equal:today',
              'fecha_fin' =>'nullable|date|after_or_equal:fecha_inicio',
              'curso' =>'nullable|max:255',
              'edicion_evento' =>'nullable|max:255',
              'terminado' =>'nullable|boolean',
              'resultado_edicion' =>'nullable',
              'descripcion_delegaciones' =>'nullable|max:255',
              'id_regla_evento' =>'nullable|exists:'.$this->connection.'.evento_deportivo_regla,id_regla_evento',
              'reglamento' =>'nullable|max:255'
            ],
            'update'=>[
              'id_evento' =>'required|unique:'.$this->connection.'.evento_deportivo,id_evento,'.$this->id_evento.',id_evento',
              'nombre_evento' =>'nullable|max:255',
              'descripcion_evento' =>'nullable|max:255',
              'logo' =>'nullable|max:255',
              'fecha_inicio' =>'nullable|date|after_or_equal:today',
              'fecha_fin' =>'nullable|date|after_or_equal:fecha_inicio',
              'curso' =>'nullable|max:255',
              'edicion_evento' =>'nullable|max:255',
              'terminado' =>'nullable|boolean',
              'resultado_edicion' =>'nullable',
              'descripcion_delegaciones' =>'nullable|max:255',
              'id_regla_evento' =>'nullable|exists:'.$this->connection.'.evento_deportivo_regla,id_regla_evento',
              'reglamento' =>'nullable|max:255'
            ]
          ];
        if(!isset($rules[$scenario]))
            throw new \Exception('Scenario '.$scenario.' not exist');
        return $rules[$scenario];
    }

 protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

    }

}


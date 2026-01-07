<?php
/**Generate by ASGENS
*@author Yoan  
*@date Sat May 10 00:07:04 GMT-04:00 2025  
*@time Sat May 10 00:07:04 GMT-04:00 2025  
*/
namespace Modules\general\Models;


use App\Models\BaseModel;


/**
 * Este es la clase modelo para la tabla delegacion.
 *
 * Los siguientes son los campos de la tabla 'delegacion':
 * @property integer $id_delegacion
 * @property string $nombre_delegacion
 * @property string $abreviatura
 * @property string $mascota
 * @property string $color
 * @property string $logo
 * @property integer $id_tipo_delegacion
 * @property integer $id_regla_delegacion

 * Los siguientes son las relaciones de este modelo :

 * @property Delegacion_tipo $tipo_delegacion
 * @property Delegacion_regla $regla_delegacion
 * @property Congresillo_asistencia[] $array_congresillo_asistencia
 * @property Delegacion_evento[] $array_delegacion_evento
 * @property Equipo[] $array_equipo
 * @property Juego_delegacion[] $array_juego_delegacion
 * @property Reclamacion[] $array_reclamacion
 * @property Sancion[] $array_sancion
 **/



class Delegacion extends BaseModel 
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'delegacion';

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
    protected $primaryKey = 'id_delegacion';

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

    const RELATIONS = ['tipo_delegacion','regla_delegacion','array_congresillo_asistencia','array_delegacion_evento','array_equipo','array_juego_delegacion','array_reclamacion','array_sancion'];
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
    const MODEL = 'Delegacion';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id_delegacion',
      'nombre_delegacion',
      'abreviatura',
      'mascota',
      'color',
      'logo',
      'id_tipo_delegacion',
      'id_regla_delegacion',
      'reglamento'
    ];

	 /**
     * Get the Delegacion_tipo
     */
	  public function tipo_delegacion()
		{
			return $this->belongsTo(Delegacion_tipo::class,'id_tipo_delegacion','id_tipo_delegacion');
		}

	 /**
     * Get the Delegacion_regla
     */
	  public function regla_delegacion()
		{
			return $this->belongsTo(Delegacion_regla::class,'id_regla_delegacion','id_regla_delegacion');
		}


	 /**
     * 
     * Get array_congresillo_asistencia
     */
	  public function array_congresillo_asistencia()
		{
			return $this->hasMany(Congresillo_asistencia::class,'id_delegacion','id_delegacion');
		}

	 /**
     * 
     * Get array_delegacion_evento
     */
	  public function array_delegacion_evento()
		{
			return $this->hasMany(Delegacion_evento::class,'id_delegacion','id_delegacion');
		}

	 /**
     * 
     * Get array_equipo
     */
	  public function array_equipo()
		{
			return $this->hasMany(Equipo::class,'id_delegacion','id_delegacion');
		}

	 /**
     * 
     * Get array_juego_delegacion
     */
	  public function array_juego_delegacion()
		{
			return $this->hasMany(Juego_delegacion::class,'id_delegacion','id_delegacion');
		}

	 /**
     * 
     * Get array_reclamacion
     */
	  public function array_reclamacion()
		{
			return $this->hasMany(Reclamacion::class,'id_delegacion','id_delegacion');
		}

	 /**
     * 
     * Get array_sancion
     */
	  public function array_sancion()
		{
			return $this->hasMany(Sancion::class,'id_delegacion','id_delegacion');
		}


    protected function rules($scenario='create')
    {
          $rules=[
            'create'=>[
                'nombre_delegacion' =>'nullable|max:255',
                'abreviatura' =>'nullable|max:255',
                'mascota' =>'nullable|max:255',
                'color' =>'nullable|max:255',
                'logo' =>'nullable|max:255',
                'id_tipo_delegacion' =>'nullable|exists:'.$this->connection.'.delegacion_tipo,id_tipo_delegacion',
                'id_regla_delegacion' =>'nullable|exists:'.$this->connection.'.delegacion_regla,id_regla_delegacion',
                'reglamento' =>'nullable|max:255'
            ],
            'update'=>[
                'id_delegacion' =>'required|unique:'.$this->connection.'.delegacion,id_delegacion,'.$this->id_delegacion.',id_delegacion',
                'nombre_delegacion' =>'nullable|max:255',
                'abreviatura' =>'nullable|max:255',
                'mascota' =>'nullable|max:255',
                'color' =>'nullable|max:255',
                'logo' =>'nullable|max:255',
                'id_tipo_delegacion' =>'nullable|exists:'.$this->connection.'.delegacion_tipo,id_tipo_delegacion',
                'id_regla_delegacion' =>'nullable|exists:'.$this->connection.'.delegacion_regla,id_regla_delegacion',
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


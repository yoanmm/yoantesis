<?php
/**Generate by ASGENS
*@author Yoan  
*@date Sat May 10 00:07:04 GMT-04:00 2025  
*@time Sat May 10 00:07:04 GMT-04:00 2025  
*/
namespace Modules\general\Models;


use App\Models\BaseModel;


/**
 * Este es la clase modelo para la tabla deporte.
 *
 * Los siguientes son los campos de la tabla 'deporte':
 * @property integer $id_deporte
 * @property string $nombre_deporte
 * @property integer $max_atleta
 * @property integer $min_atleta
 * @property string $icono_deporte
 * @property string $genero
 * @property boolean $individual
 * @property integer $id_categoria
 * @property integer $id_regla
 * @property integer $id_deporte_padre

 * Los siguientes son las relaciones de este modelo :

 * @property Deporte_categoria_puntuacion $categoria
 * @property Deporte $deporte_padre
 * @property Deporte_regla $regla
 * @property Competencia[] $array_competencia
 * @property Deporte[] $array_deporte
 * @property Persona_arbitro[] $array_persona_arbitro
 **/



class Deporte extends BaseModel 
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'deporte';

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
    protected $primaryKey = 'id_deporte';

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

    const RELATIONS = ['categoria','deporte_padre','regla','array_competencia','array_deporte','array_persona_arbitro'];
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
    const MODEL = 'Deporte';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id_deporte',
      'nombre_deporte',
      'max_atleta',
      'min_atleta',
      'icono_deporte',
      'genero',
      'individual',
      'id_categoria',
      'id_regla',
      'id_deporte_padre'
    ];

	 /**
     * Get the Deporte_categoria_puntuacion
     */
	  public function categoria()
		{
			return $this->belongsTo(Deporte_categoria_puntuacion::class,'id_categoria','id_categoria');
		}

	 /**
     * Get the Deporte
     */
	  public function deporte_padre()
		{
			return $this->belongsTo(Deporte::class,'id_deporte_padre','id_deporte');
		}

	 /**
     * Get the Deporte_regla
     */
	  public function regla()
		{
			return $this->belongsTo(Deporte_regla::class,'id_regla','id_regla_deporte');
		}


	 /**
     * 
     * Get array_competencia
     */
	  public function array_competencia()
		{
			return $this->hasMany(Competencia::class,'id_deporte','id_deporte');
		}

	 /**
     * 
     * Get array_deporte
     */
	  public function array_deporte()
		{
			return $this->hasMany(Deporte::class,'id_deporte_padre','id_deporte');
		}

	 /**
     * 
     * Get array_persona_arbitro
     */
	  public function array_persona_arbitro()
		{
			return $this->hasMany(Persona_arbitro::class,'id_deporte','id_deporte');
		}


    protected function rules($scenario='create')
    {
          $rules=[
            'create'=>[
                'nombre_deporte' =>'nullable|max:255',
                'max_atleta' =>'nullable',
                'min_atleta' =>'nullable',
                'icono_deporte' =>'nullable|max:255',
                'genero' =>'nullable|max:255',
                'individual' =>'nullable|boolean',
                'id_categoria' =>'nullable|exists:'.$this->connection.'.deporte_categoria_puntuacion,id_categoria',
                'id_regla' =>'nullable|exists:'.$this->connection.'.deporte_regla,id_regla_deporte',
                'id_deporte_padre' =>'nullable|exists:'.$this->connection.'.deporte,id_deporte'
            ],
            'update'=>[
                'id_deporte' =>'required|unique:'.$this->connection.'.deporte,id_deporte,'.$this->id_deporte.',id_deporte',
                'nombre_deporte' =>'nullable|max:255',
                'max_atleta' =>'nullable',
                'min_atleta' =>'nullable',
                'icono_deporte' =>'nullable|max:255',
                'genero' =>'nullable|max:255',
                'individual' =>'nullable|boolean',
                'id_categoria' =>'nullable|exists:'.$this->connection.'.deporte_categoria_puntuacion,id_categoria',
                'id_regla' =>'nullable|exists:'.$this->connection.'.deporte_regla,id_regla_deporte',
                'id_deporte_padre' =>'nullable|exists:'.$this->connection.'.deporte,id_deporte'
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


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
      'id_deporte_padre',
      'reglamento',
      'activo'
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
                'icono_deporte' =>'nullable',
                'genero' =>'nullable|max:255',
                'individual' =>'nullable|boolean',
                'id_categoria' =>'nullable|exists:'.$this->connection.'.deporte_categoria_puntuacion,id_categoria',
                'id_regla' =>'nullable|exists:'.$this->connection.'.deporte_regla,id_regla_deporte',
                'id_deporte_padre' =>'nullable|exists:'.$this->connection.'.deporte,id_deporte',
                'reglamento' =>'nullable',
                'activo' =>'nullable'
            ],
            'update'=>[
                'id_deporte' =>'required|unique:'.$this->connection.'.deporte,id_deporte,'.$this->id_deporte.',id_deporte',
                'nombre_deporte' =>'nullable|max:255',
                'max_atleta' =>'nullable',
                'min_atleta' =>'nullable',
                'icono_deporte' =>'nullable',
                'genero' =>'nullable|max:255',
                'individual' =>'nullable|boolean',
                'id_categoria' =>'nullable|exists:'.$this->connection.'.deporte_categoria_puntuacion,id_categoria',
                'id_regla' =>'nullable|exists:'.$this->connection.'.deporte_regla,id_regla_deporte',
                'id_deporte_padre' =>'nullable|exists:'.$this->connection.'.deporte,id_deporte',
                'reglamento' =>'nullable',
                'activo' =>'nullable'
            ]
        ];
        if(!isset($rules[$scenario]))
            throw new \Exception('Scenario '.$scenario.' not exist');
        return $rules[$scenario];
    }

 protected static function boot()
    {
        parent::boot();
        
        // Procesar archivos base64 antes de guardar
        static::saving(function ($model) {
            if (isset($model->icono_deporte) && is_string($model->icono_deporte) && strpos($model->icono_deporte, 'data:') === 0) {
                $model->icono_deporte = self::save_base64_file($model->icono_deporte, 'icono');
            }
            if (isset($model->reglamento) && is_string($model->reglamento) && strpos($model->reglamento, 'data:') === 0) {
                $model->reglamento = self::save_base64_file($model->reglamento, 'reglamento');
            }
        });
    }

    /**
     * Guardar archivo base64
     */
    private static function save_base64_file($base64_data, $field_name)
    {
        if (empty($base64_data) || !is_string($base64_data)) {
            return null;
        }

        // Extraer el formato y los datos
        if (preg_match('/^data:([^;]+);base64,(.*)$/', $base64_data, $matches)) {
            $mime_type = $matches[1];
            $base64_string = $matches[2];
            
            // Decodificar base64
            $file_content = base64_decode($base64_string);
            if ($file_content === false) {
                return null;
            }

            // Determinar extensión del archivo
            $ext = self::get_extension_from_mime($mime_type);
            
            // Crear directorio si no existe
            $upload_dir = public_path('uploads/deporte/' . $field_name);
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }

            // Generar nombre único
            $filename = time() . '_' . uniqid() . '.' . $ext;
            $file_path = $upload_dir . '/' . $filename;
            
            // Guardar archivo
            file_put_contents($file_path, $file_content);
            
            // Retornar ruta relativa
            return 'uploads/deporte/' . $field_name . '/' . $filename;
        }

        return null;
    }

    /**
     * Obtener extensión del archivo según MIME type
     */
    private static function get_extension_from_mime($mime_type)
    {
        $mime_types = [
            'image/jpeg' => 'jpg',
            'image/png' => 'png',
            'image/gif' => 'gif',
            'application/pdf' => 'pdf',
            'application/msword' => 'doc',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx',
            'text/plain' => 'txt',
        ];

        return $mime_types[$mime_type] ?? 'bin';
    }

}


<?php
/**
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
                'mascota' =>'nullable|mimes:jpeg,jpg,png,svg',
                'color' =>'nullable|max:255',
                'logo' =>'nullable|mimes:jpeg,jpg,png,svg',
                'id_tipo_delegacion' =>'nullable|exists:'.$this->connection.'.delegacion_tipo,id_tipo_delegacion',
                'id_regla_delegacion' =>'nullable|exists:'.$this->connection.'.delegacion_regla,id_regla_delegacion',
                'reglamento' =>'nullable|mimes:pdf,doc,docx,txt',
            ],
            'update'=>[
                'id_delegacion' =>'required|unique:'.$this->connection.'.delegacion,id_delegacion,'.$this->id_delegacion.',id_delegacion',
                'nombre_delegacion' =>'nullable|max:255',
                'abreviatura' =>'nullable|max:255',
                'mascota' =>'nullable|mimes:jpeg,jpg,png,svg',
                'color' =>'nullable|max:255',
                'logo' =>'nullable|mimes:jpeg,jpg,png,svg',
                'id_tipo_delegacion' =>'nullable|exists:'.$this->connection.'.delegacion_tipo,id_tipo_delegacion',
                'id_regla_delegacion' =>'nullable|exists:'.$this->connection.'.delegacion_regla,id_regla_delegacion',
                'reglamento' =>'nullable|mimes:pdf,doc,docx,txt',
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
            if (isset($model->mascota) && is_string($model->mascota) && strpos($model->mascota, 'data:') === 0) {
                $model->mascota = self::save_base64_file($model->mascota, 'mascota');
            }
            if (isset($model->logo) && is_string($model->logo) && strpos($model->logo, 'data:') === 0) {
                $model->logo = self::save_base64_file($model->logo, 'logo');
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
            $upload_dir = public_path('uploads/delegacion/' . $field_name);
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }

            // Generar nombre único
            $filename = time() . '_' . uniqid() . '.' . $ext;
            $file_path = $upload_dir . '/' . $filename;
            
            // Guardar archivo
            file_put_contents($file_path, $file_content);
            
            // Retornar ruta relativa
            //return /*'uploads/delegacion/' . $field_name . '/' .*/ $filename;
            return 'http://localhost/yoantesis/deport/public/uploads/delegacion/' . $field_name . '/' . $filename;
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
            'image/svg+xml' => 'svg',
            'image/svg' => 'svg',
            'application/pdf' => 'pdf',
            'application/msword' => 'doc',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx',
            'text/plain' => 'txt',
        ];

        return $mime_types[$mime_type] ?? 'bin';
    }

}


<?php


namespace Modules\security\Services;


use App\Services\Services;
use Modules\security\Models\Log;

class LogService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\security\Models\Log');
   }


    static public function createAny($accion,$table_name,$record)
    {
        date_default_timezone_set('America/Havana'); // Reemplaza 'America/Havana' con tu zona horaria

        $log = new Log();
        $log->fill([
            'id_usuario' => auth()->user()?auth()->user()->id_usuario:'__',
            'email' => auth()->user()?auth()->user()->correo:"__",
            'creado' => date('Y-m-d H:i:s'),
            'actualizado' => date('Y-m-d H:i:s'),
            'nombre_accion' => $accion,
            'ip' => \request()->ip(),
            'record' => $record,
            'tabla' => $table_name,
        ]);
        return $log->save_model();
    }
}


<?php

namespace Modules\general\Services;

use App\Services\Services;
use Modules\general\Models\Compromiso_participacion;

class Compromiso_participacionService extends Services
{
    public function __construct()
    {
        parent::__construct('Modules\general\Models\Compromiso_participacion');
    }

    /**
     * Crear compromiso con verificación de duplicados
     */
    public function create($params)
{
    $exists = Compromiso_participacion::with(['delegacion_evento','deporte'])
        ->where('id_delegacion_evento', $params['id_delegacion_evento'] ?? null)
        ->where('id_deporte', $params['id_deporte'] ?? null)
        ->first();

    if ($exists) {
        $delegacionEventoNombre = $exists->delegacion_evento ? $exists->delegacion_evento->nombre : '';
        $deporteNombre = $exists->deporte ? $exists->deporte->nombre_deporte : '';
        return [
            'success' => false,
            'message' => "El compromiso con {$delegacionEventoNombre} y deporte {$deporteNombre} ya existe."
        ];
    }

    // Solo crea si no existe
    return parent::create($params);
}
/**
 * Poner todos los deportes como inactivos (activo = 0).
 */
public static function desactivarTodos()
{
    return self::query()->update(['activo' => 0]);
}

}

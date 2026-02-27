<?php

namespace Modules\general\Services;

use App\Services\Services;
use Modules\general\Models\Compromiso_participacion;

class Compromiso_participacionService extends Services
{
    public function __construct($model = null)
    {
        parent::__construct('Modules\general\Models\Compromiso_participacion');
    }

    public function create($params)
    {
    $id_delegacion_evento = $params['id_delegacion_evento'] ?? null;
    $id_deporte = $params['id_deporte'] ?? null;

    $exists = Compromiso_participacion::with(['delegacion_evento','deporte'])
        ->where('id_delegacion_evento', $id_delegacion_evento)
        ->where('id_deporte', $id_deporte)
        ->first();

    if ($exists) {
        return [
            'success' => false,
            'delegacion_evento' => optional($exists->delegacion_evento)->nombre,
            'deporte' => optional($exists->deporte)->nombre_deporte,
            'message' => "Ya existe el compromiso para '" .
                optional($exists->delegacion_evento)->nombre .
                "' con el deporte '" .
                optional($exists->deporte)->nombre_deporte .
                "'."
        ];
    }

    $created = parent::create($params);
}
}
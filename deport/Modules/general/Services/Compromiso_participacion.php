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
        dd('ENTRO A create() DEL SERVICE');
        $exists = Compromiso_participacion::where('id_delegacion_evento', $params['id_delegacion_evento'] ?? null)
            ->where('id_deporte', $params['id_deporte'] ?? null)
            ->first();
        if ($exists) {
            return [
                'success' => false,
                'message' => 'Duplicado detectado'
            ];
        }

        return parent::create($params);
    }
}

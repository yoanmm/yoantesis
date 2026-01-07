<?php

namespace Modules\general\Services;

use App\Services\Services;

class Compromiso_participacionService extends Services
{
    public function __construct()
    {
        parent::__construct('Modules\general\Models\Compromiso_participacion');
    }
}

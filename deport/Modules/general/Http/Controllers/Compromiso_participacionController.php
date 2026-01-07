<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Compromiso_participacionController extends RestController
{
    /**
     *  Compromiso_participacionController constructor.
     */
    public function __construct()
    {
        $classnamespace = 'Modules\general\Models\Compromiso_participacion';
        $classnamespaceservice = 'Modules\general\Services\Compromiso_participacionService';
        $this->modelClass = new $classnamespace;
        $this->service = new $classnamespaceservice(new $classnamespace);
    }
}

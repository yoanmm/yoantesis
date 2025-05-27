<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class CompetenciaController extends RestController
{


    /**
     *  CompetenciaController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Competencia';
        $classnamespaceservice='Modules\general\Services\CompetenciaService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}


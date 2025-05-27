<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Atleta_estadoController extends RestController
{


    /**
     *  Atleta_estadoController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Atleta_estado';
        $classnamespaceservice='Modules\general\Services\Atleta_estadoService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}


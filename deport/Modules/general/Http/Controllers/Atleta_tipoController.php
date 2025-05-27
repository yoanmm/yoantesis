<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Atleta_tipoController extends RestController
{


    /**
     *  Atleta_tipoController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Atleta_tipo';
        $classnamespaceservice='Modules\general\Services\Atleta_tipoService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}


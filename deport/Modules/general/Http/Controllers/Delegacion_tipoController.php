<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Delegacion_tipoController extends RestController
{


    /**
     *  Delegacion_tipoController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Delegacion_tipo';
        $classnamespaceservice='Modules\general\Services\Delegacion_tipoService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}


<?php

namespace Modules\security\Http\Controllers;

use App\Http\Controllers\RestController;

class PermisosController extends RestController
{


    /**
     *  PermisosController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\security\Models\Permisos';
        $classnamespaceservice='Modules\security\Services\PermisosService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}


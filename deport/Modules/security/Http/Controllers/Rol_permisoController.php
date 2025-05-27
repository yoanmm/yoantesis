<?php

namespace Modules\security\Http\Controllers;

use App\Http\Controllers\RestController;

class Rol_permisoController extends RestController
{


    /**
     *  Rol_permisoController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\security\Models\Rol_permiso';
        $classnamespaceservice='Modules\security\Services\Rol_permisoService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}


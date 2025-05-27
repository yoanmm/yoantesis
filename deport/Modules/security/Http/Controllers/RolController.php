<?php

namespace Modules\security\Http\Controllers;

use App\Http\Controllers\RestController;

class RolController extends RestController
{


    /**
     *  RolController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\security\Models\Rol';
        $classnamespaceservice='Modules\security\Services\RolService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}


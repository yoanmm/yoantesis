<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class DelegacionController extends RestController
{


    /**
     *  DelegacionController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Delegacion';
        $classnamespaceservice='Modules\general\Services\DelegacionService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}


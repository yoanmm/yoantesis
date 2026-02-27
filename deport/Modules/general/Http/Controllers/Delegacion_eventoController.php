<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;
use Modules\general\Models\Delegacion_evento;
use Illuminate\Http\Request;

class Delegacion_eventoController extends RestController
{


    /**
     *  Delegacion_eventoController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Delegacion_evento';
        $classnamespaceservice='Modules\general\Services\Delegacion_eventoService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }

    public function delete_evento_delgacion(Request $request){
        $data = $request->input('id');
        Delegacion_evento::query()
            ->where('id_evento', $data)
            ->delete();

        return response()->json([
            'evento' => $data,
        ], 200);
    }

}


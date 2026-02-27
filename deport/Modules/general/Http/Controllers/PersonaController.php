<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\general\Models\Persona;
use function Symfony\Component\VarDumper\Dumper\esc;

class PersonaController extends RestController
{


    /**
     *  PersonaController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Persona';
        $classnamespaceservice='Modules\general\Services\PersonaService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


    /**
     * Importar personas desde un fichero JSON subido.
     * Espera un campo file en multipart/form-data que contenga un array JSON de objetos persona.
     */
    public function loadjsonfile(Request $request)
    {
        // 1. Obtener los datos del request
        // Si en el front envías { personas: jsonData } y el JSON ya tiene una clave 'personas',
        // podrías recibirlo como $request->input('personas.personas') o ajustar el front.
        $data = $request->input('personas');

        // Si el JSON viene exactamente como el archivo subido, el array real está en la clave 'personas'
        $listaPersonas = is_array($data) && isset($data['personas']) ? $data['personas'] : $data;

        if (!is_array($listaPersonas)) {
            return response()->json(['message' => 'El formato de datos no es un array válido'], 400);
        }

        $exitos = 0;
        $fallos = 0;

        $carnets=Persona::pluck('carnet')->toArray();
        // 2. Procesar cada registro
        foreach ($listaPersonas as $item) {
            if(!in_array($item['carnet'] , $carnets)){
                try {
                    $entity = new Persona();

                    $entity->nombre   = $item['nombre'] ?? null;
                    $entity->apellido = $item['apellido'] ?? null;
                    $entity->carnet   = $item['carnet'] ?? null;
                    $entity->facultad = $item['facultad'] ?? null;
                    $entity->genero   = $item['genero'] ?? null;
                    $entity->save();
                    // Añade aquí otros campos necesarios
                    $exitos++;

                } catch (\Exception $e) {
                    // Loguear el error si es necesario: \Log::error($e->getMessage());
                    $fallos++;
                }
            }
            else{
                $fallos++;
            }

        }

        // 3. Retornar la respuesta que espera tu frontend
        return response()->json([
            'exitos' => $exitos,
            'fallos' => $fallos
        ], 200);
    }
}

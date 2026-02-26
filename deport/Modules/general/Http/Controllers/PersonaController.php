<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

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
    public function import_from_file(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:json,txt,application/json|max:5120', // 5MB
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Archivo inválido',
                'errors' => $validator->errors(),
            ], 422);
        }

        $file = $request->file('file');

        try {
            $content = $file->get();
            $personas = json_decode($content, true);

            if (!is_array($personas)) {
                return response()->json([
                    'success' => false,
                    'message' => 'El archivo no contiene un array JSON válido',
                ], 422);
            }

            $exitos = 0;
            $fallos = 0;
            $errores = [];

            DB::beginTransaction();

            foreach ($personas as $index => $p) {
                try {
                    // Normalizar datos si hace falta
                    $data = is_array($p) ? $p : (array) $p;

                    // Si tu service tiene un método create o save, usa el correcto.
                    // Aquí intento usar $this->service->create($data) y si no existe, fallback al modelo.
                    if (method_exists($this->service, 'create')) {
                        $this->service->create($data);
                    } elseif (method_exists($this->service, 'save')) {
                        $this->service->save($data);
                    } else {
                        // Fallback directo al modelo (requiere fillable en el modelo)
                        $this->modelClass->create($data);
                    }

                    $exitos++;
                } catch (Exception $e) {
                    $fallos++;
                    $errores[] = [
                        'index' => $index,
                        'data' => $p,
                        'error' => $e->getMessage(),
                    ];
                    // No abortamos todo el proceso por un registro fallido.
                    Log::warning("Error importando persona index {$index}: " . $e->getMessage());
                }
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Importación finalizada',
                'exitos' => $exitos,
                'fallos' => $fallos,
                'errores' => $errores,
            ], 200);

        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error importando fichero personas: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error procesando el archivo',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}

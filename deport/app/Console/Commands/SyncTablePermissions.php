<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SyncTablePermissions extends Command
{
    //se ejecuta poniendo esto en consola: php artisan system:sync-tables
    protected $signature = 'system:sync-tables';
    protected $description = 'Genera permisos automáticos basados en las tablas del sistema';

    public function handle()
    {
        // Lista de tablas extraídas de tu SQL
        $tablas = [
            'atleta_estado', 'atleta_tipo', 'cancha', 'competencia', 'compromiso_participacion',
            'congresillo_asistencia', 'congresillo_deporte', 'delegacion', 'delegacion_evento',
            'delegacion_regla', 'delegacion_tipo', 'deporte', 'deporte_categoria_puntuacion',
            'deporte_regla', 'equipo', 'equipo_atleta', 'equipo_estado', 'evento_deportivo',
            'evento_deportivo_regla', 'juego', 'juego_delegacion', 'juego_fase', 'persona',
            'persona_arbitro', 'persona_atleta', 'reclamacion', 'reclamacion_estado', 'rol',
            'sancion', 'usuarios'
        ];

        // Acciones estándar por cada controlador
        $acciones = [
            'index'   => 'Listar',
            'show'    => 'Ver detalle',
            'store'   => 'Crear',
            'update'  => 'Editar',
            'destroy' => 'Eliminar'
        ];

        $this->info('Iniciando sincronización de permisos...');

        foreach ($tablas as $tabla) {
            // 1. Transformar nombre de tabla a Nombre de Módulo (ej: atleta_estado -> Atleta Estado)
            $moduloNombre = Str::title(str_replace('_', ' ', $tabla));

            // 2. Transformar a Nombre de Controlador (ej: atleta_estado -> AtletaEstadoController)
            $controllerName = Str::studly($tabla) . 'Controller';

            foreach ($acciones as $slug => $descripcion) {
                $code = "{$tabla}.{$slug}";

                DB::table('permisos')->updateOrInsert(
                    ['code' => $code],
                    [
                        'nombre_permiso' => "{$moduloNombre}: {$descripcion}",
                        'modulo'         => $moduloNombre,
                        'controller'     => $controllerName,
                        'accion'         => $slug,
                        'habilitado'     => 1,
                    ]
                );
            }
            $this->line("Permisos para <info>{$moduloNombre}</info> creados.");
        }

        $this->autoAssignToAdmin();

        $this->info('Sincronización finalizada con éxito.');
    }

    protected function autoAssignToAdmin()
    {
        // Asume que el rol ID 1 es el administrador
        $rolAdmin = DB::table('rol')->where('nombre_rol', "Administrador")->first();

        if ($rolAdmin) {
            $permisos = DB::table('permisos')->pluck('id_permiso');
            foreach ($permisos as $id) {
                DB::table('rol_permiso')->updateOrInsert([
                    'id_rol' => $rolAdmin->id_rol,
                    'id_permiso' => $id
                ]);
            }
            $this->info('Todos los permisos han sido asignados al rol: ' . $rolAdmin->nombre_rol);
        }
    }
}
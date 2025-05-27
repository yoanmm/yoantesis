<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Db_evento_deportivoSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        try {

            \Modules\security\Models\Permisos::factory(10)->create();
            \Modules\general\Models\Equipo_estado::factory(10)->create();
            \Modules\general\Models\Delegacion_regla::factory(10)->create();
            \Modules\general\Models\Evento_deportivo_regla::factory(10)->create();
            \Modules\general\Models\Atleta_tipo::factory(10)->create();
            \Modules\general\Models\Deporte_regla::factory(10)->create();
            \Modules\security\Models\Rol::factory(10)->create();
            \Modules\general\Models\Persona::factory(10)->create();
            \Modules\general\Models\Atleta_estado::factory(10)->create();
            \Modules\general\Models\Delegacion_tipo::factory(10)->create();
            \Modules\general\Models\Cancha::factory(10)->create();
            \Modules\general\Models\Deporte_categoria_puntuacion::factory(10)->create();
            \Modules\general\Models\Reclamacion_estado::factory(10)->create();
            \Modules\general\Models\Juego_fase::factory(10)->create();
            \Modules\general\Models\Deporte::factory(10)->create();
            \Modules\general\Models\Reclamacion::factory(10)->create();
            \Modules\general\Models\Competencia::factory(10)->create();
            \Modules\general\Models\Equipo_atleta::factory(10)->create();
            \Modules\general\Models\Juego::factory(10)->create();
            \Modules\general\Models\Equipo::factory(10)->create();
            \Modules\general\Models\Delegacion::factory(10)->create();
            \Modules\security\Models\Usuario_rol::factory(10)->create();
            \Modules\general\Models\Persona_arbitro::factory(10)->create();
            \Modules\general\Models\Juego_delegacion::factory(10)->create();
            \Modules\general\Models\Sancion::factory(10)->create();
            \Modules\general\Models\Delegacion_evento::factory(10)->create();
            \Modules\general\Models\Persona_atleta::factory(10)->create();
            \Modules\general\Models\Congresillo_asistencia::factory(10)->create();
            \Modules\security\Models\Rol_permiso::factory(10)->create();
            \Modules\general\Models\Congresillo_deporte::factory(10)->create();
            \Modules\general\Models\Evento_deportivo::factory(10)->create();
            \Modules\security\Models\Usuarios::factory(10)->create();

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }
}


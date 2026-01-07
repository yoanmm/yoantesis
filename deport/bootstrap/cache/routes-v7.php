<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yrLRuWRfzwEXBAww',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nmg9epQ3yqhEBu0F',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SRNWHy2KnVXuJVmT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9SAK6s9OQQ1NVKXm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3Qhq9olTB0BN66bh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ajXstqpsFjjlY9zQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ROIFJmb3O4tjMRqk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DGcC60S909nqiJyI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/atleta_estado/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wd09wrYpuhWdLHKN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/atleta_estado/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::koHprxulowruxhNa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/atleta_estado/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RtkBkUfmrguotoaW',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/atleta_estado' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'atleta_estado.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'atleta_estado.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/atleta_estado/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'atleta_estado.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/atleta_tipo/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PfFoFsKai32PXwmf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/atleta_tipo/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NxVqicX7sCxORk1O',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/atleta_tipo/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zM1BlJZfuLGS8wSK',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/atleta_tipo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'atleta_tipo.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'atleta_tipo.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/atleta_tipo/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'atleta_tipo.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/cancha/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b5ljSplguG4zRIyl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/cancha/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w42I1iCSHBCuIiCd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/cancha/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m7LXrNgOH96bwCHZ',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/cancha' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cancha.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cancha.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/cancha/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cancha.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/competencia/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lU3WrvovpwiYAg7I',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/competencia/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OEB4YErzNcDbF75g',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/competencia/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rGPIj4R0mrsNN7BB',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/competencia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competencia.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'competencia.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/competencia/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competencia.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/congresillo_asistencia/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MUkTHMHaVyhld2VI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/congresillo_asistencia/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::73sL2Kof5lAjNMhK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/congresillo_asistencia/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::POI9C9NMZspzUfWx',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/congresillo_asistencia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'congresillo_asistencia.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'congresillo_asistencia.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/congresillo_asistencia/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'congresillo_asistencia.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/congresillo_deporte/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FRRjyiUiZu5UFbRM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/congresillo_deporte/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vBwjfNkq9W1J52BI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/congresillo_deporte/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nBhmrtplDVixe728',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/congresillo_deporte' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'congresillo_deporte.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'congresillo_deporte.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/congresillo_deporte/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'congresillo_deporte.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9dvZPqlcTNLTqU7Y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::baxLZlJsx5fxFEZN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sxAzTcbBPJ459rvN',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_evento/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qE5hUOKyHPlIvILT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_evento/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TeIwNAaMu62GCZ08',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_evento/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ECPhsoi3MctyhLUp',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_evento' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_evento.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_evento.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_evento/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_evento.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_regla/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BsXP7604u8k5ZpNj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_regla/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5AnYUvVwkyUksqYP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_regla/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PzF9gFVaIvO0481H',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_regla' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_regla.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_regla.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_regla/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_regla.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_tipo/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G5Bjpkuh6I57UNC7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_tipo/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jLF9UgJZZvwJ15RG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_tipo/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i1enItwawZ980hEa',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_tipo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_tipo.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_tipo.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/delegacion_tipo/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_tipo.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GkstmSQwvanEDivR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ARLoHcWigOhlUOl6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::29G8H3ELARCKOrGu',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deporte.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte_categoria_puntuacion/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QlcTQAKPkDep6se3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte_categoria_puntuacion/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GyjRbtkLR2G9WVBG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte_categoria_puntuacion/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::636CBNfp6eHf05mS',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte_categoria_puntuacion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte_categoria_puntuacion.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deporte_categoria_puntuacion.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte_categoria_puntuacion/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte_categoria_puntuacion.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte_regla/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EpcHiCXHa8jmdr5k',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte_regla/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2maI80mfZiU7ErPI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte_regla/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PujzEW4GhlWDzM9w',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte_regla' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte_regla.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deporte_regla.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/deporte_regla/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte_regla.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jUrrVlwzB3dNNihu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n4qBCnamlE52tYxG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UU1ZEmoRmcaQv0O2',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'equipo.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo_atleta/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6fgWys5SOtBYiFg1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo_atleta/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wLB9jIfBB8pa47gC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo_atleta/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2KblmVSwjgVBzEwK',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo_atleta' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo_atleta.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'equipo_atleta.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo_atleta/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo_atleta.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo_estado/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eOgGG5fj1XKMNQIR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo_estado/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FJNZtxbU6COb63i8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo_estado/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LLe8Hkgq8SAPdchh',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo_estado' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo_estado.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'equipo_estado.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/equipo_estado/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo_estado.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/evento_deportivo/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JDK8BCNZmrs02yJU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/evento_deportivo/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3zV03ZIEIRoXyArX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/evento_deportivo/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lUcZOf4SgsKXrutH',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/evento_deportivo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'evento_deportivo.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'evento_deportivo.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/evento_deportivo/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'evento_deportivo.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/evento_deportivo_regla/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zIWbkqTyTu9AbXSU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/evento_deportivo_regla/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GU0dRCmZDgycbA9H',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/evento_deportivo_regla/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0xC1uUVUqXQ1CnUl',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/evento_deportivo_regla' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'evento_deportivo_regla.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'evento_deportivo_regla.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/evento_deportivo_regla/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'evento_deportivo_regla.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UaAgtksnLj1JEsRl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w40cosm0UYXyiIWQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mADbQnIAXVxVls7x',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'juego.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego_delegacion/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4MCjsP1yBW3jAysQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego_delegacion/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mp2RMyYZjrnzTUhh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego_delegacion/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W2Yte7hadAiCT6sM',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego_delegacion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego_delegacion.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'juego_delegacion.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego_delegacion/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego_delegacion.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego_fase/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FJCODV5rJ14gsq2t',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego_fase/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5U2l5fMJzBIvql06',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego_fase/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F0VjunrLT0oQoaup',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego_fase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego_fase.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'juego_fase.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/juego_fase/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego_fase.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ial6hasDMwxdlwH0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eNYHdWgLpWtowEvR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wR7hMj5a0F1FfUqd',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'persona.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona_arbitro/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PVOw1BqzTC4cTCcp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona_arbitro/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hA4lsufk2WjAklQF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona_arbitro/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j2zjfZq9pWiPulZU',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona_arbitro' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona_arbitro.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'persona_arbitro.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona_arbitro/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona_arbitro.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona_atleta/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6jC9bLpdDPmKY26J',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona_atleta/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kzJGHWviMRcih8kB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona_atleta/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EkUUcpaVgYiKYwgf',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona_atleta' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona_atleta.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'persona_atleta.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/persona_atleta/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona_atleta.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/reclamacion/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8atJ4TcZwBiorhO2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/reclamacion/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::86bVOJbrzaid6DEI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/reclamacion/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1rMH1la7A5DQmMeV',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/reclamacion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reclamacion.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reclamacion.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/reclamacion/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reclamacion.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/reclamacion_estado/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uns2MVO2NlMlbZZe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/reclamacion_estado/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HtFGC26c7QUp9v9d',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/reclamacion_estado/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cJc07v7IajTxU1d4',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/reclamacion_estado' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reclamacion_estado.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reclamacion_estado.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/reclamacion_estado/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reclamacion_estado.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/sancion/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FYMtYYe5zq6dUQS6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/sancion/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0ttEaetWVgOXkzle',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/sancion/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BiUljZu3qpW6gyqc',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/sancion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sancion.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sancion.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/sancion/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sancion.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/compromiso_participacion/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e0irsmWtwvULlkUm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/compromiso_participacion/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hOt0ljDe57kWMf8D',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/compromiso_participacion/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dAfBfDK9QrwCrV2K',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/compromiso_participacion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'compromiso_participacion.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'compromiso_participacion.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/compromiso_participacion/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'compromiso_participacion.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hH5P9gcYFacXRybN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ggGWuTdyUG3ZdCBU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/log/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nyw8uZmIDeb0bR0k',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/log/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5OyV69bkXFDSQkuw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/log/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xC5cvrGrAWm9kRkK',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'log.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/log/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/permisos/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::35nG1WRPedYHzaHz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/permisos/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4WocSG4Jz4rcDRva',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/permisos/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JVrDnV33MzrlW541',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/permisos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permisos.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'permisos.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/permisos/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permisos.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/rol/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TzHEtE4mIeMOJKAu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/rol/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OZNVN33dHQxCJfjf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/rol/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jNQR19BIe5lqDBTR',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/rol' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rol.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'rol.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/rol/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rol.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/rol_permiso/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TnklQ3eXPRFKaFHm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/rol_permiso/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9DFXcrppHFNqpm1U',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/rol_permiso/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BXp2uigeXYLRSgL0',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/rol_permiso' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rol_permiso.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'rol_permiso.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/rol_permiso/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rol_permiso.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/usuario_rol/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5fcxwo4eJzE1dIRs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/usuario_rol/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rX6u66v1E2Ih09JL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/usuario_rol/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OmHVoePtEXXDeB3i',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/usuario_rol' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usuario_rol.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'usuario_rol.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/usuario_rol/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usuario_rol.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/usuarios/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iiNGvdEg0lXrMKxi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/usuarios/update_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AtkcEx2wfD7YqCIb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/usuarios/delete_by_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EXYg0MbsLH7ZaERM',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/usuarios' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usuarios.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'usuarios.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/security/usuarios/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usuarios.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ThZj4YFG2QXgz0KA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/((?:.*?)?\\/?(?:[^\\/\\.]+?)(?:\\-filters\\((?:.*?)\\))?\\.(?:jpeg|jpg|gif|png))(*:81)|/api/(?|general/(?|atleta_(?|estado/([^/]++)(?|(*:135)|/edit(*:148)|(*:156))|tipo/([^/]++)(?|(*:181)|/edit(*:194)|(*:202)))|c(?|ancha/([^/]++)(?|(*:233)|/edit(*:246)|(*:254))|o(?|mp(?|etencia/([^/]++)(?|(*:291)|/edit(*:304)|(*:312))|romiso_participacion/([^/]++)(?|(*:353)|/edit(*:366)|(*:374)))|ngresillo_(?|asistencia/([^/]++)(?|(*:419)|/edit(*:432)|(*:440))|deporte/([^/]++)(?|(*:468)|/edit(*:481)|(*:489)))))|de(?|legacion(?|/([^/]++)(?|(*:529)|/edit(*:542)|(*:550))|_(?|evento/([^/]++)(?|(*:581)|/edit(*:594)|(*:602))|regla/([^/]++)(?|(*:628)|/edit(*:641)|(*:649))|tipo/([^/]++)(?|(*:674)|/edit(*:687)|(*:695))))|porte(?|/([^/]++)(?|(*:726)|/edit(*:739)|(*:747))|_(?|categoria_puntuacion/([^/]++)(?|(*:792)|/edit(*:805)|(*:813))|regla/([^/]++)(?|(*:839)|/edit(*:852)|(*:860)))))|e(?|quipo(?|/([^/]++)(?|(*:896)|/edit(*:909)|(*:917))|_(?|atleta/([^/]++)(?|(*:948)|/edit(*:961)|(*:969))|estado/([^/]++)(?|(*:996)|/edit(*:1009)|(*:1018))))|vento_deportivo(?|/([^/]++)(?|(*:1060)|/edit(*:1074)|(*:1083))|_regla/([^/]++)(?|(*:1111)|/edit(*:1125)|(*:1134))))|juego(?|/([^/]++)(?|(*:1166)|/edit(*:1180)|(*:1189))|_(?|delegacion/([^/]++)(?|(*:1225)|/edit(*:1239)|(*:1248))|fase/([^/]++)(?|(*:1274)|/edit(*:1288)|(*:1297))))|persona(?|/([^/]++)(?|(*:1331)|/edit(*:1345)|(*:1354))|_a(?|rbitro/([^/]++)(?|(*:1387)|/edit(*:1401)|(*:1410))|tleta/([^/]++)(?|(*:1437)|/edit(*:1451)|(*:1460))))|reclamacion(?|/([^/]++)(?|(*:1498)|/edit(*:1512)|(*:1521))|_estado/([^/]++)(?|(*:1550)|/edit(*:1564)|(*:1573)))|sancion/([^/]++)(?|(*:1603)|/edit(*:1617)|(*:1626)))|security/(?|log/([^/]++)(?|(*:1664)|/edit(*:1678)|(*:1687))|permisos/([^/]++)(?|(*:1717)|/edit(*:1731)|(*:1740))|rol(?|/([^/]++)(?|(*:1768)|/edit(*:1782)|(*:1791))|_permiso/([^/]++)(?|(*:1821)|/edit(*:1835)|(*:1844)))|usuario(?|_rol/([^/]++)(?|(*:1881)|/edit(*:1895)|(*:1904))|s/([^/]++)(?|(*:1927)|/edit(*:1941)|(*:1950))))))/?$}sDu',
    ),
    3 => 
    array (
      81 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'image',
          ),
          1 => 
          array (
            0 => 'image_pattern',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'atleta_estado.show',
          ),
          1 => 
          array (
            0 => 'atleta_estado',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'atleta_estado.edit',
          ),
          1 => 
          array (
            0 => 'atleta_estado',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'atleta_estado.update',
          ),
          1 => 
          array (
            0 => 'atleta_estado',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'atleta_estado.destroy',
          ),
          1 => 
          array (
            0 => 'atleta_estado',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      181 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'atleta_tipo.show',
          ),
          1 => 
          array (
            0 => 'atleta_tipo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'atleta_tipo.edit',
          ),
          1 => 
          array (
            0 => 'atleta_tipo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'atleta_tipo.update',
          ),
          1 => 
          array (
            0 => 'atleta_tipo',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'atleta_tipo.destroy',
          ),
          1 => 
          array (
            0 => 'atleta_tipo',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cancha.show',
          ),
          1 => 
          array (
            0 => 'cancha',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      246 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cancha.edit',
          ),
          1 => 
          array (
            0 => 'cancha',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cancha.update',
          ),
          1 => 
          array (
            0 => 'cancha',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cancha.destroy',
          ),
          1 => 
          array (
            0 => 'cancha',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competencia.show',
          ),
          1 => 
          array (
            0 => 'competencium',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competencia.edit',
          ),
          1 => 
          array (
            0 => 'competencium',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'competencia.update',
          ),
          1 => 
          array (
            0 => 'competencium',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'competencia.destroy',
          ),
          1 => 
          array (
            0 => 'competencium',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      353 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'compromiso_participacion.show',
          ),
          1 => 
          array (
            0 => 'compromiso_participacion',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'compromiso_participacion.edit',
          ),
          1 => 
          array (
            0 => 'compromiso_participacion',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      374 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'compromiso_participacion.update',
          ),
          1 => 
          array (
            0 => 'compromiso_participacion',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'compromiso_participacion.destroy',
          ),
          1 => 
          array (
            0 => 'compromiso_participacion',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'congresillo_asistencia.show',
          ),
          1 => 
          array (
            0 => 'congresillo_asistencium',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      432 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'congresillo_asistencia.edit',
          ),
          1 => 
          array (
            0 => 'congresillo_asistencium',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'congresillo_asistencia.update',
          ),
          1 => 
          array (
            0 => 'congresillo_asistencium',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'congresillo_asistencia.destroy',
          ),
          1 => 
          array (
            0 => 'congresillo_asistencium',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      468 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'congresillo_deporte.show',
          ),
          1 => 
          array (
            0 => 'congresillo_deporte',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'congresillo_deporte.edit',
          ),
          1 => 
          array (
            0 => 'congresillo_deporte',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      489 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'congresillo_deporte.update',
          ),
          1 => 
          array (
            0 => 'congresillo_deporte',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'congresillo_deporte.destroy',
          ),
          1 => 
          array (
            0 => 'congresillo_deporte',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      529 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion.show',
          ),
          1 => 
          array (
            0 => 'delegacion',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      542 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion.edit',
          ),
          1 => 
          array (
            0 => 'delegacion',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion.update',
          ),
          1 => 
          array (
            0 => 'delegacion',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion.destroy',
          ),
          1 => 
          array (
            0 => 'delegacion',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      581 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_evento.show',
          ),
          1 => 
          array (
            0 => 'delegacion_evento',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_evento.edit',
          ),
          1 => 
          array (
            0 => 'delegacion_evento',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      602 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_evento.update',
          ),
          1 => 
          array (
            0 => 'delegacion_evento',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_evento.destroy',
          ),
          1 => 
          array (
            0 => 'delegacion_evento',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_regla.show',
          ),
          1 => 
          array (
            0 => 'delegacion_regla',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      641 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_regla.edit',
          ),
          1 => 
          array (
            0 => 'delegacion_regla',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      649 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_regla.update',
          ),
          1 => 
          array (
            0 => 'delegacion_regla',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_regla.destroy',
          ),
          1 => 
          array (
            0 => 'delegacion_regla',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      674 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_tipo.show',
          ),
          1 => 
          array (
            0 => 'delegacion_tipo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_tipo.edit',
          ),
          1 => 
          array (
            0 => 'delegacion_tipo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_tipo.update',
          ),
          1 => 
          array (
            0 => 'delegacion_tipo',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'delegacion_tipo.destroy',
          ),
          1 => 
          array (
            0 => 'delegacion_tipo',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      726 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte.show',
          ),
          1 => 
          array (
            0 => 'deporte',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      739 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte.edit',
          ),
          1 => 
          array (
            0 => 'deporte',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte.update',
          ),
          1 => 
          array (
            0 => 'deporte',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deporte.destroy',
          ),
          1 => 
          array (
            0 => 'deporte',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      792 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte_categoria_puntuacion.show',
          ),
          1 => 
          array (
            0 => 'deporte_categoria_puntuacion',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      805 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte_categoria_puntuacion.edit',
          ),
          1 => 
          array (
            0 => 'deporte_categoria_puntuacion',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      813 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte_categoria_puntuacion.update',
          ),
          1 => 
          array (
            0 => 'deporte_categoria_puntuacion',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deporte_categoria_puntuacion.destroy',
          ),
          1 => 
          array (
            0 => 'deporte_categoria_puntuacion',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte_regla.show',
          ),
          1 => 
          array (
            0 => 'deporte_regla',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      852 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte_regla.edit',
          ),
          1 => 
          array (
            0 => 'deporte_regla',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deporte_regla.update',
          ),
          1 => 
          array (
            0 => 'deporte_regla',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deporte_regla.destroy',
          ),
          1 => 
          array (
            0 => 'deporte_regla',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      896 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo.show',
          ),
          1 => 
          array (
            0 => 'equipo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      909 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo.edit',
          ),
          1 => 
          array (
            0 => 'equipo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo.update',
          ),
          1 => 
          array (
            0 => 'equipo',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'equipo.destroy',
          ),
          1 => 
          array (
            0 => 'equipo',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      948 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo_atleta.show',
          ),
          1 => 
          array (
            0 => 'equipo_atletum',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      961 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo_atleta.edit',
          ),
          1 => 
          array (
            0 => 'equipo_atletum',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      969 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo_atleta.update',
          ),
          1 => 
          array (
            0 => 'equipo_atletum',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'equipo_atleta.destroy',
          ),
          1 => 
          array (
            0 => 'equipo_atletum',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo_estado.show',
          ),
          1 => 
          array (
            0 => 'equipo_estado',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1009 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo_estado.edit',
          ),
          1 => 
          array (
            0 => 'equipo_estado',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1018 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'equipo_estado.update',
          ),
          1 => 
          array (
            0 => 'equipo_estado',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'equipo_estado.destroy',
          ),
          1 => 
          array (
            0 => 'equipo_estado',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1060 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'evento_deportivo.show',
          ),
          1 => 
          array (
            0 => 'evento_deportivo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1074 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'evento_deportivo.edit',
          ),
          1 => 
          array (
            0 => 'evento_deportivo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1083 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'evento_deportivo.update',
          ),
          1 => 
          array (
            0 => 'evento_deportivo',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'evento_deportivo.destroy',
          ),
          1 => 
          array (
            0 => 'evento_deportivo',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1111 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'evento_deportivo_regla.show',
          ),
          1 => 
          array (
            0 => 'evento_deportivo_regla',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'evento_deportivo_regla.edit',
          ),
          1 => 
          array (
            0 => 'evento_deportivo_regla',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'evento_deportivo_regla.update',
          ),
          1 => 
          array (
            0 => 'evento_deportivo_regla',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'evento_deportivo_regla.destroy',
          ),
          1 => 
          array (
            0 => 'evento_deportivo_regla',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego.show',
          ),
          1 => 
          array (
            0 => 'juego',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1180 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego.edit',
          ),
          1 => 
          array (
            0 => 'juego',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1189 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego.update',
          ),
          1 => 
          array (
            0 => 'juego',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'juego.destroy',
          ),
          1 => 
          array (
            0 => 'juego',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1225 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego_delegacion.show',
          ),
          1 => 
          array (
            0 => 'juego_delegacion',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1239 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego_delegacion.edit',
          ),
          1 => 
          array (
            0 => 'juego_delegacion',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1248 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego_delegacion.update',
          ),
          1 => 
          array (
            0 => 'juego_delegacion',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'juego_delegacion.destroy',
          ),
          1 => 
          array (
            0 => 'juego_delegacion',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego_fase.show',
          ),
          1 => 
          array (
            0 => 'juego_fase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1288 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego_fase.edit',
          ),
          1 => 
          array (
            0 => 'juego_fase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'juego_fase.update',
          ),
          1 => 
          array (
            0 => 'juego_fase',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'juego_fase.destroy',
          ),
          1 => 
          array (
            0 => 'juego_fase',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona.show',
          ),
          1 => 
          array (
            0 => 'persona',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona.edit',
          ),
          1 => 
          array (
            0 => 'persona',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona.update',
          ),
          1 => 
          array (
            0 => 'persona',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'persona.destroy',
          ),
          1 => 
          array (
            0 => 'persona',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1387 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona_arbitro.show',
          ),
          1 => 
          array (
            0 => 'persona_arbitro',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1401 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona_arbitro.edit',
          ),
          1 => 
          array (
            0 => 'persona_arbitro',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona_arbitro.update',
          ),
          1 => 
          array (
            0 => 'persona_arbitro',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'persona_arbitro.destroy',
          ),
          1 => 
          array (
            0 => 'persona_arbitro',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona_atleta.show',
          ),
          1 => 
          array (
            0 => 'persona_atletum',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona_atleta.edit',
          ),
          1 => 
          array (
            0 => 'persona_atletum',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1460 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'persona_atleta.update',
          ),
          1 => 
          array (
            0 => 'persona_atletum',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'persona_atleta.destroy',
          ),
          1 => 
          array (
            0 => 'persona_atletum',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1498 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reclamacion.show',
          ),
          1 => 
          array (
            0 => 'reclamacion',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1512 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reclamacion.edit',
          ),
          1 => 
          array (
            0 => 'reclamacion',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reclamacion.update',
          ),
          1 => 
          array (
            0 => 'reclamacion',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reclamacion.destroy',
          ),
          1 => 
          array (
            0 => 'reclamacion',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reclamacion_estado.show',
          ),
          1 => 
          array (
            0 => 'reclamacion_estado',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reclamacion_estado.edit',
          ),
          1 => 
          array (
            0 => 'reclamacion_estado',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reclamacion_estado.update',
          ),
          1 => 
          array (
            0 => 'reclamacion_estado',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reclamacion_estado.destroy',
          ),
          1 => 
          array (
            0 => 'reclamacion_estado',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1603 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sancion.show',
          ),
          1 => 
          array (
            0 => 'sancion',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1617 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sancion.edit',
          ),
          1 => 
          array (
            0 => 'sancion',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1626 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sancion.update',
          ),
          1 => 
          array (
            0 => 'sancion',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sancion.destroy',
          ),
          1 => 
          array (
            0 => 'sancion',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log.show',
          ),
          1 => 
          array (
            0 => 'log',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log.edit',
          ),
          1 => 
          array (
            0 => 'log',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log.update',
          ),
          1 => 
          array (
            0 => 'log',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'log.destroy',
          ),
          1 => 
          array (
            0 => 'log',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permisos.show',
          ),
          1 => 
          array (
            0 => 'permiso',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permisos.edit',
          ),
          1 => 
          array (
            0 => 'permiso',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permisos.update',
          ),
          1 => 
          array (
            0 => 'permiso',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'permisos.destroy',
          ),
          1 => 
          array (
            0 => 'permiso',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rol.show',
          ),
          1 => 
          array (
            0 => 'rol',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1782 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rol.edit',
          ),
          1 => 
          array (
            0 => 'rol',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1791 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rol.update',
          ),
          1 => 
          array (
            0 => 'rol',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'rol.destroy',
          ),
          1 => 
          array (
            0 => 'rol',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1821 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rol_permiso.show',
          ),
          1 => 
          array (
            0 => 'rol_permiso',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rol_permiso.edit',
          ),
          1 => 
          array (
            0 => 'rol_permiso',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1844 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rol_permiso.update',
          ),
          1 => 
          array (
            0 => 'rol_permiso',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'rol_permiso.destroy',
          ),
          1 => 
          array (
            0 => 'rol_permiso',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usuario_rol.show',
          ),
          1 => 
          array (
            0 => 'usuario_rol',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usuario_rol.edit',
          ),
          1 => 
          array (
            0 => 'usuario_rol',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usuario_rol.update',
          ),
          1 => 
          array (
            0 => 'usuario_rol',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'usuario_rol.destroy',
          ),
          1 => 
          array (
            0 => 'usuario_rol',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usuarios.show',
          ),
          1 => 
          array (
            0 => 'usuario',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1941 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usuarios.edit',
          ),
          1 => 
          array (
            0 => 'usuario',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1950 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usuarios.update',
          ),
          1 => 
          array (
            0 => 'usuario',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'usuarios.destroy',
          ),
          1 => 
          array (
            0 => 'usuario',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'image' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{image_pattern}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'image.middleware.cache',
        ),
        'as' => 'image',
        'domain' => '',
        'image' => 
        array (
          'source' => NULL,
          'allow_size' => true,
          'allow_filters' => true,
          'disallow_filters' => false,
          'pattern' => 
          array (
          ),
          'filters' => 
          array (
          ),
          'expires' => 2678400,
          'headers' => 
          array (
          ),
          'cache' => true,
          'cache_path' => 'C:\\wamp64\\www\\yoantesis\\deport\\public',
        ),
        'uses' => '\\Folklore\\Image\\Http\\ImageController@serve',
        'controller' => '\\Folklore\\Image\\Http\\ImageController@serve',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yrLRuWRfzwEXBAww' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:308:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:90:"function (\\Illuminate\\Http\\Request $request) {
    return ["message"=>"Api in Laravel"];
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000031479c920000000002c575e4";}";s:4:"hash";s:44:"5OWFNXc+SXDAFBhpyCNrNKlcY3txQjZ42A41N7d4Vm4=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::yrLRuWRfzwEXBAww',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nmg9epQ3yqhEBu0F' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\AuthController@login',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::Nmg9epQ3yqhEBu0F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SRNWHy2KnVXuJVmT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@register',
        'controller' => 'App\\Http\\Controllers\\AuthController@register',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::SRNWHy2KnVXuJVmT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9SAK6s9OQQ1NVKXm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::9SAK6s9OQQ1NVKXm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3Qhq9olTB0BN66bh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@refresh',
        'controller' => 'App\\Http\\Controllers\\AuthController@refresh',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::3Qhq9olTB0BN66bh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ajXstqpsFjjlY9zQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@userProfile',
        'controller' => 'App\\Http\\Controllers\\AuthController@userProfile',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::ajXstqpsFjjlY9zQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ROIFJmb3O4tjMRqk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:262:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000031479c9a0000000002c575e4";}";s:4:"hash";s:44:"FQi7hQDhBSWSLa4beOQ3hp/8smAmvDs4kD0fX8BhZgE=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ROIFJmb3O4tjMRqk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DGcC60S909nqiJyI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (){
                   return ["message"=>"general"];
               }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000031479ca60000000002c575e4";}";s:4:"hash";s:44:"lvgDvmFtE79W6RKr9LmzSGbhlUksmqD4bAsL1bUL03E=";}}',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::DGcC60S909nqiJyI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wd09wrYpuhWdLHKN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/atleta_estado/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::wd09wrYpuhWdLHKN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::koHprxulowruxhNa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/atleta_estado/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::koHprxulowruxhNa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RtkBkUfmrguotoaW' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/atleta_estado/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::RtkBkUfmrguotoaW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'atleta_estado.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/atleta_estado',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'atleta_estado.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'atleta_estado.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/atleta_estado/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'atleta_estado.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'atleta_estado.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/atleta_estado',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'atleta_estado.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'atleta_estado.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/atleta_estado/{atleta_estado}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'atleta_estado.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'atleta_estado.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/atleta_estado/{atleta_estado}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'atleta_estado.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'atleta_estado.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/atleta_estado/{atleta_estado}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'atleta_estado.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'atleta_estado.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/atleta_estado/{atleta_estado}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'atleta_estado.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_estadoController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PfFoFsKai32PXwmf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/atleta_tipo/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::PfFoFsKai32PXwmf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NxVqicX7sCxORk1O' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/atleta_tipo/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::NxVqicX7sCxORk1O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zM1BlJZfuLGS8wSK' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/atleta_tipo/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::zM1BlJZfuLGS8wSK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'atleta_tipo.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/atleta_tipo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'atleta_tipo.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'atleta_tipo.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/atleta_tipo/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'atleta_tipo.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'atleta_tipo.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/atleta_tipo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'atleta_tipo.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'atleta_tipo.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/atleta_tipo/{atleta_tipo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'atleta_tipo.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'atleta_tipo.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/atleta_tipo/{atleta_tipo}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'atleta_tipo.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'atleta_tipo.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/atleta_tipo/{atleta_tipo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'atleta_tipo.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'atleta_tipo.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/atleta_tipo/{atleta_tipo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'atleta_tipo.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Atleta_tipoController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b5ljSplguG4zRIyl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/cancha/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\CanchaController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\CanchaController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::b5ljSplguG4zRIyl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w42I1iCSHBCuIiCd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/cancha/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\CanchaController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\CanchaController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::w42I1iCSHBCuIiCd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m7LXrNgOH96bwCHZ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/cancha/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\CanchaController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\CanchaController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::m7LXrNgOH96bwCHZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cancha.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/cancha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'cancha.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\CanchaController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\CanchaController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cancha.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/cancha/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'cancha.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\CanchaController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\CanchaController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cancha.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/cancha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'cancha.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\CanchaController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\CanchaController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cancha.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/cancha/{cancha}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'cancha.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\CanchaController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\CanchaController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cancha.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/cancha/{cancha}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'cancha.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\CanchaController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\CanchaController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cancha.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/cancha/{cancha}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'cancha.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\CanchaController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\CanchaController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cancha.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/cancha/{cancha}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'cancha.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\CanchaController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\CanchaController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lU3WrvovpwiYAg7I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/competencia/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::lU3WrvovpwiYAg7I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OEB4YErzNcDbF75g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/competencia/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::OEB4YErzNcDbF75g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rGPIj4R0mrsNN7BB' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/competencia/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::rGPIj4R0mrsNN7BB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competencia.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/competencia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'competencia.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competencia.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/competencia/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'competencia.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competencia.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/competencia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'competencia.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competencia.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/competencia/{competencium}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'competencia.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competencia.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/competencia/{competencium}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'competencia.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competencia.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/competencia/{competencium}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'competencia.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'competencia.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/competencia/{competencium}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'competencia.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\CompetenciaController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MUkTHMHaVyhld2VI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/congresillo_asistencia/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::MUkTHMHaVyhld2VI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::73sL2Kof5lAjNMhK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/congresillo_asistencia/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::73sL2Kof5lAjNMhK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::POI9C9NMZspzUfWx' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/congresillo_asistencia/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::POI9C9NMZspzUfWx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'congresillo_asistencia.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/congresillo_asistencia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'congresillo_asistencia.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'congresillo_asistencia.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/congresillo_asistencia/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'congresillo_asistencia.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'congresillo_asistencia.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/congresillo_asistencia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'congresillo_asistencia.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'congresillo_asistencia.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/congresillo_asistencia/{congresillo_asistencium}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'congresillo_asistencia.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'congresillo_asistencia.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/congresillo_asistencia/{congresillo_asistencium}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'congresillo_asistencia.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'congresillo_asistencia.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/congresillo_asistencia/{congresillo_asistencium}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'congresillo_asistencia.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'congresillo_asistencia.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/congresillo_asistencia/{congresillo_asistencium}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'congresillo_asistencia.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_asistenciaController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FRRjyiUiZu5UFbRM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/congresillo_deporte/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::FRRjyiUiZu5UFbRM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vBwjfNkq9W1J52BI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/congresillo_deporte/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::vBwjfNkq9W1J52BI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nBhmrtplDVixe728' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/congresillo_deporte/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::nBhmrtplDVixe728',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'congresillo_deporte.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/congresillo_deporte',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'congresillo_deporte.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'congresillo_deporte.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/congresillo_deporte/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'congresillo_deporte.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'congresillo_deporte.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/congresillo_deporte',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'congresillo_deporte.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'congresillo_deporte.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/congresillo_deporte/{congresillo_deporte}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'congresillo_deporte.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'congresillo_deporte.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/congresillo_deporte/{congresillo_deporte}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'congresillo_deporte.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'congresillo_deporte.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/congresillo_deporte/{congresillo_deporte}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'congresillo_deporte.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'congresillo_deporte.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/congresillo_deporte/{congresillo_deporte}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'congresillo_deporte.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Congresillo_deporteController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9dvZPqlcTNLTqU7Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/delegacion/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\DelegacionController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\DelegacionController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::9dvZPqlcTNLTqU7Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::baxLZlJsx5fxFEZN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/delegacion/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\DelegacionController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\DelegacionController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::baxLZlJsx5fxFEZN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sxAzTcbBPJ459rvN' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/delegacion/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\DelegacionController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\DelegacionController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::sxAzTcbBPJ459rvN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\DelegacionController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\DelegacionController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\DelegacionController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\DelegacionController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/delegacion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\DelegacionController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\DelegacionController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion/{delegacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\DelegacionController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\DelegacionController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion/{delegacion}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\DelegacionController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\DelegacionController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/delegacion/{delegacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\DelegacionController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\DelegacionController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/delegacion/{delegacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\DelegacionController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\DelegacionController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qE5hUOKyHPlIvILT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/delegacion_evento/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::qE5hUOKyHPlIvILT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TeIwNAaMu62GCZ08' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/delegacion_evento/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::TeIwNAaMu62GCZ08',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ECPhsoi3MctyhLUp' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/delegacion_evento/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::ECPhsoi3MctyhLUp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_evento.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion_evento',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_evento.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_evento.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion_evento/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_evento.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_evento.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/delegacion_evento',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_evento.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_evento.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion_evento/{delegacion_evento}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_evento.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_evento.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion_evento/{delegacion_evento}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_evento.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_evento.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/delegacion_evento/{delegacion_evento}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_evento.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_evento.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/delegacion_evento/{delegacion_evento}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_evento.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_eventoController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BsXP7604u8k5ZpNj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/delegacion_regla/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::BsXP7604u8k5ZpNj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5AnYUvVwkyUksqYP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/delegacion_regla/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::5AnYUvVwkyUksqYP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PzF9gFVaIvO0481H' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/delegacion_regla/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::PzF9gFVaIvO0481H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_regla.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion_regla',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_regla.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_regla.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion_regla/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_regla.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_regla.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/delegacion_regla',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_regla.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_regla.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion_regla/{delegacion_regla}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_regla.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_regla.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion_regla/{delegacion_regla}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_regla.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_regla.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/delegacion_regla/{delegacion_regla}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_regla.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_regla.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/delegacion_regla/{delegacion_regla}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_regla.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_reglaController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G5Bjpkuh6I57UNC7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/delegacion_tipo/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::G5Bjpkuh6I57UNC7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jLF9UgJZZvwJ15RG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/delegacion_tipo/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::jLF9UgJZZvwJ15RG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i1enItwawZ980hEa' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/delegacion_tipo/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::i1enItwawZ980hEa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_tipo.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion_tipo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_tipo.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_tipo.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion_tipo/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_tipo.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_tipo.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/delegacion_tipo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_tipo.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_tipo.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion_tipo/{delegacion_tipo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_tipo.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_tipo.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/delegacion_tipo/{delegacion_tipo}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_tipo.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_tipo.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/delegacion_tipo/{delegacion_tipo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_tipo.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delegacion_tipo.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/delegacion_tipo/{delegacion_tipo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'delegacion_tipo.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Delegacion_tipoController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GkstmSQwvanEDivR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/deporte/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\DeporteController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\DeporteController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::GkstmSQwvanEDivR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ARLoHcWigOhlUOl6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/deporte/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\DeporteController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\DeporteController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::ARLoHcWigOhlUOl6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::29G8H3ELARCKOrGu' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/deporte/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\DeporteController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\DeporteController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::29G8H3ELARCKOrGu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/deporte',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\DeporteController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\DeporteController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/deporte/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\DeporteController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\DeporteController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/deporte',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\DeporteController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\DeporteController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/deporte/{deporte}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\DeporteController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\DeporteController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/deporte/{deporte}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\DeporteController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\DeporteController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/deporte/{deporte}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\DeporteController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\DeporteController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/deporte/{deporte}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\DeporteController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\DeporteController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QlcTQAKPkDep6se3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/deporte_categoria_puntuacion/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::QlcTQAKPkDep6se3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GyjRbtkLR2G9WVBG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/deporte_categoria_puntuacion/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::GyjRbtkLR2G9WVBG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::636CBNfp6eHf05mS' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/deporte_categoria_puntuacion/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::636CBNfp6eHf05mS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte_categoria_puntuacion.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/deporte_categoria_puntuacion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte_categoria_puntuacion.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte_categoria_puntuacion.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/deporte_categoria_puntuacion/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte_categoria_puntuacion.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte_categoria_puntuacion.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/deporte_categoria_puntuacion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte_categoria_puntuacion.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte_categoria_puntuacion.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/deporte_categoria_puntuacion/{deporte_categoria_puntuacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte_categoria_puntuacion.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte_categoria_puntuacion.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/deporte_categoria_puntuacion/{deporte_categoria_puntuacion}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte_categoria_puntuacion.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte_categoria_puntuacion.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/deporte_categoria_puntuacion/{deporte_categoria_puntuacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte_categoria_puntuacion.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte_categoria_puntuacion.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/deporte_categoria_puntuacion/{deporte_categoria_puntuacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte_categoria_puntuacion.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_categoria_puntuacionController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EpcHiCXHa8jmdr5k' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/deporte_regla/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::EpcHiCXHa8jmdr5k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2maI80mfZiU7ErPI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/deporte_regla/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::2maI80mfZiU7ErPI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PujzEW4GhlWDzM9w' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/deporte_regla/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::PujzEW4GhlWDzM9w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte_regla.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/deporte_regla',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte_regla.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte_regla.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/deporte_regla/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte_regla.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte_regla.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/deporte_regla',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte_regla.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte_regla.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/deporte_regla/{deporte_regla}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte_regla.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte_regla.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/deporte_regla/{deporte_regla}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte_regla.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte_regla.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/deporte_regla/{deporte_regla}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte_regla.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deporte_regla.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/deporte_regla/{deporte_regla}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'deporte_regla.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Deporte_reglaController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jUrrVlwzB3dNNihu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/equipo/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\EquipoController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\EquipoController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::jUrrVlwzB3dNNihu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n4qBCnamlE52tYxG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/equipo/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\EquipoController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\EquipoController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::n4qBCnamlE52tYxG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UU1ZEmoRmcaQv0O2' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/equipo/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\EquipoController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\EquipoController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::UU1ZEmoRmcaQv0O2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/equipo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\EquipoController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\EquipoController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/equipo/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\EquipoController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\EquipoController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/equipo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\EquipoController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\EquipoController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/equipo/{equipo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\EquipoController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\EquipoController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/equipo/{equipo}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\EquipoController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\EquipoController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/equipo/{equipo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\EquipoController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\EquipoController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/equipo/{equipo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\EquipoController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\EquipoController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6fgWys5SOtBYiFg1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/equipo_atleta/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::6fgWys5SOtBYiFg1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wLB9jIfBB8pa47gC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/equipo_atleta/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::wLB9jIfBB8pa47gC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2KblmVSwjgVBzEwK' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/equipo_atleta/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::2KblmVSwjgVBzEwK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo_atleta.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/equipo_atleta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo_atleta.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo_atleta.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/equipo_atleta/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo_atleta.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo_atleta.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/equipo_atleta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo_atleta.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo_atleta.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/equipo_atleta/{equipo_atletum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo_atleta.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo_atleta.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/equipo_atleta/{equipo_atletum}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo_atleta.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo_atleta.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/equipo_atleta/{equipo_atletum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo_atleta.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo_atleta.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/equipo_atleta/{equipo_atletum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo_atleta.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_atletaController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eOgGG5fj1XKMNQIR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/equipo_estado/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::eOgGG5fj1XKMNQIR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FJNZtxbU6COb63i8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/equipo_estado/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::FJNZtxbU6COb63i8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LLe8Hkgq8SAPdchh' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/equipo_estado/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::LLe8Hkgq8SAPdchh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo_estado.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/equipo_estado',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo_estado.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo_estado.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/equipo_estado/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo_estado.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo_estado.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/equipo_estado',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo_estado.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo_estado.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/equipo_estado/{equipo_estado}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo_estado.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo_estado.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/equipo_estado/{equipo_estado}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo_estado.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo_estado.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/equipo_estado/{equipo_estado}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo_estado.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'equipo_estado.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/equipo_estado/{equipo_estado}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'equipo_estado.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Equipo_estadoController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JDK8BCNZmrs02yJU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/evento_deportivo/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::JDK8BCNZmrs02yJU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3zV03ZIEIRoXyArX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/evento_deportivo/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::3zV03ZIEIRoXyArX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lUcZOf4SgsKXrutH' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/evento_deportivo/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::lUcZOf4SgsKXrutH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'evento_deportivo.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/evento_deportivo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'evento_deportivo.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'evento_deportivo.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/evento_deportivo/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'evento_deportivo.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'evento_deportivo.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/evento_deportivo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'evento_deportivo.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'evento_deportivo.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/evento_deportivo/{evento_deportivo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'evento_deportivo.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'evento_deportivo.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/evento_deportivo/{evento_deportivo}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'evento_deportivo.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'evento_deportivo.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/evento_deportivo/{evento_deportivo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'evento_deportivo.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'evento_deportivo.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/evento_deportivo/{evento_deportivo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'evento_deportivo.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivoController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zIWbkqTyTu9AbXSU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/evento_deportivo_regla/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::zIWbkqTyTu9AbXSU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GU0dRCmZDgycbA9H' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/evento_deportivo_regla/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::GU0dRCmZDgycbA9H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0xC1uUVUqXQ1CnUl' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/evento_deportivo_regla/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::0xC1uUVUqXQ1CnUl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'evento_deportivo_regla.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/evento_deportivo_regla',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'evento_deportivo_regla.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'evento_deportivo_regla.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/evento_deportivo_regla/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'evento_deportivo_regla.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'evento_deportivo_regla.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/evento_deportivo_regla',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'evento_deportivo_regla.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'evento_deportivo_regla.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/evento_deportivo_regla/{evento_deportivo_regla}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'evento_deportivo_regla.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'evento_deportivo_regla.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/evento_deportivo_regla/{evento_deportivo_regla}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'evento_deportivo_regla.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'evento_deportivo_regla.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/evento_deportivo_regla/{evento_deportivo_regla}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'evento_deportivo_regla.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'evento_deportivo_regla.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/evento_deportivo_regla/{evento_deportivo_regla}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'evento_deportivo_regla.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Evento_deportivo_reglaController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UaAgtksnLj1JEsRl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/juego/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\JuegoController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\JuegoController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::UaAgtksnLj1JEsRl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w40cosm0UYXyiIWQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/juego/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\JuegoController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\JuegoController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::w40cosm0UYXyiIWQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mADbQnIAXVxVls7x' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/juego/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\JuegoController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\JuegoController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::mADbQnIAXVxVls7x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/juego',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\JuegoController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\JuegoController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/juego/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\JuegoController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\JuegoController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/juego',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\JuegoController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\JuegoController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/juego/{juego}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\JuegoController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\JuegoController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/juego/{juego}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\JuegoController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\JuegoController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/juego/{juego}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\JuegoController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\JuegoController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/juego/{juego}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\JuegoController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\JuegoController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4MCjsP1yBW3jAysQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/juego_delegacion/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::4MCjsP1yBW3jAysQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mp2RMyYZjrnzTUhh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/juego_delegacion/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::Mp2RMyYZjrnzTUhh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W2Yte7hadAiCT6sM' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/juego_delegacion/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::W2Yte7hadAiCT6sM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego_delegacion.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/juego_delegacion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego_delegacion.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego_delegacion.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/juego_delegacion/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego_delegacion.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego_delegacion.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/juego_delegacion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego_delegacion.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego_delegacion.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/juego_delegacion/{juego_delegacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego_delegacion.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego_delegacion.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/juego_delegacion/{juego_delegacion}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego_delegacion.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego_delegacion.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/juego_delegacion/{juego_delegacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego_delegacion.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego_delegacion.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/juego_delegacion/{juego_delegacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego_delegacion.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_delegacionController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FJCODV5rJ14gsq2t' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/juego_fase/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::FJCODV5rJ14gsq2t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5U2l5fMJzBIvql06' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/juego_fase/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::5U2l5fMJzBIvql06',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F0VjunrLT0oQoaup' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/juego_fase/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::F0VjunrLT0oQoaup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego_fase.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/juego_fase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego_fase.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego_fase.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/juego_fase/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego_fase.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego_fase.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/juego_fase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego_fase.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego_fase.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/juego_fase/{juego_fase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego_fase.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego_fase.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/juego_fase/{juego_fase}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego_fase.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego_fase.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/juego_fase/{juego_fase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego_fase.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'juego_fase.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/juego_fase/{juego_fase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'juego_fase.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Juego_faseController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ial6hasDMwxdlwH0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/persona/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\PersonaController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\PersonaController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::ial6hasDMwxdlwH0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eNYHdWgLpWtowEvR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/persona/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\PersonaController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\PersonaController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::eNYHdWgLpWtowEvR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wR7hMj5a0F1FfUqd' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/persona/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\PersonaController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\PersonaController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::wR7hMj5a0F1FfUqd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/persona',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\PersonaController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\PersonaController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/persona/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\PersonaController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\PersonaController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/persona',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\PersonaController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\PersonaController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/persona/{persona}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\PersonaController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\PersonaController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/persona/{persona}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\PersonaController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\PersonaController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/persona/{persona}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\PersonaController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\PersonaController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/persona/{persona}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\PersonaController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\PersonaController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PVOw1BqzTC4cTCcp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/persona_arbitro/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::PVOw1BqzTC4cTCcp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hA4lsufk2WjAklQF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/persona_arbitro/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::hA4lsufk2WjAklQF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j2zjfZq9pWiPulZU' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/persona_arbitro/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::j2zjfZq9pWiPulZU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona_arbitro.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/persona_arbitro',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona_arbitro.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona_arbitro.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/persona_arbitro/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona_arbitro.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona_arbitro.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/persona_arbitro',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona_arbitro.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona_arbitro.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/persona_arbitro/{persona_arbitro}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona_arbitro.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona_arbitro.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/persona_arbitro/{persona_arbitro}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona_arbitro.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona_arbitro.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/persona_arbitro/{persona_arbitro}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona_arbitro.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona_arbitro.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/persona_arbitro/{persona_arbitro}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona_arbitro.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_arbitroController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6jC9bLpdDPmKY26J' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/persona_atleta/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::6jC9bLpdDPmKY26J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kzJGHWviMRcih8kB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/persona_atleta/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::kzJGHWviMRcih8kB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EkUUcpaVgYiKYwgf' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/persona_atleta/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::EkUUcpaVgYiKYwgf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona_atleta.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/persona_atleta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona_atleta.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona_atleta.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/persona_atleta/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona_atleta.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona_atleta.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/persona_atleta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona_atleta.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona_atleta.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/persona_atleta/{persona_atletum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona_atleta.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona_atleta.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/persona_atleta/{persona_atletum}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona_atleta.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona_atleta.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/persona_atleta/{persona_atletum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona_atleta.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'persona_atleta.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/persona_atleta/{persona_atletum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'persona_atleta.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Persona_atletaController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8atJ4TcZwBiorhO2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/reclamacion/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::8atJ4TcZwBiorhO2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::86bVOJbrzaid6DEI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/reclamacion/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::86bVOJbrzaid6DEI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1rMH1la7A5DQmMeV' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/reclamacion/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::1rMH1la7A5DQmMeV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reclamacion.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/reclamacion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'reclamacion.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reclamacion.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/reclamacion/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'reclamacion.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reclamacion.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/reclamacion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'reclamacion.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reclamacion.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/reclamacion/{reclamacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'reclamacion.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reclamacion.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/reclamacion/{reclamacion}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'reclamacion.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reclamacion.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/reclamacion/{reclamacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'reclamacion.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reclamacion.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/reclamacion/{reclamacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'reclamacion.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\ReclamacionController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Uns2MVO2NlMlbZZe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/reclamacion_estado/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::Uns2MVO2NlMlbZZe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HtFGC26c7QUp9v9d' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/reclamacion_estado/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::HtFGC26c7QUp9v9d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cJc07v7IajTxU1d4' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/reclamacion_estado/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::cJc07v7IajTxU1d4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reclamacion_estado.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/reclamacion_estado',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'reclamacion_estado.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reclamacion_estado.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/reclamacion_estado/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'reclamacion_estado.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reclamacion_estado.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/reclamacion_estado',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'reclamacion_estado.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reclamacion_estado.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/reclamacion_estado/{reclamacion_estado}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'reclamacion_estado.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reclamacion_estado.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/reclamacion_estado/{reclamacion_estado}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'reclamacion_estado.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reclamacion_estado.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/reclamacion_estado/{reclamacion_estado}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'reclamacion_estado.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reclamacion_estado.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/reclamacion_estado/{reclamacion_estado}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'reclamacion_estado.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Reclamacion_estadoController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FYMtYYe5zq6dUQS6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/sancion/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\SancionController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\SancionController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::FYMtYYe5zq6dUQS6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0ttEaetWVgOXkzle' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/sancion/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\SancionController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\SancionController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::0ttEaetWVgOXkzle',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BiUljZu3qpW6gyqc' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/sancion/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\SancionController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\SancionController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::BiUljZu3qpW6gyqc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sancion.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/sancion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'sancion.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\SancionController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\SancionController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sancion.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/sancion/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'sancion.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\SancionController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\SancionController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sancion.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/sancion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'sancion.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\SancionController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\SancionController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sancion.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/sancion/{sancion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'sancion.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\SancionController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\SancionController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sancion.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/sancion/{sancion}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'sancion.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\SancionController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\SancionController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sancion.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/sancion/{sancion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'sancion.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\SancionController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\SancionController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sancion.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/sancion/{sancion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'sancion.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\SancionController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\SancionController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e0irsmWtwvULlkUm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/compromiso_participacion/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@validate_model',
        'controller' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@validate_model',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::e0irsmWtwvULlkUm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hOt0ljDe57kWMf8D' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/compromiso_participacion/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@update_multiple',
        'controller' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@update_multiple',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::hOt0ljDe57kWMf8D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dAfBfDK9QrwCrV2K' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/compromiso_participacion/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@deletebyid',
        'controller' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@deletebyid',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
        'as' => 'generated::dAfBfDK9QrwCrV2K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'compromiso_participacion.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/compromiso_participacion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'compromiso_participacion.index',
        'uses' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'compromiso_participacion.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/compromiso_participacion/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'compromiso_participacion.create',
        'uses' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@create',
        'controller' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@create',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'compromiso_participacion.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/general/compromiso_participacion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'compromiso_participacion.store',
        'uses' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@store',
        'controller' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@store',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'compromiso_participacion.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/compromiso_participacion/{compromiso_participacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'compromiso_participacion.show',
        'uses' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@show',
        'controller' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@show',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'compromiso_participacion.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/compromiso_participacion/{compromiso_participacion}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'compromiso_participacion.edit',
        'uses' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@edit',
        'controller' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@edit',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'compromiso_participacion.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/general/compromiso_participacion/{compromiso_participacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'compromiso_participacion.update',
        'uses' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@update',
        'controller' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@update',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'compromiso_participacion.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/general/compromiso_participacion/{compromiso_participacion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'compromiso_participacion.destroy',
        'uses' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@destroy',
        'controller' => 'Modules\\general\\Http\\Controllers\\Compromiso_participacionController@destroy',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => 'api/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hH5P9gcYFacXRybN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\general\\Http\\Controllers\\generalController@index',
        'controller' => 'Modules\\general\\Http\\Controllers\\generalController@index',
        'namespace' => 'Modules\\general\\Http\\Controllers',
        'prefix' => '/general',
        'where' => 
        array (
        ),
        'as' => 'generated::hH5P9gcYFacXRybN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ggGWuTdyUG3ZdCBU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:298:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:80:"function (){
                   return ["message"=>"security"];
               }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000031479a410000000002c575e4";}";s:4:"hash";s:44:"hW29nPMxNjWUkEZqwT5yipDLA71JSPUJU6p5SUwtuGc=";}}',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::ggGWuTdyUG3ZdCBU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nyw8uZmIDeb0bR0k' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/log/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\LogController@validate_model',
        'controller' => 'Modules\\security\\Http\\Controllers\\LogController@validate_model',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::Nyw8uZmIDeb0bR0k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5OyV69bkXFDSQkuw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/log/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\LogController@update_multiple',
        'controller' => 'Modules\\security\\Http\\Controllers\\LogController@update_multiple',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::5OyV69bkXFDSQkuw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xC5cvrGrAWm9kRkK' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/security/log/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\LogController@deletebyid',
        'controller' => 'Modules\\security\\Http\\Controllers\\LogController@deletebyid',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::xC5cvrGrAWm9kRkK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'log.index',
        'uses' => 'Modules\\security\\Http\\Controllers\\LogController@index',
        'controller' => 'Modules\\security\\Http\\Controllers\\LogController@index',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/log/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'log.create',
        'uses' => 'Modules\\security\\Http\\Controllers\\LogController@create',
        'controller' => 'Modules\\security\\Http\\Controllers\\LogController@create',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'log.store',
        'uses' => 'Modules\\security\\Http\\Controllers\\LogController@store',
        'controller' => 'Modules\\security\\Http\\Controllers\\LogController@store',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/log/{log}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'log.show',
        'uses' => 'Modules\\security\\Http\\Controllers\\LogController@show',
        'controller' => 'Modules\\security\\Http\\Controllers\\LogController@show',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/log/{log}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'log.edit',
        'uses' => 'Modules\\security\\Http\\Controllers\\LogController@edit',
        'controller' => 'Modules\\security\\Http\\Controllers\\LogController@edit',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/security/log/{log}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'log.update',
        'uses' => 'Modules\\security\\Http\\Controllers\\LogController@update',
        'controller' => 'Modules\\security\\Http\\Controllers\\LogController@update',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/security/log/{log}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'log.destroy',
        'uses' => 'Modules\\security\\Http\\Controllers\\LogController@destroy',
        'controller' => 'Modules\\security\\Http\\Controllers\\LogController@destroy',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::35nG1WRPedYHzaHz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/permisos/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\PermisosController@validate_model',
        'controller' => 'Modules\\security\\Http\\Controllers\\PermisosController@validate_model',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::35nG1WRPedYHzaHz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4WocSG4Jz4rcDRva' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/permisos/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\PermisosController@update_multiple',
        'controller' => 'Modules\\security\\Http\\Controllers\\PermisosController@update_multiple',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::4WocSG4Jz4rcDRva',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JVrDnV33MzrlW541' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/security/permisos/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\PermisosController@deletebyid',
        'controller' => 'Modules\\security\\Http\\Controllers\\PermisosController@deletebyid',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::JVrDnV33MzrlW541',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permisos.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/permisos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'permisos.index',
        'uses' => 'Modules\\security\\Http\\Controllers\\PermisosController@index',
        'controller' => 'Modules\\security\\Http\\Controllers\\PermisosController@index',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permisos.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/permisos/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'permisos.create',
        'uses' => 'Modules\\security\\Http\\Controllers\\PermisosController@create',
        'controller' => 'Modules\\security\\Http\\Controllers\\PermisosController@create',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permisos.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/permisos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'permisos.store',
        'uses' => 'Modules\\security\\Http\\Controllers\\PermisosController@store',
        'controller' => 'Modules\\security\\Http\\Controllers\\PermisosController@store',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permisos.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/permisos/{permiso}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'permisos.show',
        'uses' => 'Modules\\security\\Http\\Controllers\\PermisosController@show',
        'controller' => 'Modules\\security\\Http\\Controllers\\PermisosController@show',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permisos.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/permisos/{permiso}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'permisos.edit',
        'uses' => 'Modules\\security\\Http\\Controllers\\PermisosController@edit',
        'controller' => 'Modules\\security\\Http\\Controllers\\PermisosController@edit',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permisos.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/security/permisos/{permiso}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'permisos.update',
        'uses' => 'Modules\\security\\Http\\Controllers\\PermisosController@update',
        'controller' => 'Modules\\security\\Http\\Controllers\\PermisosController@update',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permisos.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/security/permisos/{permiso}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'permisos.destroy',
        'uses' => 'Modules\\security\\Http\\Controllers\\PermisosController@destroy',
        'controller' => 'Modules\\security\\Http\\Controllers\\PermisosController@destroy',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TzHEtE4mIeMOJKAu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/rol/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\RolController@validate_model',
        'controller' => 'Modules\\security\\Http\\Controllers\\RolController@validate_model',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::TzHEtE4mIeMOJKAu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OZNVN33dHQxCJfjf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/rol/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\RolController@update_multiple',
        'controller' => 'Modules\\security\\Http\\Controllers\\RolController@update_multiple',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::OZNVN33dHQxCJfjf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jNQR19BIe5lqDBTR' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/security/rol/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\RolController@deletebyid',
        'controller' => 'Modules\\security\\Http\\Controllers\\RolController@deletebyid',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::jNQR19BIe5lqDBTR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rol.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/rol',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'rol.index',
        'uses' => 'Modules\\security\\Http\\Controllers\\RolController@index',
        'controller' => 'Modules\\security\\Http\\Controllers\\RolController@index',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rol.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/rol/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'rol.create',
        'uses' => 'Modules\\security\\Http\\Controllers\\RolController@create',
        'controller' => 'Modules\\security\\Http\\Controllers\\RolController@create',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rol.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/rol',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'rol.store',
        'uses' => 'Modules\\security\\Http\\Controllers\\RolController@store',
        'controller' => 'Modules\\security\\Http\\Controllers\\RolController@store',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rol.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/rol/{rol}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'rol.show',
        'uses' => 'Modules\\security\\Http\\Controllers\\RolController@show',
        'controller' => 'Modules\\security\\Http\\Controllers\\RolController@show',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rol.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/rol/{rol}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'rol.edit',
        'uses' => 'Modules\\security\\Http\\Controllers\\RolController@edit',
        'controller' => 'Modules\\security\\Http\\Controllers\\RolController@edit',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rol.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/security/rol/{rol}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'rol.update',
        'uses' => 'Modules\\security\\Http\\Controllers\\RolController@update',
        'controller' => 'Modules\\security\\Http\\Controllers\\RolController@update',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rol.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/security/rol/{rol}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'rol.destroy',
        'uses' => 'Modules\\security\\Http\\Controllers\\RolController@destroy',
        'controller' => 'Modules\\security\\Http\\Controllers\\RolController@destroy',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TnklQ3eXPRFKaFHm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/rol_permiso/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@validate_model',
        'controller' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@validate_model',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::TnklQ3eXPRFKaFHm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9DFXcrppHFNqpm1U' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/rol_permiso/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@update_multiple',
        'controller' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@update_multiple',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::9DFXcrppHFNqpm1U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BXp2uigeXYLRSgL0' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/security/rol_permiso/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@deletebyid',
        'controller' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@deletebyid',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::BXp2uigeXYLRSgL0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rol_permiso.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/rol_permiso',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'rol_permiso.index',
        'uses' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@index',
        'controller' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@index',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rol_permiso.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/rol_permiso/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'rol_permiso.create',
        'uses' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@create',
        'controller' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@create',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rol_permiso.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/rol_permiso',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'rol_permiso.store',
        'uses' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@store',
        'controller' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@store',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rol_permiso.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/rol_permiso/{rol_permiso}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'rol_permiso.show',
        'uses' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@show',
        'controller' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@show',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rol_permiso.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/rol_permiso/{rol_permiso}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'rol_permiso.edit',
        'uses' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@edit',
        'controller' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@edit',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rol_permiso.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/security/rol_permiso/{rol_permiso}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'rol_permiso.update',
        'uses' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@update',
        'controller' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@update',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rol_permiso.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/security/rol_permiso/{rol_permiso}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'rol_permiso.destroy',
        'uses' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@destroy',
        'controller' => 'Modules\\security\\Http\\Controllers\\Rol_permisoController@destroy',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5fcxwo4eJzE1dIRs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/usuario_rol/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@validate_model',
        'controller' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@validate_model',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::5fcxwo4eJzE1dIRs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rX6u66v1E2Ih09JL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/usuario_rol/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@update_multiple',
        'controller' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@update_multiple',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::rX6u66v1E2Ih09JL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OmHVoePtEXXDeB3i' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/security/usuario_rol/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@deletebyid',
        'controller' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@deletebyid',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::OmHVoePtEXXDeB3i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usuario_rol.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/usuario_rol',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'usuario_rol.index',
        'uses' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@index',
        'controller' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@index',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usuario_rol.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/usuario_rol/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'usuario_rol.create',
        'uses' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@create',
        'controller' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@create',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usuario_rol.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/usuario_rol',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'usuario_rol.store',
        'uses' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@store',
        'controller' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@store',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usuario_rol.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/usuario_rol/{usuario_rol}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'usuario_rol.show',
        'uses' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@show',
        'controller' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@show',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usuario_rol.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/usuario_rol/{usuario_rol}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'usuario_rol.edit',
        'uses' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@edit',
        'controller' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@edit',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usuario_rol.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/security/usuario_rol/{usuario_rol}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'usuario_rol.update',
        'uses' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@update',
        'controller' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@update',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usuario_rol.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/security/usuario_rol/{usuario_rol}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'usuario_rol.destroy',
        'uses' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@destroy',
        'controller' => 'Modules\\security\\Http\\Controllers\\Usuario_rolController@destroy',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iiNGvdEg0lXrMKxi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/usuarios/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\UsuariosController@validate_model',
        'controller' => 'Modules\\security\\Http\\Controllers\\UsuariosController@validate_model',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::iiNGvdEg0lXrMKxi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AtkcEx2wfD7YqCIb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/usuarios/update_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\UsuariosController@update_multiple',
        'controller' => 'Modules\\security\\Http\\Controllers\\UsuariosController@update_multiple',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::AtkcEx2wfD7YqCIb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EXYg0MbsLH7ZaERM' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/security/usuarios/delete_by_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\UsuariosController@deletebyid',
        'controller' => 'Modules\\security\\Http\\Controllers\\UsuariosController@deletebyid',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
        'as' => 'generated::EXYg0MbsLH7ZaERM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usuarios.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/usuarios',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'usuarios.index',
        'uses' => 'Modules\\security\\Http\\Controllers\\UsuariosController@index',
        'controller' => 'Modules\\security\\Http\\Controllers\\UsuariosController@index',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usuarios.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/usuarios/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'usuarios.create',
        'uses' => 'Modules\\security\\Http\\Controllers\\UsuariosController@create',
        'controller' => 'Modules\\security\\Http\\Controllers\\UsuariosController@create',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usuarios.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/security/usuarios',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'usuarios.store',
        'uses' => 'Modules\\security\\Http\\Controllers\\UsuariosController@store',
        'controller' => 'Modules\\security\\Http\\Controllers\\UsuariosController@store',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usuarios.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/usuarios/{usuario}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'usuarios.show',
        'uses' => 'Modules\\security\\Http\\Controllers\\UsuariosController@show',
        'controller' => 'Modules\\security\\Http\\Controllers\\UsuariosController@show',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usuarios.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/security/usuarios/{usuario}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'usuarios.edit',
        'uses' => 'Modules\\security\\Http\\Controllers\\UsuariosController@edit',
        'controller' => 'Modules\\security\\Http\\Controllers\\UsuariosController@edit',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usuarios.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/security/usuarios/{usuario}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'usuarios.update',
        'uses' => 'Modules\\security\\Http\\Controllers\\UsuariosController@update',
        'controller' => 'Modules\\security\\Http\\Controllers\\UsuariosController@update',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usuarios.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/security/usuarios/{usuario}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'usuarios.destroy',
        'uses' => 'Modules\\security\\Http\\Controllers\\UsuariosController@destroy',
        'controller' => 'Modules\\security\\Http\\Controllers\\UsuariosController@destroy',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => 'api/security',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ThZj4YFG2QXgz0KA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\security\\Http\\Controllers\\SecurityController@index',
        'controller' => 'Modules\\security\\Http\\Controllers\\SecurityController@index',
        'namespace' => 'Modules\\security\\Http\\Controllers',
        'prefix' => '/security',
        'where' => 
        array (
        ),
        'as' => 'generated::ThZj4YFG2QXgz0KA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'image_pattern' => '^(.*?)?\\/?([^\\/\\.]+?)(\\-filters\\((.*?)\\))?\\.(jpeg|jpg|gif|png)$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);

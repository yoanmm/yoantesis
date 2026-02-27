<template>
  <aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
      <ul class="metismenu" id="sidebarNav">
        <!-- Recorremos cada sección del menú -->
        <li v-for="(section, index) in menu" :key="`section-${index}`">
          <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
            <!-- Ícono por defecto, puedes personalizarlo por sección con section.icon -->
            <i class="nav-icon" :class="section.icon || 'ti ti-menu'"></i>
            <span class="nav-title">{{ section.caption }}</span>
          </a>
          <ul aria-expanded="false">
            <!-- Recorremos las rutas internas de cada sección -->
            <li v-for="(item, idx) in section.routes" :key="`route-${index}-${idx}`">
              <router-link :to="{ name: item.name }">{{ item.caption }}</router-link>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- end sidebar-nav -->
  </aside>
</template>

<script>
import menu from "./menu.json";

export default {
  name: "sidebar",
  data() {
    return {
      menu: menu,
    };
  },
  mounted() {
    this.access_menu_load();
  },
  methods: {
    access_menu_load() {
      const user = this.$store.site.user;
      if (!user || !user.roles) return;

      // 1. Si es SUPER_ADMIN, no filtramos nada (ve todo el json)
      if (user.roles.includes("Administrador")) {
        return;
      }

      // 2. Definimos qué rutas puede ver cada rol específico
      const rolePermissions = {
        "C_Organizadora": [
          "/general/evento_deportivo_list",
          "/general/competencia_list",
          "/general/persona_arbitro_list",
          "/general/juego_list",
          "/general/congresillo_deporte_list",
          "/general/compromiso_participacion_list",
          "/general/deporte_categoria_puntuacion_list",
          "/general/congresillo_asistencia_list"
        ],
        "Jefe de Deporte": [
          "/general/equipo_atleta_list",
          "/general/persona_atleta_list"
        ]
      };

      // 3. Obtenemos la lista consolidada de rutas permitidas para el usuario actual
      // (en caso de que un usuario tenga múltiples roles)
      let allowedPaths = [];
      user.roles.forEach(role => {
        if (rolePermissions[role]) {
          allowedPaths = [...allowedPaths, ...rolePermissions[role]];
        }
      });

      // 4. Filtramos el menú
      this.menu = this.menu
          .map(section => {
            // Clonamos la sección para no modificar el objeto original por referencia
            const newSection = { ...section };

            // Filtramos las rutas de esta sección que están en la lista permitida
            newSection.routes = section.routes.filter(route =>
                allowedPaths.includes(route.path)
            );

            // Solo devolvemos la sección si tiene al menos una ruta permitida
            return newSection.routes.length > 0 ? newSection : null;
          })
          .filter(Boolean); // Eliminamos los nulos (secciones que quedaron vacías)
    }
  }
};
</script>

<style scoped>
</style>

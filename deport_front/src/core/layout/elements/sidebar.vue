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
      if (!this.$store.site.user || !this.$store.site.user.roles || !this.$store.site.user.roles.includes("ROLE_SUPER_ADMIN")) {
        const user_menu = this.$store.site.user?.access_menu;
        if (!user_menu) return;

        this.menu.forEach((section, i) => {
          if (user_menu.some((m) => m.menu_module === section.caption)) {
            let filteredRoutes = section.routes.filter((route) =>
              user_menu.some((m) => m.route === route.path)
            );
            section.routes = filteredRoutes;
          } else {
            delete this.menu[i];
          }
        });

        this.menu = this.menu.filter(Boolean);
      }
    },
  },
};
</script>

<style scoped>
</style>

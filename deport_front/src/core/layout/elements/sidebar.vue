<template>
  <aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
      <ul class="metismenu " id="sidebarNav">
        <li>
          <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i class="nav-icon dashicons dashicons-admin-multisite"></i>
            <span class="nav-title">Esicuba</span>
          </a>
          <ul aria-expanded="false">
            <li><a href='index.html'>Gastos Médicos</a></li>
            <li><a href='index-ecommerce.html'>Listado gastos médicos Esicuba</a></li>
            <li><a href='index-car-dealer.html'>Mis Depósitos</a></li>
            <li><a href='index-stock-market.html'>Solicitar Póliza Schengen</a></li>
            <li><a href='index-dating.html'>Turoperador</a></li>
            <li><a href='index-job-portal.html'>Viajes in Esicuba</a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i class="nav-icon ti ti-money"></i>
            <span class="nav-title">Facturas</span>
          </a>
          <ul aria-expanded="false">
            <li><a href='index.html'>Facturación viajes In ESEN</a></li>
            <li><a href='index-ecommerce.html'>Facturación viajes In ESICUBA</a></li>
            <li><a href='index-car-dealer.html'>Liquidación ESEN Viajes Out</a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i class="nav-icon fa fa-plane"></i>
            <span class="nav-title">Esen</span>
          </a>
          <ul aria-expanded="false">
            <li><a href='index.html'>Viajes In ESEN</a></li>
            <li><a href='index.html'>Viajes In ESEN Retroactivo</a></li>
            <li><a href='index.html'>Viajes Out ESEN</a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i class="nav-icon zmdi zmdi-shield-security"></i>
            <span class="nav-title">Seguridad</span>
          </a>
          <ul aria-expanded="false">
            <li><router-link :to="{name:'roles_list'}" >Roles</router-link></li>
            <li><router-link :to="{name:'users_list'}" >Usuarios</router-link></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- end sidebar-nav -->
  </aside>
</template>

<script>
export default {
  name: "sidebar"
}
</script>

<style scoped>

</style>
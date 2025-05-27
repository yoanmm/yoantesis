<template>
  <div class="row">
    <div class="col-md-3">

    </div>
    <div class=" col-xxl-6 col-xl-6 col-sm-6">
      <div class="card card-statistics contact-contant">
        <div class="card-body py-4">
          <div class="d-flex align-items-center">
            <div class="bg-img">
              <img src="static/assets/img/avtar/user.png" alt="" class="img-fluid">
            </div>
            <div class="ml-3">
              <h4 class="mb-0">Nombre y Apellidos: {{ $store.site.user.name }}</h4>
              <p class="float-right">
                <span class="badge badge-warning-inverse px-2 py-1 mt-1">Entidad: {{ $store.site.user.touroperador.company_name.toUpperCase() }}</span>
              </p>
            </div>
          </div>
          <div>
            <ul class="nav">
              <li class="nav-item">
                <div class="img-icon"><i class="fa fa-calendar"></i></div>
              </li>
              <li class="nav-item">
                <span>Fecha de Creación:<h4>{{ moment($store.site.user.created_at).format('YYYY-MM-DD') }}</h4></span>
              </li>
            </ul>
            <ul class="nav">
              <li class="nav-item">
                <div class="img-icon"><i class="fa fa-calendar"></i></div>
              </li>
              <li class="nav-item">
                <span>Ultima actualización:<h4>{{
                    moment($store.site.user.updated_at).format('YYYY-MM-DD')
                  }}</h4></span>
              </li>
            </ul>
            <ul class="nav">
              <li class="nav-item">
                <div class="img-icon"><i class="fa fa-user"></i></div>
              </li>
              <li class="nav-item">
                <span>Usuario:<h4>{{ $store.site.user.username }}</h4></span>
              </li>
            </ul>
            <ul class="nav">
              <li class="nav-item">
                <div class="img-icon"><i class="fa fa-envelope"></i></div>
              </li>
              <li class="nav-item">
                <span>Correo:<h4>{{ $store.site.user.email }}</h4></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import moment from "moment";

export default {
  name: "index",
  methods: {
    moment
  },
  mounted() {
    // console.log(this.$store.site.user)
  }
}
</script>

<style scoped>

</style>


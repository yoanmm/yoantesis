<template>
  <div class="app">
    <!-- begin app-wrap -->
    <div class="app-wrap">
      <!-- begin pre-loader -->
      <!--      <loader/>-->
      <!-- end pre-loader -->
      <!-- begin app-header -->
      <topbar />
      <!-- end app-header -->
      <!-- begin app-container -->
      <div class="app-container">
        <!-- begin app-nabar -->
        <sidebar />
        <!-- end app-navbar -->
        <!-- begin app-main -->
        <div class="app-main" id="main">
          <!-- begin container-fluid -->
          <div class="container-fluid">
            <a-spin :spinning="$store.site.loading" :tip="$store.site.tip">
              <router-view />
            </a-spin>
          </div>
          <!-- end container-fluid -->
        </div>
        <!-- end app-main -->
      </div>
      <!-- end app-container -->
      <!-- begin footer -->
      <footerbar />
      <!-- end footer -->
    </div>
    <!-- end app-wrap -->
  </div>
</template>
<script>
import Vue from "vue";
import Loader from "../elements/loader";
import Topbar from "../elements/topbar";
import Footerbar from "../elements/footerbar";
import Sidebar from "../elements/sidebar";

export default {
  name: "home",
  props: {
    logout: Function,
  },
  data() {
    return {};
  },
  components: { Footerbar, Topbar, Loader, Sidebar },
  beforeCreate() {},
  created() {},
  beforeDestroy() {
    const recaptchaScripts = document.querySelectorAll("script");
    for (let i = 0; i < recaptchaScripts.length; i += 1) {
      recaptchaScripts[i].parentElement.removeChild(recaptchaScripts[i]);
    }
  },
  async beforeMount() {
    Promise.all([
      Vue.loadScript("/static/assets/js/vendors.js").then(() => {
        Vue.loadScript("/static/assets/js/app.js");
      }),
    ]);
  },
};
</script>
<style scoped>
.ant-spin-nested-loading {
  height: 400px !important;
}
.app-main {
  padding-left: 0px !important;
}
.footer {
  width: 100% !important;
}
</style>

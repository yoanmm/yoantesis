import Vue from 'vue'
import App from '@/App'
import router from '@/config/router'
import LoadScript from 'vue-plugin-load-script'
import Vuelidate from 'vuelidate'
import {state} from '@/config/store/'
import '@/core/shared'


/*customs css*/
import '@/assets/scss/main.scss'
/* Antd */
import 'ant-design-vue/dist/antd.css'
import Antd from 'ant-design-vue'

/* Jquery */
window.$ = window.jQuery = require('jquery')

/* using components */
Vue.use(LoadScript)
Vue.use(Antd)
Vue.use(Vuelidate)

Vue.prototype.$store = state

Vue.filter('formatCurrency', function (value, decimals = 2, thousandsSeparator = ',') {
  let result = parseFloat(value).toFixed(decimals).toString();
  if (thousandsSeparator) {
    result = result.replace(/\B(?=(\d{3})+(?!\d))/g, thousandsSeparator);
  }
  return result;
});

Vue.filter('formatDate', function (value) {
  return value ? value.format('DD/MM/YYYY') : '';
});

new Vue({
  el: '#app',
  router,
  // store,
  render: h => h(App)
})


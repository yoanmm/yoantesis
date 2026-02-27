<template>
   <a-config-provider :locale="es_ES">
    <div>
      <Home v-if="auth"/>
      <LoginLayout v-if="!auth"/>
    </div>
  </a-config-provider>
</template>
<script>
import es_ES from 'ant-design-vue/lib/locale-provider/es_ES'
import LoginLayout from '@/core/layout/templates/LoginLayout'
import Home from '@/core/layout/templates/Home'

  export default {
    name: 'app',
    provide: function () {
      return {
        logout: this.logout,
        login: this.login
      }
    },
    data () {
      return {
        es_ES,
        auth:this.$store.site.user!=null
      }
    },
    computed: {

    },

  methods: {
    async logout() {
      this.$store.site.loading = true
      this.$store.site.tip = "Cerrando Sesion...."
      const response = await this.$store.site.logout().catch((error => {
        return {success: true}
      }))
      this.auth = !response.success
      this.$store.site.loading = false
      this.$router.push({name: 'index'}).catch(() => {
      })
    },
    login() {
      this.auth = !!this.$store.site.user
      if (this.auth) {
        location.reload()
      }
    }
  },
  components: {LoginLayout, Home},
  mounted() {
  }
}
</script>

<style scoped>
</style>


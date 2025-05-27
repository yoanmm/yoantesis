<template>
</template>

<script>
  import {required} from 'vuelidate/lib/validators'
  export default {
    name: 'Login',
    inject: {
      login: {
        default: () => {
        }
      }
    },
    validations: {
      user: {
        username: {
          required
        },
        password: {
          required
        }
      }
    },
    data () {
      return {
        user: {
          username: '',
          password: '',
        },
        error: false,
        loading: false,
        message_error: 'Error en usuario y contraseña'
      }
    },
    methods: {
      async login_action () {
        this.error = false
        this.loading = true
        if (this.$refs.form.validate()) {
          await this.$store.site.login(this.user).then(() => {
            this.login()
          }).catch((error) => {
            !error.response || error.response.status != 422 ? this.message_error = 'Unknow error, please contact with administrator' : ''
            this.error = true
          })
        }
        this.loading = false
      }
    }
  }
</script>

<style scoped>
</style>


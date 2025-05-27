<template>
    <div class="login p-50" v-on:keyup.enter="reset_action()">
        <h3 style="color: #011058">Escriba su nueva contraseña</h3>
        <div v-if="error" class="alert alert-icon"
             style="color:#ee5b5b;background-color:white;font-weight: bold;text-align: center" role="alert">
            <i class="fa fa-info-circle"></i><span style="margin: 1rem">{{ message_error }}</span>
        </div>
        <tc-form
                nested="user"
                :vobject="$v"
                ref="form"
                class="mt-3 mt-sm-5"

        >

            <div class="row">
                <div class="col-12">
                    <tc-form-item>
                        <label class="control-label">Contraseña<span class="required_field">*</span></label>
                        <tc-input type="password" v-model.trim="user.password" name="password" placeholder="password"/>
                    </tc-form-item>
                </div>
                <div class="col-12">
                    <tc-form-item>
                        <label class="control-label">Contraseña confirmacion<span class="required_field">*</span></label>
                        <tc-input type="password" name="password" v-model="user.password_updated" placeholder="password"/>
                    </tc-form-item>
                </div>
            </div>
        </tc-form>
        <div class="col-12 mt-3">
            <a-button type="button" class="btn btn-login text-uppercase" :loading="loading"
                      @click="reset_action">Entrar
            </a-button>
        </div>
    </div>
</template>

<script>
import { required, sameAs } from 'vuelidate/lib/validators'
import * as mb from "@/helpers/loaders/model.load"
import Vue from "vue"
import reset from '@/core/pages/reset/reset'
import login from '@/core/pages/login/login'
import ResetPassword from "../../layout/templates/ResetPassword.vue";
import * as utils from "../../../helpers/helpers/utils";

export default {
  name: "reset",
  inject: {
    login: {
      default: () => {}
    }
  },
  validations: {
    user: {
      password: { required },
      password_updated: { required, sameAs: sameAs('password') } // Asegura que ambas contraseñas sean iguales
    }
  },
  data() {
    return {
      user: {
        password: '',
        password_updated: '',
        hash: ''
      },
      mb,
      error: false,
      loading: false,
      message_error: 'Error en contraseña'
    }
  },
  methods: {
    async reset_action() {
      this.error = false
      this.loading = true
      this.user.hash = window.location.pathname.split("/")[2]

      // 🔹 Marcar todos los campos como tocados
      this.$v.user.$touch()

      // 🔹 Si hay errores, no continuar
      if (this.$v.user.$invalid) {
        console.log()
        utils.openNotificationWithIcon("error", "Error", this.getValidationErrors());
        this.loading = false
        return
      }

      try {
        await this.$store.site.reset(this.user)
        this.login()
      } catch (error) {
        if (!error.response || error.response.status !== 422) {
          this.message_error = 'Unknow error, please contact with administrator'
        }
        this.error = true
      }

      this.loading = false
    },
    getValidationErrors() {
      let messages = [];

      if (!this.$v.user.password.required) {
        messages.push("La contraseña es obligatoria.");
      }

      if (!this.$v.user.password_updated.required) {
        messages.push("La confirmación de la contraseña es obligatoria.");
      }

      if (!this.$v.user.password_updated.sameAs) {
        messages.push("Las contraseñas no coinciden.");
      }

      return messages.join(" "); // Unir todos los mensajes en un solo string
    }
  }
}
</script>


<style scoped>

</style>
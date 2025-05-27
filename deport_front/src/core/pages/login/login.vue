<template>
  <div class="login p-50" @keyup.enter="submitForm">
    <div v-if="error" class="alert alert-icon"
         style="color:#ee5b5b;background-color:white;font-weight: bold;text-align: center" role="alert">
      <i class="fa fa-info-circle"></i><span style="margin: 1rem">{{ message_error }}</span>
    </div>

    <!-- Formulario de Login -->
    <tc-form
        v-if="!forgotPasswordMode"
        nested="user"
        :vobject="$v"
        ref="form"
        class="mt-3 mt-sm-5"
    >
      <div class="row">
        <div class="col-12">
          <tc-form-item>
            <label class="control-label">Nombre de Usuario<span class="required_field">*</span></label>
            <tc-input type="text" v-model.trim="user.username" name="username" placeholder="Username"
                      class="login-input"/>
          </tc-form-item>
        </div>
        <div class="col-12">
          <tc-form-item>
            <label class="control-label">Contraseña<span class="required_field">*</span></label>
            <tc-input type="password" name="password" v-model="user.password" placeholder="Password"/>
          </tc-form-item>
        </div>
        <div class="col-12">
          <div class="d-block d-sm-flex align-items-center">
            <a @click="toggleForgotPassword" class="ml-auto" style="cursor: pointer; color:#011058;">
              ¿Olvidó su contraseña?
            </a>
          </div>
        </div>


      </div>
    </tc-form>

    <!-- Formulario de Recuperación de Contraseña -->
    <tc-form v-else>
      <div class="row">
        <div class="col-12">
          <tc-form-item>
            <label class="control-label">Correo Electrónico<span class="required_field">*</span></label>
            <tc-input type="email" v-model="recoveryEmail" name="email" placeholder="Correo Electrónico"/>
          </tc-form-item>
        </div>
        <div class="col-12">
          <div class="d-block d-sm-flex align-items-center">
            <a @click="toggleForgotPassword" class="ml-auto" style="cursor: pointer; color:#011058;">
              Volver al inicio de sesión
            </a>
          </div>
        </div>
      </div>
    </tc-form>

    <div class="col-12 mt-3">
      <a-button
          v-if="!forgotPasswordMode"
          type="button"
          class="btn btn-login text-uppercase"
          :loading="loading"
          @click="login_action"
      >
        Entrar
      </a-button>
      <a-button
          v-else
          type="button"
          class="btn btn-login text-uppercase"
          :loading="loading"
          @click="sendRecoveryEmail"
      >
        Enviar
      </a-button>
    </div>
  </div>
</template>

<script>
import {required} from 'vuelidate/lib/validators';
import axios from "axios";
import SpinnerLoading from "../../shared/loading/SpinnerLoading.vue";
import * as utils from "../../../helpers/helpers/utils";

export default {
  name: "login",
  components: {SpinnerLoading},
  inject: {
    login: {
      default: () => {
      }
    }
  },
  validations: {
    user: {
      username: {required},
      password: {required},
    },
  },
  data() {
    return {
      user: {
        username: '',
        password: '',
      },
      recoveryEmail: '',
      forgotPasswordMode: false,
      error: false,
      loading: false,
      message_error: 'Error en usuario y contraseña',
    };
  },
  mounted() {

  },
  methods: {
    submitForm() {
      if (this.forgotPasswordMode) {
        this.sendRecoveryEmail();
      } else {
        this.login_action();
      }
    },
    toggleForgotPassword() {
      this.forgotPasswordMode = !this.forgotPasswordMode;
    },
    async login_action() {
      this.error = false;
      this.loading = true;

        if (this.$refs.form.validate()) {
          await this.$store.site.login(this.user).then(() => {
            this.login();
          }).catch((error) => {
            this.message_error = error.response?.status === 422
                ? 'Error en usuario y contraseña'
                : 'Error desconocido, contacte al administrador';
            this.error = true;
          });
        }

      this.loading = false;
      await this.captcha_refresh();
    },
    async sendRecoveryEmail() {
      this.loading = true;
      try {
        await this.$store.site.passwordRecovery({ email: this.recoveryEmail });
        utils.openNotificationWithIcon("success", "Correo Enviado", "Por favor revise su correo electrónico.");
        this.toggleForgotPassword();
      } catch (error) {
        const errorMessage = error.response?.data?.message || "No se pudo enviar el correo.";
        utils.openNotificationWithIcon("error", "Error", errorMessage);
      } finally {
        this.loading = false;
      }
    }

  }
};
</script>


<style scoped>

</style>
<template>
  <div class="login-page-wrapper" @keyup.enter="submitForm">
    <div class="login-container">
      <!-- Panel izquierdo decorativo -->
      <div class="login-info-panel">
        <img src="/static/assets/img/atlexus_logo.png" alt="Atlexus Logo" class="img-fluid" />
      </div>

      <!-- Panel derecho funcional -->
      <div class="login-form-panel">
        <div class="text-center">
          <p class="form-subtitle font-semibold">Bienvenido</p>
          <p class="text-base text-gray-600 mt-1">
            Por favor, inicie sesión para continuar
          </p>
        </div>

        <!-- Alerta de error -->
        <div v-if="error" class="login-error"><i class="fa fa-info-circle"></i> {{ message_error }}</div>

        <!-- Formulario de Login -->
        <tc-form v-if="!forgotPasswordMode" nested="user" :vobject="$v" ref="form">
          <tc-form-item>
            <tc-input
              type="text"
              v-model.trim="user.username"
              name="username"
              placeholder="Correo"
              class="input-login w-full py-2"
            />
          </tc-form-item>
          <tc-form-item>
            <tc-input
              type="password"
              v-model="user.password"
              name="password"
              placeholder="Contraseña"
              class="input-login w-full py-2"
            />
          </tc-form-item>

          <!-- <div class="form-footer">
            <a @click="toggleForgotPassword" class="forgot-link">Forgot?</a>
          </div> -->
        </tc-form>

        <!-- Formulario de recuperación -->
        <!-- <tc-form v-else>
          <tc-form-item>
            <tc-input
              type="email"
              v-model="recoveryEmail"
              name="email"
              placeholder="Correo Electrónico"
              class="login-input"
            />
          </tc-form-item>
          <div class="form-footer">
            <a @click="toggleForgotPassword" class="forgot-link">Volver al inicio de sesión</a>
          </div>
        </tc-form> -->

        <!-- Botón -->
        <a-button type="button" :loading="loading" @click="submitForm" class="custom-login-button">
          {{ forgotPasswordMode ? "Enviar" : "Entrar" }}
        </a-button>

        <!-- <p class="signup-text">Don’t have account? <a href="#">Sign up</a></p> -->
      </div>
    </div>
  </div>
</template>

<script>
import { required } from "vuelidate/lib/validators";
import SpinnerLoading from "../../shared/loading/SpinnerLoading.vue";
import * as utils from "../../../helpers/helpers/utils";

export default {
  name: "login",
  components: { SpinnerLoading },
  inject: {
    login: {
      default: () => {},
    },
  },

  validations: {
    user: {
      username: { required },
      password: { required },
    },
  },
  data() {
    return {
      user: {
        username: "",
        password: "",
      },
      recoveryEmail: "",
      forgotPasswordMode: false,
      error: false,
      loading: false,
      message_error: "Error en usuario y contraseña",
    };
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
        await this.$store.site
          .login(this.user)
          .then(() => {
            this.login();
          })
          .catch((error) => {
            this.message_error =
              error.response?.status === 422
                ? "Error en usuario y contraseña"
                : "Error desconocido, contacte al administrador";
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
    },
    // Stub para evitar error si la función de captcha no está definida
    async captcha_refresh() {
      return Promise.resolve();
    },
  },
};
</script>

<style scoped>
.login-page-wrapper {
  height: 100vh;
  background: linear-gradient(to right, #d3e0f3, #e5ecfb);
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "Segoe UI", sans-serif;
}

.login-container {
  display: flex;
  width: 850px;
  max-width: 100%;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 10px 25px rgba(1, 7, 125, 0.74);
  overflow: hidden;
}

.login-info-panel {
  flex: 1;
  background: linear-gradient(to bottom right, #578ca2, #7cc3f0);
  color: white;
  padding: 3rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.login-form-panel {
  flex: 1;
  padding: 3rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.form-subtitle {
  font-size: 1.3rem;
  color: #00095D;
}

.login-error {
  background: #ffe6e6;
  color: #c0392b;
  font-weight: bold;
  padding: 0.5rem;
  border-radius: 4px;
  margin-bottom: 1rem;
}

.custom-login-button {
  background-color: #7cc3f0;
  color: #fafcfc;
  border: none;
  border-radius: 0.8rem;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.custom-login-button:hover {
  background-color: #5fb3e4;
  color: #fafcfc;
  cursor: pointer;
}

.custom-login-button:focus,
.custom-login-button:active {
  outline: none;
  box-shadow: 0 0 0 3px rgba(124, 195, 240, 0.4);
  background-color: #5fb3e4;
  color: #fafcfc;
}
</style>

<template>
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="/static/assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <div class="app-contant">
                <div style="background-color: #8e54e9;">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                                <div class="d-flex align-items-center h-100-vh">
                                    <router-view/>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
                                <div class="row align-items-center h-100">
                                    <div class="col-7 mx-auto ">
                                        <img class="img-fluid" src="/static/assets/img/bg/login.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end app-wrap -->
    </div>
</template>


<script>
    import {required} from 'vuelidate/lib/validators'
    import Vue from "vue"
    import reset from '@/core/pages/reset/reset'
    import login from '@/core/pages/login/login'

    export default {
        name: 'ResetPassword',
        inject: {
            reset: {
                default: () => {
            }
        }
    },
    validations: {
        user: {
            password: {
                required
            },
            password_updated: {
                required,

            }
        }
    },
    components: {reset,login},
    data() {
        return {
            user: {
                password: '',
                password_updated:'',
                hash:''
            },
            error: false,
            loading: false,
            message_error: 'Error en contraseña'
        }
    },
    beforeDestroy() {
        const recaptchaScripts = document.querySelectorAll('script')
        for (let i = 0; i < recaptchaScripts.length; i += 1) {
            recaptchaScripts[i].parentElement.removeChild(recaptchaScripts[i])
        }
    },
    async beforeMount() {
        Promise.all([
            Vue.loadScript('/static/assets/js/vendors.js').then(() => {
                Vue.loadScript('/static/assets/js/app.js')
    }),
    ])
    },
    methods: {
        async reset_action() {
            this.error = false
            this.loading = true
            this.user.hash= window.location.pathname.split("/")[2]
            if (this.$refs.form.validate()) {
                await this.$store.site.reset(this.user).then(() => {
                    this.login()
            }).catch((error) => {
                !error.response || error.response.status != 422 ? this.message_error = 'Unknow error, please contact with administrator' : '';
                this.error = true
            })
            }
            this.loading = false
        }
    }
}
</script>

<template>
    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content">
                            <h1 class="breadcrumb__content--title mb-10">Login Page</h1>
                            <ul class="breadcrumb__content--menu d-flex">
                                <li class="breadcrumb__content--menu__items"><a href="index.html">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text__secondary">Login Page</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start login section  -->
        <div class="login__section section--padding">
            <div class="container">
                <div action="#">
                    <div class="login__section--inner">
                        <div class="row row-cols-md-2 row-cols-1">
                            <div class="col">
                                <div class="account__login">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title h3 mb-10">Login</h2>
                                        <p class="account__login--header__desc">Login if you area a returning customer.</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <label>
                                            <input class="account__login--input" v-model="email" placeholder="Email Addres"
                                                type="email">
                                        </label>
                                        <label>
                                            <input class="account__login--input" v-model="password" placeholder="Password"
                                                type="password">
                                        </label>
                                        <div
                                            class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                            <div class="account__login--remember position__relative">
                                                <input class="checkout__checkbox--input" id="check1" type="checkbox">
                                                <span class="checkout__checkbox--checkmark"></span>
                                                <label class="checkout__checkbox--label login__remember--label"
                                                    for="check1">
                                                    Remember me</label>
                                            </div>

                                        </div>
                                        <button class="account__login--btn primary__btn" @click="login()">Login</button>
                                        <div class="account__login--divide d-none">
                                            <span class="account__login--divide__text">OR</span>
                                        </div>
                                        <div class="account__social d-flex justify-content-center mb-15 d-none">
                                            <a class="account__social--link facebook" target="_blank"
                                                href="https://www.facebook.com/">Facebook</a>
                                            <a class="account__social--link google" target="_blank"
                                                href="https://www.google.com/">Google</a>
                                            <a class="account__social--link twitter" target="_blank"
                                                href="https://twitter.com/">Twitter</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="account__login register">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title h3 mb-10">Create an Account</h2>
                                        <p class="account__login--header__desc">Register here if you are a new customer</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <label>
                                            <input class="account__login--input" v-model="name" placeholder="Fullname"
                                                type="text">
                                        </label>
                                        <label>
                                            <input class="account__login--input" v-model="email" placeholder="Email Addres"
                                                type="email">
                                        </label>
                                        <label>
                                            <input class="account__login--input" v-model="password" placeholder="Password"
                                                type="password">
                                        </label>
                                        <label>
                                            <input class="account__login--input" placeholder="Confirm Password"
                                                type="password">
                                        </label>

                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label" for="check2">
                                                I have read and agree to the terms & conditions</label>
                                        </div>

                                        <label>
                                            <button class="account__login--btn primary__btn mb-10"
                                                @click="register()">{{ loadingr ?'Please holding on boss...': 'Register'}}</button>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End login section  -->

        <!-- Start newsletter section -->

        <!-- End newsletter section -->

    </main>
</template>
<script>
export default {

    data() {
        return {
            name: '',
            email: '',
            password: '',
            loading: false,
            loadingr: false,

            error: false,

            error_msg: ''
        }
    },

    props: ['vueurl', 'storedb'],

    methods: {
        login() {

            // alert(this.vueurl)

            this.loading = true


            axios({
                url: this.vueurl + '/api/v1/login',
                method: 'post',
                data: {


                    email: this.email,
                    password: this.password,
                    storeDb: this.storedb

                }
            }).then((response) => {
                this.loading = false
                localStorage.setItem('user_role', response.data.user_data.role);
                localStorage.setItem('user_token', response.data.access_token);
                localStorage.setItem('user_data', JSON.stringify(response.data.user_data));
                console.log(response)


                return window.location.href = '/'

            }).catch((error) => {

                this.error = true

                this.error_msg = error.response.data.message

                console.log(error.response)

            })

        },

        async register() {

        //    await alert(this.storedb)

            this.loadingr = true


        axios({
                url: this.vueurl + '/api/v1/register',
                method: 'post',
                data: {

                    name: this.name,
                    email: this.email,
                    password: this.password,
                    storeDb: this.storedb

                }
            }).then((response) => {
                this.loadingr = false

                localStorage.setItem('user_role', response.data.user_data.role);
                localStorage.setItem('user_token', response.data.access_token);
                localStorage.setItem('user_data', JSON.stringify(response.data.user_data));
                console.log(response)
                return window.location.href = '/'



            }).catch((error) => {


                this.loadingr = false
                this.error = true

                this.errors = error.response.data.errors

                console.log(this.errors)
            })



        }
    },

}
</script>


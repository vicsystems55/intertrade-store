<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <div class="main checkout__mian">
                    <form action="#">

                        <div class="checkout__content--step section__shipping--address">
                            <div class="section__header mb-25">
                                <h2 class="section__header--title h3">Billing Details</h2>
                            </div>
                            <div class="section__shipping--address__content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                        <div class="checkout__input--list ">
                                            <label class="checkout__input--label mb-5" for="input1">Fullname <span
                                                    class="checkout__input--label__star">*</span></label>
                                            <input class="checkout__input--field border-radius-5"
                                                placeholder="First name (optional)" id="input1" v-model="firstname" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                        <div class="checkout__input--list ">
                                            <label class="checkout__input--label mb-5" for="input1">Phone: <span
                                                    class="checkout__input--label__star">*</span></label>
                                            <input class="checkout__input--field border-radius-5"
                                                placeholder="Phone" id="input1" v-model="phone" type="text">
                                        </div>
                                    </div>

                                    <div class="col-12 mb-20">
                                        <div class="checkout__input--list">
                                            <label class="checkout__input--label mb-5" for="input4">Address <span
                                                    class="checkout__input--label__star">*</span></label>
                                            <input class="checkout__input--field border-radius-5" v-model="address" placeholder="Address"
                                                id="input4" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-20">
                                        <div class="checkout__input--list">
                                            <label class="checkout__input--label mb-5" for="input5">Town/City <span
                                                    class="checkout__input--label__star">*</span></label>
                                            <input class="checkout__input--field border-radius-5" v-model="town"  placeholder="Town/City"
                                                id="input5" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="checkout__input--list">
                                            <label class="checkout__input--label mb-5" for="country">Country/region <span
                                                    class="checkout__input--label__star">*</span></label>
                                            <div class="checkout__input--select select">
                                                <select class="checkout__input--select__field border-radius-5" v-model="country" id="country">
                                                    <option :value="'Nigeria'" selected>Nigeria</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="checkout__input--list">
                                            <label class="checkout__input--label mb-5" for="input6">Postal Code <span
                                                    class="checkout__input--label__star">*</span></label>
                                            <input class="checkout__input--field border-radius-5" v-model="postalCode" placeholder="Postal code"
                                                id="input6" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="checkout__input--list">
                                            <label class="checkout__input--label mb-5" for="input6">Email <span
                                                    class="checkout__input--label__star">*</span></label>
                                            <input class="checkout__input--field border-radius-5" placeholder="Email" v-model="email"
                                                id="input6" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="order-notes mb-20">
                            <label class="checkout__input--label mb-5" for="order">Order Notes <span
                                    class="checkout__input--label__star">*</span></label>
                            <textarea class="checkout__notes--textarea__field border-radius-5" id="order"
                                placeholder="Notes about your order, e.g. special notes for delivery." v-model="orderNotes"
                                spellcheck="false"></textarea>
                        </div>
                        <div class="checkout__content--step__footer d-flex align-items-center">

                            <a class="previous__link--content" href="/cart">Return to cart</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <aside class="checkout__sidebar sidebar border-radius-10">
                    <h2 class="checkout__order--summary__title text-center mb-15">Your Order Summary</h2>
                    <div class="cart__table checkout__product--table">
                        <table class="cart__table--inner">
                            <tbody class="cart__table--body">
                                <tr v-for="invoiceItem in invoiceData.invoice_items" :key="invoiceItem.id" class="cart__table--body__items">
                                    <td class="cart__table--body__list">
                                        <div class="product__image two  d-flex align-items-center">
                                            <div class="product__thumbnail border-radius-5">
                                                <a class="display-block" href="product-details.html">
                                                    <img
                                                        class="display-block border-radius-5"
                                                        :src="invoiceItem.products.img_url" alt="cart-product" style="width: 90px; height: 90px; object-fit: cover;"></a>
                                                <span class="product__thumbnail--quantity">{{ invoiceItem.qty }}</span>
                                            </div>
                                            <div class="product__description">
                                                <h4 class="product__description--name"><a
                                                        href="product-details.html">{{invoiceItem.products.name}}</a></h4>
                                                <!-- <span class="product__description--variant">COLOR: Blue</span> -->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__table--body__list">
                                        <span class="cart__price">NGN {{ format(invoiceItem.total_amount) }}</span>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <div class="checkout__discount--code">
                        <form class="d-flex" action="#">
                            <label>
                                <input class="checkout__discount--code__input--field border-radius-5"
                                    placeholder="Gift card or discount code" type="text">
                            </label>
                            <button class="checkout__discount--code__btn primary__btn border-radius-5"
                                type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="checkout__total">
                        <table class="checkout__total--table">
                            <tbody class="checkout__total--body d-none">
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Subtotal </td>
                                    <td class="checkout__total--amount text-right">$860.00</td>
                                </tr>
                                <tr class="checkout__total--items">
                                    <td class="checkout__total--title text-left">Logistics</td>
                                    <td class="checkout__total--calculated__text text-right">NGN 0.00</td>
                                </tr>
                            </tbody>
                            <tfoot class="checkout__total--footer">
                                <tr class="checkout__total--footer__items">
                                    <td class="checkout__total--footer__title checkout__total--footer__list text-left">Total
                                    </td>
                                    <td class="checkout__total--footer__amount checkout__total--footer__list text-right">
                                        NGN {{ format(invoiceData.total_amount) }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment__history mb-30">
                        <h3 class="payment__history--title mb-20">Payment</h3>

                    </div>

                    <button @click="init()" class="checkout__discount--code__btn primary__btn border-radius-5"
                                >{{ processing?'Processing...':'Proceed to pay NGN '+format(amount) }}
</button>

                    <paystack

                    :id="'payBtn'"

                    :type="'hidden'"

                    :class="'d-none'"
                    :paystackkey="paystackkey"
                    :split_code="'SPL_UMfLowpW9Z'"
                    :email="email"
                    :amount="amount * 100"
                    :reference="reference"
                    :callback="onSuccessfulPayment"
                    :onCanel="onCancelledPayment"

                    :close="close"
                    :embed="false">

                    {{ processing?'Processing...':'Proceed to pay NGN '+amount }}

                    </paystack>
                </aside>
            </div>

        </div>
    </div>
</template>
<script >
import paystack from 'vue-paystack'
export default {

    data() {
        return {
            invoiceData: '',
            cartCount: 0,
            qty: 1,
            value: 1,
            address: null,
            split_code: 'SPL_atUI9mhKYa',
            metadata: {},

            userData: [],

            phone: null,

            town: null,

            country: null,
            postalCode: '',
            email: '',
            orderNotes: '',

            processing: false,

            paystackkey: 'pk_test_81d0ea622e4cb15731a72ac7025af87867e6495a',
            amount: 1000, //Expressed in lowest demonitation, so 1000kobo is equivalent to 10Naira
            email: '',
            firstname: '', //optional field remember to pass as a prop of firstname if needed
            lastname: '' //optional field remember to pass as a prop of lastname if needed

        }
    },

    components: {
        paystack,
    },

    props: ['vueurl', 'storedb'],

    computed: {
        reference() {


            let text = "";
            let possible =
                "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

            for (let i = 0; i < 10; i++)
                text += possible.charAt(Math.floor(Math.random() * possible.length));

            return text;
        },
    },

    mounted() {
        this.getInvoiceDetails()
        this.getUserData()

    },




    methods: {

        init(){

            this.processing = true

            if (this.address == null || this.town == null || this.country == null || this.phone == null || this.orderNotes == null) {
                alert('Please the missing fields.')

                this.processing = false;


            }else{
                document.getElementById('payBtn').click();
            }

        },


        onCancelledPayment: function (response) {

            console.log(response)
        },
        callback: function () {

            // console.log()
        },

        close: function () {

        },

        initiatePay() {

            axios({
                url: this.vueurl + '/api/v1/initiate-pay',
                method: 'post',
                headers: {
                    'Access-Control-Allow-Origin': '*',
                    'Content-type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                },


            }).then((res) => {
                console.log(res)
            })



        },

        format(value) {
            var numeral = require('numeral');

            return numeral(value).format('0,0.00')
        },

         onSuccessfulPayment: async function (response) {
            console.log(response);

           await axios({
                url: this.vueurl + '/api/v1/product-order',
                method: 'post',
                data: {
                    reference: response.reference,

                    invoiceCode: localStorage.getItem('invoice_code'),
                    trxref: response.reference,
                    address: this.address,
                    phone: this.phone,
                    town: this.town,
                    country: this.country,
                    postalCode: this.postalCode,
                    email: this.email,
                    orderNotes: this.orderNotes,
                    storeDb: this.storedb
                },
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('user_token'),
                }
            })
                .then((response) => {

                    this.processing = false

                    console.log(response)

                return window.location.href='/payment-successful'

                })
                .catch((response) => {

                    this.processing = false


                    console.log(response)

                })

            localStorage.removeItem('invoice_code')



        },


        getUserData() {

           this.userData = JSON.parse(localStorage.getItem('user_data'));

           this.firstname= this.userData.name
           this.email= this.userData.email


       },

        getInvoiceDetails() {

            console.log(localStorage.getItem('invoice_code'))

            if (localStorage.getItem('invoice_code')) {

                axios({
                    url: this.vueurl + '/api/v1/invoices/' + localStorage.getItem('invoice_code'),
                    method: 'get',
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Content-type': 'application/json',
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                    },
                    data: {
                        invoice_code: localStorage.getItem('invoice_code'),
                        storeDb: this.storedb
                    }

                }).then((response) => {



                    this.invoiceData = response.data

                    this.amount = this.invoiceData.total_amount


                    console.log(response)

                    return this.invoiceData;


                }).catch((error) => {


                    console.log(error)
                })

            } else {

            }

        },

        getJustInvoice() {

            axios({
                url: this.vueurl + '/api/v1/invoices/' + localStorage.getItem('invoice_code'),
                method: 'get',
                headers: {
                    'Access-Control-Allow-Origin': '*',
                    'Content-type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                },
                data: {
                    invoice_code: localStorage.getItem('invoice_code'),
                    storeDb: this.storedb
                }

            }).then((response) => {

                this.invoiceData = response.data

                this.amount = this.invoiceData.total_amount * 100

                console.log(response)


            }).catch((error) => {

                this.loading = false
                console.log(error)
            })
        },





    },




}
</script>

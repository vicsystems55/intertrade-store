<template>

<section class="my__account--section section--padding">
            <div class="container">
                <p class="account__welcome--text">Hello {{userData.name}}, welcome to your dashboard!</p>
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__left--sidebar">
                        <h2 class="account__content--title h3 mb-20"></h2>
                        <ul class="account__menu">
                            <li class="account__menu--list active"><a href="#">Dashboard</a></li>
                            <li class="account__menu--list "><a href="#">My Profile</a></li>

                            <li v-show="userData.role =='store_owner'" class="account__menu--list"><a href="#">Products</a></li>

                            <li v-show="userData.role !='store_owner'" class="account__menu--list"><a href="#">My Orders</a></li>


                            <li class="account__menu--list" @click="logout()"  >Log Out</li>
                        </ul>
                    </div>
                    <div class="account__wrapper">
                        <div class="account__content">
                            <div class="account__table--area table-responsive">




                                <div class="py-3">
                                    <div class="row">
                                        <div v-show="userData.role =='store_owner'" class="col-md-4 p-2">

                                            <div class="my__account--section__inner border-radius-10 d-flex mb-10 ">

                                                    <h3 >Total Customers</h3>




                                            </div>

                                        </div>

                                        <div class="col-md-4 p-2">

                                            <div class="my__account--section__inner border-radius-10 d-flex mb-10 ">

                                                    <h6>Total Orders</h6>



                                            </div>

                                        </div>

                                        <div class="col-md-4 p-2">

                                            <div class="my__account--section__inner border-radius-10 d-flex mb-10 ">

                                                    <h6>Total Sales</h6>



                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <h2 v-show="userData.role !='store_owner'" class="account__content--title h3 mb-20">Orders History</h2>

                                <h2 v-show="userData.role =='store_owner'" class="account__content--title h3 mb-20">Products</h2>


                                <table v-show="userData.role =='store_owner'" class="account__table">
                                    <thead class="account__table--header">
                                        <tr class="account__table--header__child">
                                            <th class="account__table--header__child--items">#</th>
                                            <th class="account__table--header__child--items"></th>
                                            <th class="account__table--header__child--items">Product Name</th>
                                            <th class="account__table--header__child--items">Price</th>
                                            <th class="account__table--header__child--items"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="account__table--body mobile__none">
                                        <tr v-for="product in products" :key="product.id"  class="account__table--body__child">
                                            <td class="account__table--body__child--items">#</td>
                                            <td class="account__table--body__child--items">
                                                <div class="col-2" style="width: 80px;">
                                <img :src="product.img_url" style="height: 45px; width: 45px; object-fit: cover;" alt="">
                            </div>
                                            </td>
                                            <td class="account__table--body__child--items">   {{ product.name }}</td>
                                            <td class="account__table--body__child--items">           N {{ format(product.price) }}</td>
                                            <td class="account__table--body__child--items">
                                                <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" :id="'switch'+product.id">
                                            <label class="custom-control-label" :for="'switch'+product.id">live</label>
                                        </div>
                                    </td>
                                        </tr>

                                    </tbody>
                                    <tbody class="account__table--body mobile__block">
                                        <tr v-for="product in products" :key="product.id" class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>#</strong>
                                                <span>#</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong></strong>
                                                <span>
                                                    <div class="col-2" style="width: 80px;">
                                <img :src="product.img_url" style="height: 45px; width: 45px; object-fit: cover;" alt="">
                            </div>
                                                </span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Product Name</strong>
                                                <span>{{product.name}}</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Product Price</strong>
                                                <span>  N {{ format(product.price) }}</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong></strong>
                                                <span>
                                                    <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" :id="'switch'+product.id">
                                            <label class="custom-control-label" :for="'switch'+product.id">live</label>
                                        </div>
                                                </span>
                                            </td>
                                        </tr>



                                    </tbody>
                                </table>

                                <table  class="account__table">
                                    <thead class="account__table--header">
                                        <tr class="account__table--header__child">
                                            <th class="account__table--header__child--items">Order</th>
                                            <th class="account__table--header__child--items">Date</th>
                                            <th class="account__table--header__child--items">Address</th>

                                            <th class="account__table--header__child--items">Payment Status</th>
                                            <th class="account__table--header__child--items">Fulfillment Status</th>
                                            <th class="account__table--header__child--items">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="account__table--body mobile__none">
                                        <tr v-for="productOrder in productOrders" :key="productOrder.id"  class="account__table--body__child">
                                            <td class="account__table--body__child--items">      {{ productOrder.invoice.invoice_code }}</td>
                                            <td class="account__table--body__child--items">      {{ productOrder.created_at }}</td>
                                            <td class="account__table--body__child--items">      {{ productOrder.shipping_address }}</td>

                                            <td class="account__table--body__child--items">Paid</td>
                                            <td class="account__table--body__child--items">      {{ productOrder.status }}</td>
                                            <td class="account__table--body__child--items">N {{format(productOrder.invoice.total_amount)}}</td>
                                        </tr>

                                    </tbody>
                                    <tbody class="account__table--body mobile__block">
                                        <tr v-for="productOrder in productOrders" :key="productOrder.id"  class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>{{ productOrder.invoice.invoice_code }}</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>{{ productOrder.created_at }}</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Address</strong>
                                                <span>{{ productOrder.shipping_address }}</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>{{ productOrder.status }}</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>N {{format(productOrder.invoice.total_amount)}}</span>
                                            </td>
                                        </tr>



                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


</template>

<script>
export default {
    data() {
        return {
            products: [],
            productOrders: [],
            cartCount: 0,
            invoiceData: '',
            userData: []
        }
    },

    props: ['vueurl'],

    mounted() {
        this.getProducts()
        this.getUserData()
        this.getProductOrders()
    },

    methods: {

        getUserData() {
            this.userData = JSON.parse(localStorage.getItem('user_data'));


        },
        getProducts() {

            this.loading = true


            axios({
                url: this.vueurl + '/api/v1/products',
                method: 'get',

            }).then((response) => {
                this.products = response.data

                console.log(response)

                this.getInvoiceDetails()

            }).catch((error) => {

                this.loading = false
                console.log(error)
            })

        },

        getProductOrders(){
            axios({
                url: this.vueurl +'/api/v1/product-order',
                method: 'get',
                headers:{
                    'Authorization': 'Bearer ' +localStorage.getItem('user_token')
                },
                params:{
                    user_id: this.userData.id
                }

            })
            .then((response)=>{
                console.log(response)

                this.productOrders = response.data.product_orders || response.data
                this.customersCount = response.data.total_customers
                this.invoicesCount = response.data.invoices
                this.totalSalesAmount = response.data.total_sales_amount
                this.timeStamp = response.data.timestamp



            })
            .catch((response)=>{
                console.log(response)
            })
        },

        getInvoiceDetails() {


            if (localStorage.getItem('invoice_code')) {
                console.log('ye invoice')
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
                        invoice_code: localStorage.getItem('invoice_code')
                    }

                }).then((response) => {

                    this.invoiceData = response.data
                    this.cartCount = this.invoiceData.invoice_items.length


                    console.log(response)




                }).catch((error) => {

                    this.loading = false
                    console.log(error)

                })

            } else {

                localStorage.setItem('invoice_code', Date.now())

                axios({
                    url: this.vueurl + '/api/v1/invoices',
                    method: 'post',
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Content-type': 'application/json',
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                    },
                    data: {
                        invoice_code: localStorage.getItem('invoice_code')
                    }

                }).then((response) => {


                    console.log(response)



                }).catch((error) => {

                    this.loading = false
                    console.log(error)
                })





            }

        },

        addProduct(product_id) {


            axios({
                url: this.vueurl + '/api/v1/invoice-lines',
                method: 'post',
                headers: {
                    'Access-Control-Allow-Origin': '*',
                    'Content-type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                },
                data: {
                    invoice_code: localStorage.getItem('invoice_code'),
                    product_id: product_id
                }

            }).then((response) => {
                this.$notify("Product Added to cart!!");


                this.getInvoiceDetails()

                console.log(response)

            }).catch((error) => {

                this.loading = false
                console.log(error)

                this.regenerateInvoice()

            })



        },

        regenerateInvoice() {

            localStorage.removeItem('invoice_code')

            localStorage.setItem('invoice_code', Date.now())

            axios({
                url: this.vueurl + '/api/v1/invoices',
                method: 'post',
                headers: {
                    'Access-Control-Allow-Origin': '*',
                    'Content-type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                },
                data: {
                    invoice_code: localStorage.getItem('invoice_code')
                }

            }).then((response) => {


                console.log(response)



            }).catch((error) => {

                this.loading = false
                console.log(error)
            })

        },

        viewCart() {
            this.$router.push('/invoice');
        },

        logout() {
            // localStorage.removeItem('invoice_code')
            localStorage.removeItem('user_token')
            localStorage.removeItem('user_data')
            localStorage.removeItem('user_role')

            return window.location.href = '/auth'




        },
        format(value) {
            var numeral = require('numeral');

            return numeral(value).format('0,0.00')
        },

    },


}
</script>

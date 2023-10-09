<template>
    <div>
        <h2 class="cart__title mb-40">Shopping Cart</h2>
        <div class="row">
            <div class="col-lg-8">
                <div class="cart__table">
                    <table class="cart__table--inner">
                        <thead class="cart__table--header">
                            <tr class="cart__table--header__items">
                                <th class="cart__table--header__list">Product</th>
                                <th class="cart__table--header__list">Price</th>
                                <th class="cart__table--header__list">Quantity</th>
                                <th class="cart__table--header__list">Total</th>
                            </tr>
                        </thead>
                        <tbody class="cart__table--body">


                            <tr v-for="invoiceLine in invoiceData.invoice_items" :key="invoiceLine.id"
                                class="cart__table--body__items">
                                <td class="cart__table--body__list">
                                    <div class="cart__product d-flex align-items-center">
                                        <button class="cart__remove--btn" aria-label="search button"
                                            @click="removeItem(invoiceLine.id, invoiceData.id)"><svg fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px"
                                                height="16px">
                                                <path
                                                    d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />
                                            </svg></button>
                                        <div class="cart__thumbnail">
                                            <a href="product-details.html"><img
                                                    style="object-fit:cover; width: 90px; height: 90px;"
                                                    class="border-radius-5" :src="invoiceLine.products.img_url"
                                                    alt="cart-product"></a>
                                        </div>
                                        <div class="cart__content">
                                            <h3 class="cart__content--title h4"><a href="product-details.html">{{
                                                invoiceLine.products.name }}</a></h3>
                                            <!-- <span class="cart__content--variant">COLOR: Blue</span>
                                            <span class="cart__content--variant">WEIGHT: 2 Kg</span> -->
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__table--body__list">
                                    <span class="cart__price">NGN {{ format(invoiceLine.products.price) }}</span>
                                </td>
                                <td class="cart__table--body__list">
                                    <div class="quantity__box">
                                        <button
                                            @click="updateInvoiceLine(invoiceLine.id, 'newQty' + invoiceLine.id, 'decrement')"
                                            type="button" class="quantity__value quickview__value--quantity decrease"
                                            aria-label="quantity value" value="Decrease Value">-</button>
                                        <label>
                                            <input type="number" class="quantity__number quickview__value--number"
                                                :value="invoiceLine.qty" :id="'newQty' + invoiceLine.id" data-counter />
                                        </label>
                                        <button
                                            @click="updateInvoiceLine(invoiceLine.id, 'newQty' + invoiceLine.id, 'increment')"
                                            type="button" class="quantity__value quickview__value--quantity increase"
                                            aria-label="quantity value" value="Increase Value">+</button>
                                    </div>
                                </td>
                                <td class="cart__table--body__list">
                                    <span class="cart__price end">NGN {{ format(invoiceLine.total_amount) }}</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="continue__shopping d-flex justify-content-between">

                        <button class="continue__shopping--clear" type="submit">Clear Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__summary border-radius-10">


                    <div class="cart__summary--total mb-20">
                        <table class="cart__summary--total__table">
                            <tbody>

                                <tr class="cart__summary--total__list">
                                    <td class="cart__summary--total__title text-left">GRAND TOTAL</td>
                                    <td class="cart__summary--amount text-right">NGN {{ format(invoiceData.total_amount) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart__summary--footer">
                        <p class="cart__summary--footer__desc">Shipping & taxes calculated at checkout</p>
                        <ul class="d-flex justify-content-between">

                            <li><a class="cart__summary--footer__btn primary__btn checkout" href="/checkout">Check
                                    Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'ShoppingCart',
    data() {
        return {
            message: 'Hello from child component!',
            cartCount: 0,
            invoiceData: []

        };
    },
    props: ['vueurl', 'storedb'],
    mounted() {
        console.log('cart icon component')
        this.getInvoiceDetails()
    },
    methods: {
        format(value) {
            var numeral = require('numeral');

            return numeral(value).format('0,0.00')
        },
        getInvoiceDetails() {

            if (localStorage.getItem('invoice_code')) {
                console.log('ye invoice')
                axios({
                    url: this.vueurl+'/api/v1/invoices/' + localStorage.getItem('invoice_code'),
                    method: 'get',
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Content-type': 'application/json',
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                    },
                    data: {
                        storeDb: this.storedb,
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
                    url: this.vueurl+'/api/v1/invoices',
                    method: 'post',
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Content-type': 'application/json',
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                    },
                    data: {
                        storeDb: this.storedb,
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
        addProduct(productId) {


            axios({
                url: this.vueurl+'/api/v1/invoice-lines',
                method: 'post',
                headers: {
                    'Access-Control-Allow-Origin': '*',
                    'Content-type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                },
                data: {
                    invoice_code: localStorage.getItem('invoice_code'),
                    product_id: productTd
                }

            }).then((response) => {



                this.getInvoiceDetails()

                console.log(response)

            }).catch((error) => {

                this.loading = false
                console.log(error)

                this.regenerateInvoice()

            })



        },


        removeItem(invoiceItemId, invoiceId) {

            axios({
                url: this.vueurl+'/api/v1/invoice-lines/' + invoiceItemId,
                method: 'delete',
                headers: {
                    'Access-Control-Allow-Origin': '*',
                    'Content-type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                },
                data: {
                    invoiceId: invoiceId,
                    storeDb: this.storedb
                },
            })
                .then((response) => {
                    console.log(response)


                    this.getJustInvoice()

                    console.log(this.$parent.$children)

                    return this.$parent.$children[0].getInvoiceDetails()

                })
                .catch((response) => {
                    console.log(response)
                })

        },

        updateInvoiceLine(id, qty, type) {



            var newQty = parseInt(document.getElementById(qty).value)

            if (type == 'decrement') {

                newQty -= 1;

            }
            if (type == 'increment') {

                newQty += 1;

            }

            axios({
                url: this.vueurl+'/api/v1/invoice-lines/' + id,
                method: 'put',
                headers: {
                    'Access-Control-Allow-Origin': '*',
                    'Content-type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                },
                data: {
                    qty: newQty,
                    invoiceId: this.invoiceData.id,
                    storeDb: this.storedb
                }

            })
                .then((response) => {
                    console.log(response.data)

                    this.invoiceData = response.data.invoiceData
                    this.amount = this.invoiceData.total_amount * 100


                })
                .catch((err) => {
                    console.log(err)

                })
        },

        getJustInvoice() {

            axios({
                url: this.vueurl+'/api/v1/invoices/' + localStorage.getItem('invoice_code'),
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



<template>
    <div>

        <span class="items__count">{{ cartCount }}</span>
    </div>
</template>

<script>
export default {
    name: 'CartIconComponent',
    data() {
        return {
            message: 'Hello from child component!',
            cartCount: 0,
            renderComponent: true,

        };
    },
    props: ['vueurl', 'storedb'],
    mounted() {
        console.log('cart icon component')
        this.getInvoiceDetails()
    },
    methods: {
        getInvoiceDetails() {

            if (localStorage.getItem('invoice_code')) {
                console.log('ye invoice')

                // alert(localStorage.getItem('user_token'))


                axios({
                    url: this.vueurl+'/api/v1/invoices/'+localStorage.getItem('invoice_code'),
                    method: 'get',
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Content-type': 'application/json',
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                    },
                    params: {
                        invoice_code: localStorage.getItem('invoice_code'),
                        storeDb: this.storedb
                    }

                }).then((response) => {

                    this.invoiceData = response.data



                    this.cartCount = this.invoiceData.invoice_items.length

                    console.log(this.cartCount)




                    return this.cartCount;



                }).catch((error) => {

                // alert(error)

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
                        invoice_code: localStorage.getItem('invoice_code'),
                        storeDb: this.storedb

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
            // alert(localStorage.getItem('user_token'))


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
                    product_id: productId,
                    storeDb: this.storedb
                }

            }).then((response) => {
                // this.$notify("Product Added to cart!!");

                // alert('added')


                this.getInvoiceDetails()

                console.log(response)

            }).catch((error) => {

                this.loading = false
                console.log(error)

                // window.location.href='/auth';



                this.regenerateInvoice()

            })



        },

        forceRerender() {
        // Remove my-component from the DOM
        this.renderComponent = false;

        this.$nextTick(() => {
          // Add the component back in
          this.renderComponent = true;
        });
      },

        regenerateInvoice() {

            localStorage.removeItem('invoice_code')

            localStorage.setItem('invoice_code', Date.now())

            axios({
                url: this.vueurl+ '/api/v1/invoices',
                method: 'post',
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


                console.log(response)



            }).catch((error) => {

                this.loading = false
                console.log(error)
            })

        },
    },
}

</script>


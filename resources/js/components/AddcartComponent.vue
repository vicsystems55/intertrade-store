<template>
<div class="">
    <button class="product__card--btn primary__btn" @click="addToCart" >Add To Card</button>
</div>
</template>
<script>

export default {


    mounted(){
    console.log('cart button component')
  },

  props: ['productid'],

    methods:{
        addToCart(){
            // console.log(this.$parent.$children[1])
            if(localStorage.getItem('user_token')){

                this.$parent.$children[1].addProduct(this.productid)
            }else{
                return window.location.href='/auth'

            }
        }
    }

}
</script>

<template>
    <div>
        <img class="img-100" :src="appurl+'/assets/img/logo/logo_white.png'" alt="#">
        <div>
            <h6 class="f-14">{{storeData.store_name}}</h6>
            <p></p>
        </div>

    </div>
</template>
<script>
import axios from 'axios';

export default {

    data() {
        return {
            storeData:''
        }
    },

    props: ['appurl'],

    mounted() {
        console.log('mounted')
        this.getStoreData()
    },

    methods: {
        getStoreData(){

            axios({
                url: this.appurl+'/api/v1/store-profile',
                method: 'get',
                headers:{
                    'Content-type': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                }
            }).then((res)=>{
                console.log(res)
                console.log(res.headers.date)

                this.storeData = res.data
            }).catch((res)=>{
                console.log(res)
            // window.location.href='/auth';

            })

        }
    },

}
</script>

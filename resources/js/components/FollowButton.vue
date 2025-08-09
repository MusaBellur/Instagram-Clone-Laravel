<template>
    <div id="app">
        <button class="btn btn-primary btn-sm mx-3" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    import axios from 'axios';
import { computed } from 'vue';

    export default {
        props: ['userId', 'follows'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function(){
            return {status: this.follows};
        },

        methods:{
            followUser(){
                axios.post('/follow/' + this.userId).then(response => {
                    this.status =! this.status;
                    console.log(response.data);
                    //alert('Takip işlemi başarılı');
                    }).catch(error => {
                        if(errors.response.status == 401){
                            window.location="/login";
                        }
                        console.error('Hata:', error);
                        alert('Bir hata oluştu. Lütfen tekrar deneyin.');
                    });
            }
        },

        computed: {
            buttonText(){
                return (this.status) ? 'Unfollow' : 'Follow';}
        }
    }
</script>

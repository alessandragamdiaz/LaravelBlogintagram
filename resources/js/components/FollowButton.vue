<template>
  <div>
    <button class="btn btn-primary" style="margin-left: 20%; background-color:0095f6; border-color:0095f6; 
      text-align: center;" @click="followUser" v-text="buttonText"></button>
  </div>
</template>

<script>
import axios from 'axios';


    export default {
        props: ['userId','follows'],
        

        mounted() {
            console.log('Component mounted.')
        },
        
        data: function () {
           
            return {

                status : this.follows,
            }


        },



        methods:{

            followUser(){

                axios.post('/follow/' + this.userId)
                .then(response => {
                    this.status = ! this.status; /** toggle the button to change the text */
                    console.log(response.data);
                })
                .catch(errors => {
                    if (errors.response.status == 401) {

                        window.location = '/login';
                    }
                });
            }
        },
        computed: {
            buttonText(){

                return(this.status) ? 'followed' : 'Follow'; /** change the text to a button only to use method name  */
            }
        }
    }
</script>

<template>
    <div class="relative overflow-hidden flex justify-center items-center h-screen w-screen bg-gradient-to-b from-green-800 to-green-600">
        <div class="grid grid-cols-1 xl:grid-cols-2 min-h-screen-lg rounded-none sm:rounded-lg flex flex-col justify-center items-center shadow-2xl h-full w-full z-10 sm:h-auto sm:w-1/2">
            <div class="bg-gray-400 hidden xl:block h-full md:rounded-l-lg relative overflow-hidden">
                <auth-slider></auth-slider>
            </div>
            <div class=" bg-white h-screen sm:h-auto md:rounded-r-lg sm:rounded-lg xl:rounded-l-sm">
                <div class="mb-5 min-h-screen-lg px-4 py-8 rounded-none sm:rounded-lg flex flex-col justify-center items-center h-full w-full z-10 sm:h-auto">
                    <div class="flex gap-3 mb-8 md:mb-5 mt-5">
                        <img src="/imgs/imoyes.png"  class="h-12" alt="">
                        <img src="/imgs/cielogo.png" class="h-12"  alt="">
                    </div>
                    <div class="border-2 relative bg-white shadow-xl my-3 w-full flex flex-row  py-0 rounded-lg grid">
                        <i class=""></i>
                        <font-awesome-icon :icon="['far', 'user']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                        <input type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Email or Phone"> 
                    </div>
                    <div class="border-2 relative bg-white shadow-xl my-3 w-full flex flex-row  py-0 rounded-lg grid">
                        <font-awesome-icon @click="togglePass" :icon="['fas', eye]" v-if="!passVal" class="mt-3 ml-3 fa-1x fa cursor-pointer right-0 rounded-r-lg bg-white py-3 px-2 bottom-0 absolute text-gray-500" />
                        <font-awesome-icon icon="lock" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                        <input v-model="input" @keyUp="inputVal" :type="password" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Password"> 
                     </div>
                    <button class="focus:outline-none text-white uppercase shadow-2xl my-3 w-full py-2 text-center rounded-lg cursor-pointer" style="background-color:#b91e1a;">
                        login
                    </button>
                    <div class="text-left text-gray-500 text-sm">
                        Don't have an account <a :href="route('register')" style="color: #b91e1a;">Register Now</a>
                    </div>
                    <!-- <div class="text-left text-gray-500 text-sm">
                        Have forgotten your password <a href="retreive.html" style="color: #b91e1a;">Retreive Now</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AuthSlider from '../Components/AuthSlider.vue';
import Http from "../Mixins/HttpClient";
import ModalComponent from './Components/ModalComponent.vue';
export default {
  components: { ModalComponent, AuthSlider },
    data(){
        return {
            eye:'eye',
            password:'password',
            passVal:true,
            input:''
        }
    },
    methods:{
        inputVal :function(){
            if(this.input != ''){
                this.passVal = false; 
            }else{
                this.passVal = true;
            }
        },
        togglePass :function(){
            if (this.password == 'password') {
                this.password = 'text'
                this.eye='eye-slash'
            } else {
                this.password = 'password'
                this.eye='eye'
            }
        },
        RegisterStudent(){
            this.processing = true;
            let student = {
                fullname: this.fname,
                password: this.pass,
                phone: this.phone,
                email: this.email,
                age: this.age,
            }
            Http.client.post('/register-student', student)
            .then((res) => {
                if(res.data.status == 'success'){
                    this.modal_message = res.data.message;
                    this.modal_type = 'success';
                    this.showModal = true;
                }else{
                    this.modal_message = res.data.message;
                    this.modal_type = 'error';
                    this.showModal = true;
                }
                this.clearFields();
                this.processing = false;
            })
            .catch((e) => {
                this.modal_message = 'An Error! Occurred. Please check your input and try again';
                this.modal_type = 'error';
                this.showModal = true;
                if (e.response) {
                    console.log(e.response.data.message);
                }else{
                    console.log('Network error!');
                }
                this.processing = false;
            });
        },
        closeModal(){
            this.showModal = false
        },
        clearFields(){
            this.fname = '';
            this.pass = '';
            this.phone = '';
            this.age = '';
            this.email = '';        }
    }
}
</script>

<style>

</style>
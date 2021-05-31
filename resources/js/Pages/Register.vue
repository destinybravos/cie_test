<template>
    <div class="relative overflow-hidden flex justify-center items-center h-screen w-screen bg-gradient-to-b from-green-800 to-green-600">
        <div class="grid grid-cols-1 xl:grid-cols-2 min-h-screen-lg rounded-none sm:rounded-lg flex flex-col justify-center items-center shadow-2xl h-full w-full z-10 sm:h-auto sm:w-1/2">
            <div class="bg-gray-400 hidden xl:block h-full md:rounded-l-lg relative overflow-hidden">
                <auth-slider></auth-slider>
            </div>
            <div class=" bg-white h-screen sm:h-auto md:rounded-r-lg sm:rounded-lg xl:rounded-l-sm">
                <div class="mb-5 min-h-screen-lg px-4 py-8 rounded-none sm:rounded-lg flex flex-col justify-center items-center h-full w-full z-10 sm:h-auto">
                    <form @submit.prevent="RegisterUser()">
                        <div class="flex gap-3 mb-8 md:mb-5 mt-5">
                            <img src="/imgs/imoyes.png"  class="h-12" alt="">
                            <img src="/imgs/cielogo.png" class="h-12"  alt="">
                        </div>
                        <div class="border-2 relative bg-white shadow-xl my-3 w-full flex flex-row  py-0 rounded-lg grid">
                            <font-awesome-icon :icon="['far', 'user']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                            <input v-model="uname" required type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Username">
                        </div>
                        <div class="border-2 relative bg-white shadow-xl my-3 w-full flex flex-row  py-0 rounded-lg grid">
                            <font-awesome-icon :icon="['far', 'envelope']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                            <input v-model="email" required type="email" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Email Address"> 
                        </div>
                        <div class="border-2 relative bg-white shadow-xl my-3 w-full flex flex-row  py-0 rounded-lg grid">
                            <font-awesome-icon :icon="['fas', 'phone-alt']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                            <input v-model="phone" required type="tel" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Phone"> 
                        </div>
                        <div class="border-2 relative bg-white shadow-xl my-3 w-full flex flex-row  py-0 rounded-lg grid">
                            <font-awesome-icon @click="togglePass" :icon="['fas', eye]" v-if="!passVal" class="mt-3 ml-3 fa-1x fa cursor-pointer right-0 rounded-r-lg bg-white py-3 px-2 bottom-0 absolute text-gray-500" />
                            <font-awesome-icon icon="lock" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                            <input v-model="pass" required @keyUp="inputVal" :type="password" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Password"> 
                        </div>
                        <div class="my-3 w-full cursor-pointer">
                            <input type="checkbox" @click="agree2terms" id="agree" class="cursor-pointer checked:bg-red-600 checked:border-red-300" >
                            <label for="agree" class="cursor-pointer">
                                I agree to the terms and conditions
                            </label>
                        </div>
                        <button type="submit" v-if="agreed" class="focus:outline-none text-white uppercase shadow-2xl my-3 w-full py-2 text-center rounded-lg cursor-pointer" style="background-color:#b91e1a;">
                            <font-awesome-icon v-if="processing" :icon="['fas', 'circle-notch']" spin class="mr-2" />
                            <font-awesome-icon v-else :icon="['fas', 'user-plus']" class="mr-2" />  
                            Register
                        </button>
                        <button type="button" v-else disabled class="focus:outline-none text-white uppercase shadow-2xl my-3 w-full py-2 text-center rounded-lg cursor-pointer bg-gray-500">
                            <font-awesome-icon :icon="['fas', 'user-plus']" class="mr-2" />  
                            Register
                        </button>
                        <div class="text-left text-gray-500 text-sm">
                            Already have an account <a :href="route('login')" style="color: #b91e1a;">Login Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        
        <modal-component :propShow="showModal" :propSize="'sm'" @closeModal="closeModal">
            <div class="text-2xl text-center">
                <div v-if="modal_type == 'success'">
                    <font-awesome-icon :icon="['far', 'check-circle']" class="text-4xl text-green-500" /> <br>
                    {{ modal_message }}
                </div>
                <div v-else>
                    <font-awesome-icon :icon="['far', 'times-circle']" class="text-4xl text-red-500" /> <br>
                    {{ modal_message }}
                </div>
            </div>
        </modal-component>
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
            token: document.getElementsByName('csrf-token')[0].getAttribute('content'),
            eye:'eye',
            password:'password',
            passVal:true,
            showModal:false,
            processing:false,
            modal_type:'',
            modal_message:'',
            uname:'',
            pass:'',
            phone:'',
            email:'',
            agreed:false
        }
    },
    methods:{
        inputVal(){
            if(this.pass != ''){
                this.passVal = false; 
            }else{
                this.passVal = true;
            }
        },
        togglePass(){
            if (this.password == 'password') {
                this.password = 'text'
                this.eye='eye-slash'
            } else {
                this.password = 'password'
                this.eye='eye'
            }
        },
        RegisterUser(){
            this.processing = true;
            let user = {
                username: this.uname,
                password: this.pass,
                phone: this.phone,
                email: this.email,
                password_confirmation:this.pass,
                _token: this.token
            }
            Http.client.post('/register-user', user) 
            .then((res) => {
                if(res.data.status == 'success'){
                    this.modal_message = res.data.message;
                    this.modal_type = 'success';
                    this.showModal = true;
                    setTimeout(() => {
                        window.location.href = '/login';
                    }, 1000);
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
            this.email = '';        
        },
        agree2terms(e){
            this.agreed = e.target.checked;
            console.log(this.agreed);
        }
    }
}
</script>

<style>

</style>
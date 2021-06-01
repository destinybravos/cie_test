<template>
    <div class="bg-green-600 bg-opacity-50" id="home-banner">
        <div class="w-full">
            <!-- <div class="text-center text-white py-2 px-3 bg-green-600">
                <img src="/imgs/govlogo.png" alt="" class="inline-block h-16 mx-2">
                <img src="/imgs/imoyes.png" alt="" class="inline-block h-16 mx-2">
                <img src="/imgs/cielogo.png" alt="" class="inline-block h-16 mx-2">
            </div> -->
            <page-header />

            <!-- <home-slider></home-slider> -->
            <div class="h-full w-full bg-black bg-opacity-50 flex items-center">
                <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-7 gap-4 mx-auto max-w-6xl px-4 md:px-2">
                    <div class="lg:col-span-4" data-aos="zoom-in">
                        <div class="rounded text-white opacity py-12 p-2 md:px-1 flex items-center">
                            <div>
                                <span class="font-black text-3xl sm:text-5xl my-2 uppercase">
                                    Innovative imo initiative
                                </span>
                                <hr class="w-1/4 border-2 border-blue-700">
                                <p class="mt-4 mb-3 text-xl md:w-5/6">
                                    Sharing prosperity through innovation training and entrepreneurship
                                </p>
                                <p class="py-5 block font-semibold">
                                    <a :href="'/register'" class="inline-block py-2 px-5 hover:bg-blue-800 hover:text-white px-4 bg-white border border-blue-800 text-blue-800 rounded shadow">
                                        <font-awesome-icon :icon="['fas', 'user-plus']" /> Get Started
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-3 hidden md:block" data-aos="slide-up">
                        <div class=" bg-white h-screen sm:h-auto md:rounded-lg lg:w-4/6 mx-auto">
                            <!-- Login -->
                            <div v-if="!actReg" class="mb-5 min-h-screen-lg px-4 py-8 rounded-none sm:rounded-lg flex flex-col justify-center items-center h-full w-full z-10 sm:h-auto">
                                <form @submit.prevent="LoginUser" method="post">
                                    <input type="hidden" name="_token" v-model="token">
                                    <div class="flex gap-3 mb-8 md:mb-5 mt-5 justify-center">
                                        <img src="/imgs/govlogo.png" alt="" class="h-12">
                                        <img src="/imgs/imoyes.png"  class="h-12" alt="">
                                        <img src="/imgs/cielogo.png" class="h-12"  alt="">
                                    </div>
                                    <div class="border-2 relative bg-white shadow-xl my-3 w-full flex flex-row  py-0 rounded-lg grid">
                                        <i class=""></i>
                                        <font-awesome-icon :icon="['far', 'user']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                        <input v-model="email" type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Email or Phone"> 
                                    </div>
                                    <div class="border-2 relative bg-white shadow-xl my-3 w-full flex flex-row  py-0 rounded-lg grid">
                                        <font-awesome-icon @click="togglePass" :icon="['fas', eye]" v-if="!passVal" class="mt-3 ml-3 fa-1x fa cursor-pointer right-0 rounded-r-lg bg-white py-3 px-2 bottom-0 absolute text-gray-500" />
                                        <font-awesome-icon icon="lock" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                        <input v-model="pass" @keyUp="inputVal" :type="password" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Password"> 
                                    </div>
                                    <div v-if="errors.length > 0">
                                        <span class="text-sm" style="color: #b91e1a;">
                                            <i>{{ errors[0] }}</i>
                                        </span>
                                    </div>
                                    <button class="focus:outline-none text-white uppercase shadow-2xl my-3 w-full py-2 text-center rounded-lg cursor-pointer" style="background-color:#b91e1a;">
                                        <font-awesome-icon icon="sign-in-alt" class="mr-2" />
                                        login
                                    </button>
                                    <div class="text-left text-gray-500 text-sm">
                                        Don't have an account <a @click="actReg = !actReg" class="cursor-pointer" style="color: #b91e1a;">Register Now</a>
                                    </div>
                                    <!-- <div class="text-left text-gray-500 text-sm">
                                        Have forgotten your password <a href="retreive.html" style="color: #b91e1a;">Retreive Now</a>
                                    </div> -->
                                </form>
                            </div>
                            <!-- Register -->
                            <div v-else class="mb-5 min-h-screen-lg px-4 py-8 rounded-none sm:rounded-lg flex flex-col justify-center items-center h-full w-full z-10 sm:h-auto">
                                <form @submit.prevent="RegisterUser()">
                                    <div class="flex gap-3 mb-8 md:mb-5 justify-center">
                                        <img src="/imgs/govlogo.png" alt="" class="h-10">
                                        <img src="/imgs/imoyes.png"  class="h-10" alt="">
                                        <img src="/imgs/cielogo.png" class="h-10"  alt="">
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
                                        Already have an account <a @click="actReg = !actReg" class="cursor-pointer" style="color: #b91e1a;">Login Now</a>
                                    </div>
                                </form>
                            </div>
                            <!-- Register -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import HomeSlider from '../../Components/HomeSlider.vue'
import PageHeader from './PageHeader.vue'
export default {
  components: { PageHeader, HomeSlider },
    data(){
        return {
            eye:'eye',
            password:'password',
            passVal:true,
            actReg:false,
            pass:'',
            email:'',
            errors:[],
            token: document.getElementsByName('csrf-token')[0].getAttribute('content'),
        }
    },
    methods:{
        inputVal :function(){
            if(this.pass != ''){
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
        LoginUser(){
            this.processing = true;
            let user = {
                email:this.email,
                password: this.pass,
                email: this.email,
                _token: this.token
            }
            Http.client.post(route('login'), user)
            .then((res) => {
                if(res.status == 200){
                    window.location.href = '/dashboard';
                }
                this.processing = false;
            })
            .catch((e) => {
                if (e.response) {
                    if (e.response.data.message == 'Your email address is not verified.') {
                        window.location.href = '/dashboard';
                    } else {
                        this.errors.push('Invalid username or password!');
                    }
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
            this.email = '';        
        }
    }
}
</script>

<style scoped>
    #home-banner{
        background-image: url('/imgs/workers1.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
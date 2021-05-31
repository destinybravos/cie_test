<template>
    <div class="text-white bottom-0 sticky">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-0">
            <div id="newl">
            </div>
            <div class="lg:col-span-2 bg-green-500 bg-opacity-75 py-6 px-4 md:py-20 md:px-12" data-aos="zoom-in-up">
                <h1 class="text-2xl lg:text-5xl font-black">
                    Subscribe to our Mailing List
                </h1>
                <p class="text-lg font-semibold">
                    Receive exclusive & first-hand updates about important events from IMSU.
                </p>
                <form @submit.prevent="''" class="block my-4">
                    <input type="email" required placeholder="Enter your email address" 
                        class="form-input rounded shadow-sm block w-full focus:text-gray-700 text-green-600 lg:w-3/4 md:h-14">
                    
                    <button class="bg-blue-900 hover:bg-blue-800 py-2 px-5 rounded mt-2">
                        SUBSCRIBE
                    </button>
                </form>
            </div>
        </div>

        <div class="container mx-auto grid grid-cols-1 mt-8 md:grid-cols-2 lg:grid-cols-4">
            <!-- First Column -->
            <div class="col-span-1 py-2 px-4 lg:col-span-1" data-aos="zoom-in-up">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <div>
                        <inertia-link :href="route('home')">
                            <img src="/imgs/imoyes.png" class="mb-8" style="max-width:100%; max-height:100px;" />
                        </inertia-link>
                        <div class="text-sm">
                            <p class="my-4">
                                Our primarily goals focuses on continuous provision of quality learning 
                                environment and producing highly intellectual graduates with reputable 
                                character
                            </p>
                        </div>
                        <div>
                            <span class="inline-flex rounded-tr-lg rounded-bl-lg border border-white h-8 w-8 justify-center align-center align-top mr-2">
                                <a href="#" class="py-1">
                                    <font-awesome-icon :icon="['fab','facebook-f']" class="mr-1"></font-awesome-icon>
                                </a>
                            </span>
                            <span class="inline-flex rounded-tr-lg rounded-bl-lg border border-white h-8 w-8 justify-center align-center align-top mr-2">
                                <a href="#" class="py-1">
                                    <font-awesome-icon :icon="['fab','twitter']" class="mr-1"></font-awesome-icon>
                                </a>
                            </span>
                            <span class="inline-flex rounded-tr-lg rounded-bl-lg border border-white h-8 w-8 justify-center align-center align-top mr-2">
                                <a href="#" class="py-1">
                                    <font-awesome-icon :icon="['fab','whatsapp']" class="mr-1"></font-awesome-icon>
                                </a>
                            </span>
                            <span class="inline-flex rounded-tr-lg rounded-bl-lg border border-white h-8 w-8 justify-center align-center align-top mr-2">
                                <a href="#" class="py-1">
                                    <font-awesome-icon :icon="['fab','instagram']" class="mr-1"></font-awesome-icon>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second Column -->
            <div class="col-span-1 py-2 px-4" data-aos="zoom-in-up">
                <h3 class="font-bold mb-3 py-2 px-4 rounded-tr-lg rounded-bl-lg border bg-white bg-opacity-25 text-gray-100">
                    Featured Links
                </h3>

                <ul class="py-2 px-4 text-sm" id="quick_list">
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="link" class="mr-1"/>
                            2017/2018 Pre-Degree Application
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="external-link-alt" class="mr-1"/>
                            2017/2018 Pre-Degree Application Invoice
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="link" class="mr-1"/>
                            2016/2017 ICEP Invoice Generation
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="external-link-alt" class="mr-1"/>
                            2016/2017 ICEP Login
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="link" class="mr-1"/>
                            2020 JUPEB Result
                        </inertia-link>
                    </li>
                </ul>
            </div>
            <!-- Third Column -->
            <div class="col-span-1 py-2 px-4" data-aos="zoom-in-up">
                <h3 class="font-bold mb-3 py-2 px-4 rounded-tr-lg rounded-bl-lg border bg-green-600 bg-opacity-50 text-gray-100">
                    Quic Links
                </h3>

                <ul class="py-2 px-4 text-sm" id="quick_list">
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="info-circle" class="mr-1"/>
                            About us
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon :icon="['fab', 'accusoft']" class="mr-1"/>
                            Academics
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="users-cog" class="mr-1"/>
                            Administrations
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="chalkboard-teacher" class="mr-1"/>
                            E-learning
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="book-reader" class="mr-1"/>
                            E-library
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="map-pin" class="mr-1"/>
                            Centers
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="user-plus" class="mr-1"/>
                            Admissions
                        </inertia-link>
                    </li>
                </ul>
            </div>         

            <!-- Fouth Column -->
            <div class="col-span-1 py-2 px-4" data-aos="zoom-in-up">
                <h3 class="font-bold">
                    Latest News
                </h3>
                <hr class="border-gray-400 my-3">
                <ul class="py-2 px-2" id="quick_list">
                    <li class="mb-2">
                        <a href="#">
                            <div class="grid grid-cols-3 gap-2">
                                <div>
                                    <img src="imgs/news1.jpg" alt="" class="max-w-full">
                                </div>
                                <div class="col-span-2">
                                    <p class="font-semibold text-sm">
                                        AWARD OF EXCELLENCE BY CAN
                                    </p>
                                    <small class="text-xs text-gray-400">
                                        <i>25th May, 2021</i>
                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#">
                            <div class="grid grid-cols-3 gap-2">
                                <div>
                                    <img src="imgs/news2.jpg" alt="" class="max-w-full">
                                </div>
                                <div class="col-span-2">
                                    <p class="font-semibold text-sm">
                                        NOTICE OF RESUMPTION
                                    </p>
                                    <small class="text-xs text-gray-400">
                                        <i>15th May, 2021</i>
                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#">
                            <div class="grid grid-cols-3 gap-2">
                                <div>
                                    <img src="imgs/news1.jpg" alt="" class="max-w-full">
                                </div>
                                <div class="col-span-2">
                                    <p class="font-semibold text-sm">
                                        IMSU 2020/2021 PROSPECTIVE STUDENTS
                                    </p>
                                    <small class="text-xs text-gray-400">
                                        <i>5th May, 2021</i>
                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="border-gray-400 mt-6">
        <div class="text-center bg-gray-900 text-gray-300 p-4" data-aos="zoom-in">
            Copyright &copy; Imo State University, {{ year.getFullYear() }}. All Rights Reserved
        </div>
    </div>
</template>

<script>
import HttpClient from "../../Mixins/HttpClient";

export default {
    data(){
        return {
            year: new Date(),
            email:'',
        }
    },
    methods:{
        saveSubscibtion(){
            let data = new FormData();

            console.log(this.email);

            // data appending
            data.append('email', this.email);

            HttpClient.client
            .post('/customer/store_subscribtion_email', data)
            .then((response) => {
                this.handleSave(response.data);
            })
            .catch((error) => {
                if(error.response){
                    console.log(error.response.data.message);
                }else{
                    console.log("A Network Error Occured");
                }
            });
        },
        handleSave(data){
            if(data.status == "success"){
                document.forms['form_subscribtion'].reset();
                alert("Thanks for Subscribing");
            }else{
                console.log(data.message);
            }
        }
    }
}
</script>


<style scoped>
    #newl{
        background-image: url('/imgs/newsl_bg.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center top;
    }
</style>
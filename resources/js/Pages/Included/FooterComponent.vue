<template>
    <div class="text-white bottom-0 sticky">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-0">
            <div id="newl">
            </div>
            <div class="lg:col-span-2 bg-green-500 bg-opacity-75 py-6 px-4 md:py-20 md:px-12" data-aos="zoom-in-up">
                <h1 class="text-2xl lg:text-3xl font-black">
                    Let's be a part of Innovations for Employment and Economic Development in Nigeria
                </h1>
                <a href="/register" class="bg-gradient-to-b from-red-800 to-red-600 py-2 px-5 mt-4 inline-block fot-bold rounded">
                    JOIN A PROGRAM
                </a>
            </div>
        </div>

        <div class="container mx-auto grid grid-cols-1 mt-8 md:grid-cols-2 lg:grid-cols-4">
            <!-- First Column -->
            <div class="col-span-1 py-2 px-4 lg:col-span-1" data-aos="zoom-in-up">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <div>
                        <inertia-link :href="route('home')">
                            <img src="/imgs/govlogo.png" alt="" class="inline-block h-10 mx-2">
                            <img src="/imgs/imoyes.png" alt="" class="inline-block h-10 mx-2">
                            <img src="/imgs/cielogo.png" alt="" class="inline-block h-10 mx-2">
                        </inertia-link>
                        <div class="text-sm">
                            <p class="my-4">
                                IMOYES is specially designed to inspire the spirit of Innovation across all sectors of the economy of Imo State with the aim of making Imo State a model Innovative Society for the benefit of all citizen. 
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
                            Our Community
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="external-link-alt" class="mr-1"/>
                            Imo State Innovation Park (ISIP)
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="link" class="mr-1"/>
                            Featured Ventures
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="external-link-alt" class="mr-1"/>
                            News & Upcoming Events
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon :icon="['fas' , 'briefcase']" class="mr-1"/>
                            Find a Career
                        </inertia-link>
                    </li>
                </ul>
            </div>
            <!-- Third Column -->
            <div class="col-span-1 py-2 px-4" data-aos="zoom-in-up">
                <h3 class="font-bold mb-3 py-2 px-4 rounded-tr-lg rounded-bl-lg border bg-green-600 bg-opacity-50 text-gray-100">
                    Quick Links
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
                            <font-awesome-icon :icon="['fas', 'tasks']" class="mr-1"/>
                            Programmes
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon :icon="['fas' , 'map-pin']" class="mr-1"/>
                            Locations
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon :icon="['fas' , 'phone-alt']" class="mr-1"/>
                            Contact us
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon :icon="['fas' , 'sign-in-alt']" class="mr-1"/>
                            User Login
                        </inertia-link>
                    </li>
                    <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon :icon="['fas' , 'user-plus']" class="mr-1"/>
                            Register
                        </inertia-link>
                    </li>
                    <!-- <li class="mb-2">
                        <inertia-link :href="'#'" class="quick-link my-2">
                            <font-awesome-icon icon="user-plus" class="mr-1"/>
                            Admissions
                        </inertia-link>
                    </li> -->
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
        <div class="text-center bg-gray-900 text-gray-300 p-4" data-aos="zoom-in-up">
            Copyright &copy; Imo Youth Empowerment Scheme, {{ year.getFullYear() }}. All Rights Reserved
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
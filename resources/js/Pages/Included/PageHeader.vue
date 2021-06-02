<template>
    <div ref="pagehead">
        <div id="overlay" class="h-full w-full fixed transition-all duration-700 overflow-auto z-10" style="display:none;" 
            @click="isSideOpen = !isSideOpen">
        </div>

    <div class="text-white bg-green-600">
        <div class="mx-auto max-w-6xl text-white grid grid-cols-1 md:grid-cols-5 text-sm py-2 px-3 md:px-2">
            <div class="col-span-2">
                <img src="/imgs/govlogo.png" alt="" class="inline-block h-10 mx-2">
                <img src="/imgs/inoimo.jpg" alt="" class="inline-block h-10 mx-2">
                <img src="/imgs/cielogo.png" alt="" class="inline-block h-10 mx-2">
            </div>
            <div class="col-span-3 text-right hidden md:block">
                <span class="mr-4">
                    <font-awesome-icon :icon="['fas' , 'phone-alt']" /> Call Us: 08000000000
                </span>
            </div>
        </div>
    </div>
        <hr  class="mx-auto max-w-6xl border-gray-600">

        <div id="sticky_top" class="transition-top duration-700 text-green-500 bg-white" :class="scrolledDown ? scroll_classes : ''">
            <div class="mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-6 px-3 md:px-2">
                <div>
                    <span class="float-right text-2xl mr-3 mt-1 py-1 px-2 cursor-pointer md:hidden block"
                      @click="isSideOpen = !isSideOpen">
                        <font-awesome-icon :icon="['fas' , 'bars']" />
                    </span>
                    <!-- <inertia-link :href="route('home')" class="inline-block py-2">
                        <img v-if="scrolledDown" src="imgs/inoimo.jpg" alt="" class="h-10 max-h-full">
                        <img v-else src="imgs/inoimo.jpg" alt="" class="h-10 max-h-full">
                    </inertia-link> -->
                </div>
                <div class="col-span-5 md:text-right hidden md:block transition-all duration-150 ease-in-out" 
                  id="menu" :class="{'open': isSideOpen == true}">
                    <div class="md:hidden block text-center">
                        <!-- <inertia-link :href="route('home')" class="inline-block pt-1">
                            <img src="imgs/inoimo.jpg" alt="" class="max-h-full">
                        </inertia-link> -->
                    <hr>
                    </div>
                    <ul class="font-semibold py-2 text-sm">
                        <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'home']" /> Home
                            </inertia-link>
                        </li>
                        <li class="md:inline-block border-b md:border-0 ml-auto relative right-0">
                            <a href="#" class="py-3 px-3 lg:px-4 block md:inline-block" @click="showAbout = !showAbout">
                                <font-awesome-icon :icon="['fas' , 'info-circle']" /> 
                                About IMOYES
                                <font-awesome-icon :icon="['fas' , 'chevron-down']" class="ml-2" />
                            </a>
                            <div v-if="showAbout" class="absolute z-10 shadow rounded dropdown top-0 left-0 right-auto bottom-auto w-44 bg-white text-left  transform -translate-x-1/2">
                                <ul>
                                    <li class="border-b border-gray-200">
                                        <inertia-link :href="route('about')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                            <font-awesome-icon :icon="['fas' , 'info-circle']" /> About Us
                                        </inertia-link>
                                    </li>
                                    <li class="border-b border-gray-200">
                                        <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                            <font-awesome-icon :icon="['fas' , 'tasks']" /> Programmes
                                        </inertia-link>
                                    </li>
                                    <li class="border-b border-gray-200">
                                        <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                            <font-awesome-icon :icon="['fas' , 'map-pin']" /> locations
                                        </inertia-link>
                                    </li>
                                    <li class="">
                                        <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                            <font-awesome-icon :icon="['fas' , 'phone-alt']" /> Contact us
                                        </inertia-link>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'university']" /> Innovation Park
                            </inertia-link>
                        </li>
                        <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'tools']" /> Ventures
                            </inertia-link>
                        </li>
                        <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'briefcase']" /> Jobs
                            </inertia-link>
                        </li>
                        <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['far' , 'building']" /> Member firms
                            </inertia-link>
                        </li>
                        <!--  -->
                        <!--  -->
                        <li class="md:inline-block border-b md:border-0 ml-auto relative right-0">
                            <a href="#" class="py-3 px-3 lg:px-4 block md:inline-block" @click="showAccount = !showAccount">
                                <font-awesome-icon :icon="['far' , 'user']" /> 
                                User Acount <font-awesome-icon :icon="['fas' , 'chevron-down']" class="ml-2" /> 
                            </a>
                            <div v-if="showAccount" class="absolute z-10 shadow rounded dropdown top-0 left-0 right-auto bottom-auto w-44 bg-white text-left">
                                <ul>
                                    <li class="border-b border-gray-200">
                                        <inertia-link :href="route('login')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                            <font-awesome-icon :icon="['fas' , 'sign-in-alt']" /> User Login
                                        </inertia-link>
                                    </li>
                                    <li class="">
                                        <inertia-link :href="route('register')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                            <font-awesome-icon :icon="['fas' , 'user-plus']" /> Register
                                        </inertia-link>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- . . . login/register -->
    </div>
</template>

<script>
export default {
    data(){
        return {
            scrolled: 0,
            scroll_classes : 'fixed top-0 w-full z-10 bg-white bg-opacity-100 text-green-800 shadow-lg',
            scrolledDown: false,
            isSideOpen:false,
            showAbout:false,
            showAccount:false
        }
    },
    watch:{
        'isSideOpen' : function () {
            this.toggleSideBar();
        }
    },
    methods: {
        handleScroll () {
            this.scrolled = window.scrollY;
            if (this.scrolled >= 200) {
                this.scrolledDown = true;
            }else{
                this.scrolledDown = false;
            }
        },
        toggleSideBar(){
            let overlay = document.getElementById('overlay')
            // Styling
            overlay.style.backgroundColor = "rgba(0,0,0,0.5)";
            // toggle opacity
            if(this.isSideOpen){
               overlay.style.display = 'block';
               overlay.style.opacity = '100%';
            }else{
                overlay.style.opacity = '0';
                setTimeout(() => {
                    overlay.style.display = 'none';
                }, 500);
            }
        }
    },
    created () {
        window.addEventListener('scroll', this.handleScroll);
    },
    destroyed () {
        window.removeEventListener('scroll', this.handleScroll);
    }
}
</script>

<style scoped>
    .dropdown{
        transform: translate3d(-2rem, 3rem, 2rem);
        will-change: transform;
        min-height: 10px;
    }
    .dropdown li:hover{
        background-color: #e5f8ea;
    }
</style>

<style>
    @media (max-width:767px) {
        #menu{
            display: block !important;
            position: fixed;
            left: -250px;
            width: 250px;
            background-color: white;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            overflow-x: hidden;
            z-index: 10;
        }
        #menu li:not(:last-child) a{
            color: #1e429f;
        }
        #menu.open{
            left: 0;
        }
    }
</style>
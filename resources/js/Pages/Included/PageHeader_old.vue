<template>
    <div ref="pagehead">
        <div id="overlay" class="h-full w-full fixed transition-all duration-700 overflow-auto z-10" style="display:none;" 
            @click="isSideOpen = !isSideOpen">
        </div>
        <div class="mx-auto max-w-6xl text-white grid grid-cols-1 md:grid-cols-5 text-sm py-2 px-3 md:px-2">
            <div class="col-span-2">
                <span class="mr-4">
                    <font-awesome-icon :icon="['far' , 'envelope']" /> Newsletter
                </span>
                <span class="mr-4">
                    <font-awesome-icon :icon="['far' , 'user']" /> Careers
                </span>
            </div>
            <div class="col-span-3 text-right hidden md:block">
                <a href="#" class="mr-5">TETFund</a>
                <a href="#" class="mr-5">Intervention</a>
                <a href="#" class="mr-5">Giving/Donation</a>
                <a href="#" class="mr-5"><font-awesome-icon :icon="['fas' , 'phone-alt']" />  Contact Us</a>
                <a href="#" class="mr-5"><font-awesome-icon :icon="['far' , 'envelope']" />  Mail</a>
            </div>
        </div>
        <hr  class="mx-auto max-w-6xl border-gray-600">
        <div id="sticky_top" class="transition-top duration-700 text-white" :class="scrolledDown ? scroll_classes : ''">
            <div class="mx-auto max-w-6xl grid grid-cols-1 md:grid-cols-4 px-3 md:px-2">
                <div>
                    <span class="float-right text-2xl mr-3 mt-1 py-1 px-2 cursor-pointer md:hidden block"
                      @click="isSideOpen = !isSideOpen">
                        <font-awesome-icon :icon="['fas' , 'bars']" />
                    </span>
                    <inertia-link :href="route('home')" class="inline-block py-2">
                        <img v-if="scrolledDown" src="imgs/imsu_dark.png" alt="" class="max-h-full">
                        <img v-else src="imgs/imsu_logo.png" alt="" class="max-h-full">
                    </inertia-link>
                </div>
                <div class="col-span-3 md:text-right hidden md:block transition-all duration-700 duration-150 ease-in-out" 
                  id="menu" :class="{'open': isSideOpen == true}">
                    <div class="md:hidden block text-center">
                        <inertia-link :href="route('home')" class="inline-block pt-1">
                            <img src="imgs/imsu_dark.png" alt="" class="max-h-full">
                        </inertia-link>
                    <hr>
                    </div>
                    <ul class="font-semibold py-2 text-sm">
                        <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'home']" /> Home
                            </inertia-link>
                        </li>
                        <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'university']" /> The University
                            </inertia-link>
                        </li>
                        <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'info-circle']" /> About Us
                            </inertia-link>
                        </li>
                        <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fab' , 'acusoft']" /> Academics
                            </inertia-link>
                        </li>
                        <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'user-plus']" /> Admission
                            </inertia-link>
                        </li>
                        <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'user-graduate']" /> Student
                            </inertia-link>
                        </li>
                        <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'book-reader']" /> E-Library
                            </inertia-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            scrolled: 0,
            scroll_classes : 'fixed top-0 w-full z-10 bg-white bg-opacity-100 text-blue-800 shadow-lg',
            scrolledDown: false,
            isSideOpen:false,
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
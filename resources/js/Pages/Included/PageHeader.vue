<template>
    <div ref="pagehead">
        <div id="overlay" class="h-full w-full fixed transition-all duration-700 overflow-auto z-10" style="display:none;" 
            @click="isSideOpen = !isSideOpen">
        </div>
        <div id="sticky_top" class="transition-top duration-700 text-green-500 bg-white" :class="scrolledDown ? scroll_classes : ''">
            <div class="mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-6 px-3 md:px-2">
                <div>
                    <span class="float-right text-2xl mr-3 mt-1 py-1 px-2 cursor-pointer md:hidden block"
                      @click="isSideOpen = !isSideOpen">
                        <font-awesome-icon :icon="['fas' , 'bars']" />
                    </span>
                    <inertia-link :href="route('home')" class="inline-block py-2">
                        <img v-if="scrolledDown" src="imgs/imoyes.png" alt="" class="h-10 max-h-full">
                        <img v-else src="imgs/imoyes.png" alt="" class="h-10 max-h-full">
                    </inertia-link>
                </div>
                <div class="col-span-5 md:text-right hidden md:block transition-all duration-700 duration-150 ease-in-out" 
                  id="menu" :class="{'open': isSideOpen == true}">
                    <div class="md:hidden block text-center">
                        <inertia-link :href="route('home')" class="inline-block pt-1">
                            <img src="imgs/imoyes.png" alt="" class="max-h-full">
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
                                <font-awesome-icon :icon="['fas' , 'info-circle']" /> 
                                About IMOYES
                                <font-awesome-icon :icon="['fas' , 'chevron-down']" class="ml-2" />
                            </inertia-link>
                        </li>
                        <!-- <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'info-circle']" /> About Us
                            </inertia-link>
                        </li> -->
                        <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'university']" /> Innovation Park
                            </inertia-link>
                        </li>
                        <!-- <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'tasks']" /> Programmes
                            </inertia-link>
                        </li> -->
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
                        <!-- <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'map-pin']" /> locations
                            </inertia-link>
                        </li> -->
                        <!-- <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['fas' , 'phone-alt']" /> Contact us
                            </inertia-link>
                        </li> -->
                        <li class="md:inline-block border-b md:border-0">
                            <inertia-link :href="route('home')" class="py-3 px-3 lg:px-4 block md:inline-block">
                                <font-awesome-icon :icon="['far' , 'user']" /> 
                                Acount <font-awesome-icon :icon="['fas' , 'chevron-down']" class="ml-2" /> 
                            </inertia-link>
                            <div class="absolute z-10 bg-white px-3 py-2">
                                Just own
                            </div>
                            <!-- <div class="absolute z-10 left-1/2 transform -translate-x-1/2 mt-3 px-2 sm:px-0 bg-gray-100">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, maxime hic suscipit, possimus eum ab eligendi aut nostrum eaque voluptatem commodi. Pariatur consectetur architecto ducimus perferendis sed nesciunt labore delectus.
                            </div> -->
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
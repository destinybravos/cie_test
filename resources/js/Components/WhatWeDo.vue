<template>
    <div id="serv_descr" class="bg-green-600">
        <!-- <div class="container max-w-6xl py-4  mx-auto grid grid-cols-1 lg:grid-cols-3 gap-4"> -->
            
            <div class="container max-w-6xl mx-auto py-4  lg:col-span-2 grid grid-cols-1 lg:grid-cols-4 gap-3">
                <div class="py-1">
                    <div class="text-center lg:mt-7 lg:text-right uppercase" data-aos="fade-up">
                        <div class="inline-flex gap-3 md:right-0 md:mt-5">
                            <img src="/imgs/inoimo.jpg" alt="" class="h-12">
                            <!-- <img src="/imgs/cielogo.png" alt="" class="h-12"> -->
                        </div>
                        <h2 class="font-bold text-2xl text-white uppercase">
                            What We Do
                        </h2>
                        <!-- <a href="#" class="lg:inline-block mt-8 font-weight-bolder transition-all delay-100 bg-gradient-to-t from-red-800 to-red-600 hidden py-2 rounded-lg text-white px-8 center">
                            View more
                        </a> -->
                    </div>
                </div>
                <div class="py-1 mx-4 md:mx-0">
                    <div class="bg-white border rounded shadow-lg h-full p-4 grid grid-cols-6 gap-4" data-aos="zoom-in-up">
                        <div class="text-right font-bold text-green-600">
                            <font-awesome-icon icon="bullhorn" size="2x" class="mt-3" />
                        </div>
                        <div class="col-span-5">
                            <h2 class="mb-3 font-bold text-green-600 text-2xl">Innovation</h2>
                            <p class="text-sm">
                                We leverage on technology to develop innovative and economically viable products and services for public and private organizations that solve important needs of Imo State and the world at large. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="py-1 mx-4 md:mx-0">
                    <div class="bg-white border rounded shadow-lg h-full p-4 grid grid-cols-6 gap-4" data-aos="zoom-in-up">
                        <div class="text-right font-bold text-green-600">
                            <font-awesome-icon icon="tools" size="2x" class="mt-3" />
                        </div>
                        <div class="col-span-5">
                            <h2 class="mb-3 font-bold text-green-600 text-2xl">Training</h2>
                            <p class="text-sm">
                                We provide training and support to Imolites to be gainfully employed or self-employed in viable, new and innovative areas of services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="py-1 mx-4 md:mx-0">
                    <div class="bg-white border rounded shadow-lg h-full p-4 grid grid-cols-6 gap-4" data-aos="zoom-in-up">
                        <div class="text-right font-bold text-green-600">
                            <font-awesome-icon icon="store-alt" size="2x" class="mt-3" />
                        </div>
                        <div class="col-span-5">
                            <h2 class="mb-3 font-bold text-green-600 text-2xl">Entrepreneurship</h2>
                            <p class="text-sm">
                                Transform innovative products and services that solve important needs of the society into commercially viable and sustainable public and private enterprises. 
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="py-1 mx-4 md:mx-0">
                    <div class="bg-white border rounded shadow-lg h-full p-4 grid grid-cols-6 gap-4" data-aos="zoom-in-up">
                        <div class="text-right font-bold text-green-600">
                            <font-awesome-icon icon="seedling" size="2x" class="mt-3" />
                        </div>
                        <div class="col-span-5">
                            <h2 class="mb-3 font-bold text-green-600 text-2xl">Imo Demo Day</h2>
                            <p class="text-sm">
                                Through research and innovation, IMSU aims to become a world-class ...  
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>
        <!-- </div> -->
        <div class="flex pb-5 lg:hidden justify-center">
            <a href="#" class="font-weight-bolder bg-gradient-to-t from-red-800 to-red-600 inline-block py-2 rounded-lg text-white px-8 center">
                View more
            </a> 
        </div>
    </div>
</template>

<script>
import BriefAbout from './BriefAbout.vue'
export default {
    components:{
        BriefAbout
    }
}
</script>

<style scoped>
    #serv_descr{
        min-height: 200px;
        background-image: url('/imgs/libbg.png');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }
</style>
<template>
    <div id="serv_descr" class="">
        <div class="mx-auto max-w-6xl pt-5">
            <h1 class="text-3xl text-green-600 font-bold">Featured Programms</h1>
            <hr class="w-20 h-1 bg-green-600">
        </div>
        <div class="container max-w-6xl lg:px-0 py-4 mx-auto grid grid-cols-1 lg:grid-cols-3 gap-0">
            <div class="bg-white mx-4 xl:mx-0 my-2 rounded-lg shadow-lg">
                <div class="py-3">
                    <div class="py-4 text-center uppercase" data-aos="fade-up">
                        <div class="inline-flex gap-3 md:right-0 md:mt-5">
                            <img src="/imgs/govlogo.jpg" alt="" class="h-12">
                            <img src="/imgs/inoimo.jpg" alt="" class="h-12">
                            <img src="/imgs/cielogo.png" alt="" class="h-12">
                        </div>
                        <div class="px-6">
                            <h2 class="font-bold text-2xl mt-2 uppercase">
                                Imo youth empowerment scheme
                            </h2>
                            <p class="text-sm capitalize my-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, quibusdam.
                            </p>
                            <div class="mt-8">
                                <a href="#" class="font-weight-bolder bg-gradient-to-t from-red-800 to-red-600 py-2 rounded-lg text-white px-6 center w-full">join programm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-3 md:px-5">
                <div class="py-1 mx-4 md:mx-0">
                    <div class="bg-white border rounded shadow-lg h-full p-4 grid grid-cols-6 gap-4" data-aos="zoom-in-up">
                        <div class="text-right font-bold text-green-600">
                            <font-awesome-icon icon="bullhorn" size="2x" class="mt-3" />
                        </div>
                        <div class="col-span-5">
                            <h2 class="mb-3 font-bold text-green-600 text-2xl">Pitch to Hope</h2>
                            <p class="text-sm">
                                Imo State University offers limited need and merit based scholarship and financial aids. 
                            </p>
                            <div class="pt-4 pb-2 uppercase">
                                <a href="#" class="font-weight-bolder bg-gradient-to-t from-red-800 to-red-600 py-2 rounded-lg text-white px-6 center w-full">participate</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-1 mx-4 md:mx-0">
                    <div class="bg-white border rounded shadow-lg h-full p-4 grid grid-cols-6 gap-4" data-aos="zoom-in-up">
                        <div class="text-right font-bold text-green-600">
                            <font-awesome-icon icon="tools" size="2x" class="mt-3" />
                        </div>
                        <div class="col-span-5">
                            <h2 class="mb-3 font-bold text-green-600 text-2xl">Skillup Imo</h2>
                            <p class="text-sm">
                                IMSU Campus Life is the official Imo State University, Owerri welfare and entertainment 
                            </p>
                            <div class="pt-4 pb-2 uppercase">
                                <a href="#" class="font-weight-bolder bg-gradient-to-t from-red-800 to-red-600 py-2 rounded-lg text-white px-6 center w-full">sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-1 mx-4 md:mx-0">
                    <div class="bg-white border rounded shadow-lg h-full p-4 grid grid-cols-6 gap-4" data-aos="zoom-in-up">
                        <div class="text-right font-bold text-green-600">
                            <font-awesome-icon icon="store-alt" size="2x" class="mt-3" />
                        </div>
                        <div class="col-span-5">
                            <h2 class="mb-3 font-bold text-green-600 text-2xl"> Startup Imo</h2>
                            <p class="text-sm">
                                Request for your transcript. Login to view shipment progress. 
                            </p>
                            <div class="pt-4 pb-2 uppercase">
                                <a href="#" class="font-weight-bolder bg-gradient-to-t from-red-800 to-red-600 py-2 rounded-lg text-white px-6 center w-full">register</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-1 mx-4 md:mx-0">
                    <div class="bg-white border rounded shadow-lg h-full p-4 grid grid-cols-6 gap-4" data-aos="zoom-in-up">
                        <div class="text-right font-bold text-green-600">
                            <font-awesome-icon icon="seedling" size="2x" class="mt-3" />
                        </div>
                        <div class="col-span-5">
                            <h2 class="mb-3 font-bold text-green-600 text-2xl">Imo Demo Day</h2>
                            <p class="text-sm">
                                Through research and innovation, IMSU aims to become a world-class ...  
                            </p>
                            <div class="pt-4 pb-2 uppercase">
                                <a href="#" class="font-weight-bolder bg-gradient-to-t from-red-800 to-red-600 py-2 rounded-lg text-white px-6 center w-full">join</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import BriefAbout from './BriefAbout.vue'
import $ from 'jquery';
import 'slick-carousel/slick/slick';

$(document).ready(function(){
    $('.autoplay').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 30000,
    });
});

export default {
    components:{
        BriefAbout
    }
}
</script>

<style>
    .slick-prev, .slick-next{
        display: none !important;
    }
</style>

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
<template>
    <div id="serv_descr" class="">
        <div class="container max-w-6xl py-4  mx-auto grid grid-cols-1 lg:grid-cols-3 gap-4">
            <div class="">
                <div class="py-3">
                    <div class="py-4 text-center lg:text-right uppercase" data-aos="fade-up">
                        <div class="inline-flex gap-3 md:right-0 md:mt-5">
                            <img src="/imgs/imoyes.png" alt="" class="h-12">
                            <img src="/imgs/cielogo.png" alt="" class="h-12">
                        </div>
                        <h2 class="font-bold text-2xl uppercase">
                            Imo youth empowerment scheme
                        </h2>
                        <a href="#" class="lg:inline-block mt-8 font-weight-bolder transition-all delay-100 bg-gradient-to-t from-red-800 to-red-600 hidden py-2 rounded-lg text-white px-8 center">
                            View more
                        </a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex pb-5 lg:hidden justify-center">
            <a href="#" class="font-weight-bolder bg-gradient-to-t from-red-800 to-red-600 inline-block py-2 rounded-lg text-white px-8 center">
                View more
            </a> 
        </div>

        <!-- Slick Example -->
        <!-- <div class="my-5">
            <div class="autoplay">
                <div>your content</div>
                <div>your content</div>
                <div>your content</div>
                <div>your content</div>
                <div>your content</div>
                <div>your content</div>
            </div>
        </div> -->
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
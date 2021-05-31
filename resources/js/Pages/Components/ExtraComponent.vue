<template>
    <div id="extra-component" class="bg-green-600">
        <div class="mx-auto max-w-6xl pt-5">
            <h1 class="text-3xl text-white font-bold">Featured Ventures</h1>
            <hr class="w-20 h-1 bg-white">
        </div>
        <div class="px-6 py-10 max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 text-white" data-aos="zoom-in">
            <div id="made-for-me" class="cursor-pointer">
                <div class="py-16 h-full w-full opacity-0 hover:opacity-100 transition-all delay-100" style="background-color:rgba(0,0,0,0.4)">
                    <h2 class="text-3xl text-center font-bold mx-auto my-auto">
                        Made for Me 
                    </h2>
                </div>
            </div>
            <div id="tradefair" class="cursor-pointer">
                <div class="py-16 h-full w-full opacity-0 hover:opacity-100 transition-all delay-100" style="background-color:rgba(0,0,0,0.4)">
                    <h2 class="text-3xl text-center font-bold mx-auto my-auto">
                        Tradefair Today 
                    </h2>
                </div>
            </div>
            <div id="playing" class="cursor-pointer">
                <div class="py-16 h-full w-full opacity-0 hover:opacity-100 transition-all delay-100" style="background-color:rgba(0,0,0,0.4)">
                    <h2 class="text-3xl text-center font-bold mx-auto my-auto">
                        Playing & Learning
                    </h2>
                </div>
            </div>
            <div id="farm" class="cursor-pointer">
                <div class="py-16 h-full w-full opacity-0 hover:opacity-100 transition-all delay-100" style="background-color:rgba(0,0,0,0.4)">
                    <h2 class="text-3xl text-center font-bold mx-auto my-auto">
                        Farm Better
                    </h2>
                </div>
            </div>
        </div>
         <div id="aHref" class="mb-12">
            <a id="aHre" href="" class="py-2 px-3 my-1 mt-1 bg-white rounded-lg w-28 text-center text-black-700 font-bold shadow hover:text-white hover:bg-red-700 hover:shadow-lg">More Ventures</a>
        </div>

        <!-- Partiners and Collaborators -->
        <div id="serv_desc" class="bg-gradient-to-b from-green-500 to-green-600">
            <div class="mx-auto max-w-6xl pt-5">
                <h1 class="text-3xl text-white font-bold">Partners & Collaborators</h1>
                <hr class="w-20 h-1 bg-white">
            </div>
            <div class="px-6 py-10 max-w-6xl mx-auto aligns-items-center grid grid-cols-1 lg:grid-cols-8 gap-3 text-white" data-aos="zoom-in">
                <div class="imgDiv" data-aos="slide-up">
                    <div class="w-28 h-28 flex">
                        <img src="/imgs/cielogo.png" alt="parcel" class="min-w-full">
                    </div>
                </div>
                <div class="imgDiv" data-aos="slide-up">
                    <div class="w-28 h-28 flex">
                        <img src="/imgs/cielogo.png" alt="parcel" class="min-w-full">
                    </div>
                </div>
                <div class="imgDiv" data-aos="slide-up">
                    <div class="w-28 h-28 flex">
                        <img src="/imgs/cielogo.png" alt="parcel" class="min-w-full">
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Segment -->
        <div class="w-full bg-gray-100">
            <div class="mx-auto max-w-6xl py-10">
                <h1 class="text-3xl text-green-800 font-bold">News & Upcoming Events</h1>
                <hr class="w-20 h-1 bg-green-800">
            </div>
            <div class="pb-12 px-6 max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-5">
                <!-- Cards -->
                <div data-aos="slide-up">
                    <div class="bg-white shadow w-full">
                        <div class="w-full h-64 bg-green-800 flex">
                            <img src="/imgs/img1.jpg" alt="parcel" class="min-w-full">
                        </div>
                        <div class="py-3 px-6">
                            <h2 class="text-xl text-center font-bold text-green-800 my-2">
                                NOTICE OF RESUMPTION, 2021 ACADEMIC SESSION
                            </h2>
                            <p class="text-gray-700 text-base font-semibold my-3">
                                On the 14th of February 2020, Youth wing of Southern Nigeria presented an award of excellence to the Vice Chancellor ...
                            </p>
                            <a href="#"> <i>Read more...</i> </a>
                        </div>
                    </div>
                </div>
                <div data-aos="slide-up">
                    <div class="bg-white shadow w-full">
                        <div class="w-full h-64 bg-green-800 flex">
                            <img src="/imgs/news1.jpg" alt="parcel" class="min-w-full">
                        </div>
                        <div class="py-3 px-6">
                            <h2 class="text-xl text-center font-bold text-green-800 my-2">
                                AWARD OF EXCELLENCE BY CAN
                            </h2>
                            <p class="text-gray-700 text-base font-semibold my-3">
                                On the 14th of February 2020, Youth wing of Southern Nigeria presented an award of excellence to the Vice Chancellor ...
                            </p>
                            <a href="#"> <i>Read more...</i> </a>
                        </div>
                    </div>
                </div>
                <div data-aos="slide-up">
                    <div class="bg-white shadow w-full">
                        <div class="w-full h-64 bg-green-800 flex">
                            <img src="/imgs/news2.jpg" alt="parcel" class="min-w-full">
                        </div>
                        <div class="py-3 px-6">
                            <h2 class="text-xl text-center font-bold text-green-800 my-2">
                                IMSU 2020/2021 PROSPECTIVE STUDENTS 
                            </h2>
                            <p class="text-gray-700 text-base font-semibold my-3">
                                On the 14th of February 2020, Youth wing of Southern Nigeria presented an award of excellence to the Vice Chancellor ... 
                            </p>
                            <a href="#"> <i>Read more...</i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ProgressBar from './ProgressBar.vue'
export default {
    components:{
        ProgressBar
    }
}
</script>

<style scoped>
    #extra-component{
        /* min-height: 150px; */
        background-image: url('/imgs/libbg.png');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }
    #playing{
        background-image: url('/imgs/news1.jpg');
        background-position: center center;
        /* opacity: 3; */
    }
    #made-for-me{
        background-image: url('/imgs/workers1.jpg');
        background-position: center center;
    }
    #tradefair{
        background-image: url('/imgs/trade.jpg');
        background-position: center center;
    }
    #farm{
        background-image: url('/imgs/farm.jpg');
        background-position: center center;
    }
    #farm{
        background-image: url('/imgs/farm.jpg');
        background-position: center center;
    }
    .imgScale:hover{
    transform: scale(1.1);
    }
    #aHref{
        justify-content: center;
        text-align: center;
    }
    #serv_descr{
        min-height: 200px;
        /* background-image: url('/imgs/libbg.png');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat; */
    }
</style>
<template>
    <div id="extra-component" class="bg-green-800">
        <div class="mx-auto max-w-6xl grid grid-cols-1 gap-2 text-white" data-aos="zoom-in">
            <div class="lg:py-32 py-12 px-2 sm:text-center text-shadow" data-aos="zoom-in">
                <h4 class="text-xl font-semibold my-2 uppercase">
                    Imo State University
                </h4>
                <hr class="border-lg border-green-700 w-1/4">

                <h1 class="text-3xl font-bold my-2">
                    ERP Portal brings all your student activities Online. 
                </h1>
            </div>
        </div>

        <!-- Card Segment -->
        <div class="w-full bg-gray-100">
            <div class="py-12 px-6 max-w-6xl mx-auto" data-aos="fade-in">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                    <div class="lg:col-span-2 lg:text-right md:text-center text-left">
                        <h2 class="text-green-800 text-3xl font-bold">
                            Studying at Imo State University 
                        </h2>
                        <p class="text-gray-700 text-base font-semibold">
                             Our primarily goals focuses on continuous provision of quality learning environment and producing highly intellectual graduates with reputable character.
                        </p>
                    </div>
                    <div>
                        <div class="bg-white shadow w-full py-3 px-6">
                            <p>
                                Interested in finding out more? Click on all on the button below to contact us.
                            </p>
                            <a :href="'#'" class="bg-green-800 py-1 px-4 mt-2 text-white inline-block" role="button">
                                <font-awesome-icon :icon="['fas', 'phone-alt']" /> Contact Us
                            </a>
                        </div>
                    </div>
                </div>
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
        min-height: 300px;
        background-image: url('/imgs/slide_two.png');
        background-attachment: fixed;
    }
</style>
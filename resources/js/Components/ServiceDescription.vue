<template>
    <div id="serv_descr" class="">
        <brief-about></brief-about>
        <div class="container max-w-6xl py-8 my-6 mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Grid Colunm 3 -->
            <div class="py-3">
                <div class="py-4 px-6 text-center md:text-right uppercase" data-aos="fade-up">
                    <h4 class="font-bold text-xl">Welcome to</h4>
                    <h2 class="font-bold text-2xl md:text-3xl uppercase">
                         Imo State University
                    </h2>
                </div>
            </div>
            <!-- Grid Colunm 3 -->
            <div class="py-1 mx-4 md:mx-0">
                <div class="bg-white border rounded shadow-lg p-4 grid grid-cols-6 gap-4" data-aos="zoom-in-up">
                    <div class="text-right font-bold text-green-700">
                        <font-awesome-icon icon="graduation-cap" size="2x" class="mt-3" />
                    </div>
                    <div class="col-span-5">
                        <h2 class="mb-3 font-bold text-green-700 text-2xl">Scholarship and Financial Aids</h2>
                        <p class="text-sm">
                            Imo State University offers limited need and merit based scholarship and financial aids. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="py-1 mx-4 md:mx-0">
                <div class="bg-white border rounded shadow-lg p-4 grid grid-cols-6 gap-4" data-aos="zoom-in-up">
                    <div class="text-right font-bold text-green-700">
                        <font-awesome-icon icon="university" size="2x" class="mt-3" />
                    </div>
                    <div class="col-span-5">
                        <h2 class="mb-3 font-bold text-green-700 text-2xl">Campus Life</h2>
                        <p class="text-sm">
                            IMSU Campus Life is the official Imo State University, Owerri welfare and entertainment 
                        </p>
                    </div>
                </div>
            </div>
            <div class="py-1 mx-4 md:mx-0">
                <div class="bg-white border rounded shadow-lg p-4 grid grid-cols-6 gap-4" data-aos="zoom-in-up">
                    <div class="text-right font-bold text-green-700">
                        <font-awesome-icon icon="user-graduate" size="2x" class="mt-3" />
                    </div>
                    <div class="col-span-5">
                        <h2 class="mb-3 font-bold text-green-700 text-2xl"> Alumni</h2>
                        <p class="text-sm">
                            Request for your transcript. Login to view shipment progress. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="py-1 mx-4 md:mx-0">
                <div class="bg-white border rounded shadow-lg p-4 grid grid-cols-6 gap-4" data-aos="zoom-in-up">
                    <div class="text-right font-bold text-green-700">
                        <font-awesome-icon icon="satellite-dish" size="2x" class="mt-3" />
                    </div>
                    <div class="col-span-5">
                        <h2 class="mb-3 font-bold text-green-700 text-2xl">Research and Innovation</h2>
                        <p class="text-sm">
                            Through research and innovation, IMSU aims to become a world-class ...  
                        </p>
                    </div>
                </div>
            </div>
            <div class="mx-4 md:mx-0">
                <div class="bg-white border rounded shadow-lg grid grid-cols-3 gap-0" data-aos="zoom-in-up">
                    <div class="text-right font-bold text-green-700">
                        <img src="/imgs/vcpic.jpg" alt="" class="max-w-full">
                    </div>
                    <div class="col-span-2 p-2">
                        <h2 class="mb-3 font-bold text-green-700 text-xl">PROF. Peter Achunike Akah</h2>
                        <p class="text-sm">
                            Ag. Vice Chancellor 
                        </p>
                    </div>
                </div>
            </div>
            
            
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
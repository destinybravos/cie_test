<template>
    <div class="min-h-screen bg-blue-500" id="home-banner">
        <div class="w-full bg-green-900 bg-opacity-50" style="min-height:100vh;">
            <page-header />

            <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-7 gap-4 mx-auto max-w-6xl px-4 md:px-2">
                <div class="lg:col-span-4" data-aos="zoom-in">
                    <div class="rounded text-white opacity py-12 p-2 md:px-1 flex items-center">
                        <div>
                            <span class="block text-3xl font-bold uppercase">
                                Discover the Passion and the Possibilities of Imo State University, Owerri.
                            </span>
                            <hr class="w-1/4 border-2 border-blue-700">
                            <p class="mt-4 mb-3 text-xl md:w-5/6">
                                IMSU is dedicated to producing knowledgeable and skilled individuals with the potentials and desire to 
                                provide tangible solutions to the needs of the world…
                            </p>
                            <p class="py-5 block font-semibold">
                                <a :href="'#'" class="inline-block py-2 px-5 hover:bg-blue-800 hover:text-white px-4 bg-white border border-blue-800 text-blue-800 rounded shadow">
                                    <font-awesome-icon :icon="['fas', 'book-reader']" /> Read more
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3 hidden md:block" data-aos="slide-up">
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import PageHeader from './PageHeader.vue'
export default {
  components: { PageHeader },

}
</script>

<style scoped>
    #home-banner{
        background-image: url('/imgs/imsu_banner.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<template>
    <div class="bg-green-500" id="home-banner">
        <!-- <div class="w-full bg-green-800 bg-opacity-50">
            <page-header />

            <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-7 gap-4 mx-auto max-w-6xl px-8 md:px-2">
                <div class="lg:col-span-4" data-aos="zoom-in">
                    <div class="rounded text-white opacity py-12 p-2 md:px-1 items-center">
                        <slot name="page_title"></slot>
                    </div>
                </div>
            </div>
        </div> -->
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
        /* background-image: url('/imgs/imsu_banner.jpg'); */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<template>
    <div class="bg-blue-500" id="home-banner">
        <page-header />

        <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-7 gap-4 mx-auto max-w-6xl px-8 md:px-2">
            <div class="lg:col-span-4" data-aos="zoom-in">
                <div class="rounded text-white opacity py-12 p-2 md:px-1 items-center">
                    <slot name="page_title"></slot>
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
        background-image: url('/imgs/train_bckg.jpg');
        background-size: cover;
        background-position: center top;
        background-repeat: no-repeat;
    }
</style>
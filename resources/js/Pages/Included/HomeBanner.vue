<template>
    <div class="bg-blue-500" id="home-banner">
        <div class="w-full bg-green-900 bg-opacity-50">
            <page-header />

            <home-slider></home-slider>
        </div>
    </div>
</template>

<script>
import HomeSlider from '../../Components/HomeSlider.vue'
import PageHeader from './PageHeader.vue'
export default {
  components: { PageHeader, HomeSlider },

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
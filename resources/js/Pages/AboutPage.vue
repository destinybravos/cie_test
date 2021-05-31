<template>
    <web-layout>
        <template #banner>
            <page-banner>
                <template #page_title>
                    <span class="block mt-3 mb-0 text-xl">
                        <font-awesome-icon :icon="['fas' , 'info-circle']" /> About Us
                    </span>
                    <span class="block text-3xl font-bold uppercase">
                        IMO YES
                    </span>
                    <hr class="w-1/6 border-2 border-white">
                </template>
            </page-banner>
        </template>
        <about-introduction></about-introduction>
        <what-we-do></what-we-do>
        <!-- <service-description></service-description> -->
        <about-community></about-community>
        <!-- <community></community> -->
    </web-layout>
</template>

<script>
import WebLayout from '../Layouts/WebLayout.vue'
import PageBanner from '../Pages/Included/PageBanner.vue' 
import AboutIntroduction from '../Components/AboutIntroduction.vue'
import WhatWeDo from '../Components/WhatWeDo.vue'
import AboutCommunity from '../Components/AboutCommunity.vue'
import ServiceDescription from '../Components/ServiceDescription.vue'
import Community from '../Components/Community.vue'
export default {
    components:{WebLayout, PageBanner, AboutIntroduction, WhatWeDo, AboutCommunity, ServiceDescription, Community}
}
</script>
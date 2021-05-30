<template>
    <web-layout>
        <template #banner>
            <home-banner></home-banner>
        </template>
        <brief-about></brief-about>
        <community></community>
        <extra-component></extra-component>
        <other-component></other-component>
    </web-layout>
</template>

<script>
import NewsCards from '../Components/NewsCards.vue'
import HomeBanner from './Included/HomeBanner'
import WebLayout from '../Layouts/WebLayout.vue'
import BriefAbout from '../Components/BriefAbout.vue'
import Community from '../Components/Community'
import ExtraComponent from './Components/ExtraComponent.vue'
import OtherComponent from './Components/OtherComponent.vue'

export default {
    components: {
        WebLayout, HomeBanner, NewsCards, BriefAbout, Community, ExtraComponent,
        OtherComponent 
    }
}

</script>

<style>

</style>
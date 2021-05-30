<template>
    <web-layout>
        <template #banner>
            <home-banner></home-banner>
        </template>
        <service-description></service-description>
        <extra-component></extra-component>
        <other-component></other-component>
    </web-layout>
</template>

<script>
import NewsCards from '../Components/NewsCards.vue'
import HomeBanner from './Included/HomeBanner'
import WebLayout from '../Layouts/WebLayout.vue'
import ServiceDescription from '../Components/ServiceDescription.vue'
import ExtraComponent from './Components/ExtraComponent.vue'
import OtherComponent from './Components/OtherComponent.vue'
export default {
    components: {
        WebLayout, HomeBanner, NewsCards, ServiceDescription, ExtraComponent,
        OtherComponent 
    }
}

</script>

<style>

</style>
<template>
    <div class="min-h-screen bg-blue-100">
        <slot name="banner"></slot>

        <!-- Main Slot -->
        <slot></slot>

        <!-- Site Footer -->
        <div class="bg-gray-900 text-gray-300">
            <footer-component></footer-component>
        </div>
    </div>
</template>

<script>
import FooterComponent from "../Pages/Included/FooterComponent.vue"

export default {
    components: { FooterComponent },
}
</script>

<style>

</style>
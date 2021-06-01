<template>
    <app-layout>
        <template #side style="width:200px; bg-red-200">
            <nav-list />
        </template>

        <div class="py-6 ml-0 lg:ml-52">
            <div class="mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Cover Component -->
                <div class="md:col-span-3">
                    <cover />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import StoryComponent from '../../Components/StoryComponent.vue'
    import SideProfileCard from '../../Components/SideProfileCard.vue'
    import NavList from '../../Components/NavList.vue'
    import Cover from '../../Components/Cover.vue'

    export default {
        components: {
            AppLayout,
            StoryComponent,
            SideProfileCard,
            NavList, 
            Cover         
        },
        data(){
            return {
                showPrograms:false
            }
        }
    }
</script>
<style scoped>

</style>

<template>
    <app-layout>
        <template #side style="width:200px; bg-red-200">
            <nav-list />
        </template>

        <div class="py-6">
            <div class="mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Feeds Colomns -->
                <div class="md:col-span-2">
                    <programs-alert />
                    <story-component />
                    <share-feed />
                </div>

                <!-- Side Columns -->
                <div>
                    <side-profile-card />
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
    import ShareFeed from '../../Components/ShareFeed.vue'
    import ProgramsAlert from '../../Components/ProgramsAlert.vue'

    export default {
        components: {
            AppLayout,
            StoryComponent,
            SideProfileCard,
            NavList,
            ShareFeed,
            ProgramsAlert,
        },
        data(){
            return {
            
            }
        }
    }
</script>
<style scoped>

</style>

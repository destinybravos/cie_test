<template>
    <app-layout>
        <template #side style="width:200px; bg-red-200">
            <nav-list />
        </template>

        <div class="py-6">
            <div class="mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Cover Component -->
                <div class="md:col-span-3">
                    <cover />

                    <!-- Inner Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-5 mt-12 px-3 md:px-0">
                        <!-- Small Main -->
                        <div class="col-span-2">
                            <share-feed />
                        </div>

                        <!-- Right Side -->
                        <div class="py-4">
                            <!-- Other Component will come here -->
                            <div class="h-36 rounded shadow bg-white mx-auto">

                            </div>
                        </div>
                    </div>
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
    import ShareFeed from '../../Components/ShareFeed.vue'

    export default {
        components: {
            AppLayout,
            StoryComponent,
            SideProfileCard,
            NavList, 
            Cover,
            ShareFeed,        
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

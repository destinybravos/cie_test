<template>
    <app-layout>
        <template #side style="width:200px; bg-red-200">
            <nav-list />
        </template>

        <div class="py-6 ml-0 lg:ml-52">
            <div class="mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <!-- First Columns -->
                        <div class="bg-white rounded-t">
                            <!-- Top Card -->
                            <div class="bg-green-500 bg-center bg-cover rounded-t" 
                                style="background-image:url('/imgs/setting-layer.svg'); min-height:100px;">

                            </div>
                            <!-- Form Section -->
                            <form>
                                <section class="my-4">
                                    My Form Here
                                </section>
                            </form>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="">
                        <!-- Other Component will come here -->
                        <div class="h-36 rounded shadow bg-white mx-auto">

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

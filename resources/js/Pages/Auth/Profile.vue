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
                            
                            <!-- Search for Posts -->

                            <div class="rounded py-3 px-2 my-2 shadow bg-white mx-auto">
                                <label>Search for posts</label>
                                <div class="border-2 relative bg-white shadow-sm w-full flex flex-row my-1 py-0 rounded-lg">
                                    <input v-model="exp" required type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-3 rounded-lg w-full bg-gray-50 py-2" placeholder="Years of Experience">
                                </div>
                            </div>

                            <!-- Info  -->
                            <div class="rounded py-3 my-2 shadow bg-white mx-auto">
                                <div class="first-sec border-b border-gray-500 py-3 px-3">
                                    <span class="py-1 px-1 bg-red-800 rounded-full text-xs mr-1">
                                        <font-awesome-icon :icon="['fas', 'info-circle']" class="text-white" />
                                    </span>
                                    <span class="font-bold">Info</span>
                                </div>
                                <div class="middle-sec py-2 px-3">
                                    <span class="py-1 px-1 text-xs mr-1">
                                        <font-awesome-icon :icon="['fas', 'eye']" class="text-gray-700" />
                                    </span>
                                    <span class="text-green-400 text-xs">Online</span>
                                </div>
                                <div class="middle-sec py-1 mx-3 border-b border-gray-500">
                                    <span class="py-1 px-1 text-xs mr-1">
                                        <font-awesome-icon :icon="['fas', 'book']" class="text-gray-700" />
                                    </span>
                                    <span class="text-gray-500 text-xs">1 posts</span>
                                </div>
                                <div class="middle-sec py-1 px-3">
                                    <span class="px-1 text-xs mr-1">
                                        <font-awesome-icon :icon="['far', 'user']" class="text-gray-700" />
                                    </span>
                                    <span class="text-gray-500 text-sm">Male</span>
                                </div>
                            </div>

                            <!-- Items -->
                            <div class="rounded py-3 my-2 shadow bg-white mx-auto">
                                <div class="first-sec px-3 text-sm">
                                    <span class="py-1 px-1 bg-red-800 rounded-full text-xs mr-1">
                                        <font-awesome-icon :icon="['far', 'images']" class="text-white" />
                                    </span>
                                    <span class="font-bold">Albums</span> 0
                                </div>
                            </div>

                            <div class="rounded py-3 my-2 shadow bg-white mx-auto">
                                <div class="first-sec px-3 text-sm">
                                    <span class="py-1 px-1 bg-red-800 rounded-full text-xs mr-1">
                                        <font-awesome-icon :icon="['fas', 'user-plus']" class="text-white" />
                                    </span>
                                    <span class="font-bold">Following</span> 0
                                </div>
                            </div>

                            <div class="rounded py-3 my-2 shadow bg-white mx-auto">
                                <div class="first-sec px-3 text-sm">
                                    <span class="py-1 px-1 bg-red-800 rounded-full text-xs mr-1">
                                        <font-awesome-icon :icon="['fas', 'users']" class="text-white" />
                                    </span>
                                    <span class="font-bold">Followers</span> 0
                                </div>
                            </div>

                            <div class="rounded py-3 my-2 shadow bg-white mx-auto">
                                <div class="first-sec px-3 text-sm">
                                    <span class="py-1 px-1 bg-red-800 rounded-full text-xs mr-1">
                                        <font-awesome-icon :icon="['fas', 'thumbs-up']" class="text-white" />
                                    </span>
                                    <span class="font-bold">Like</span> 0
                                </div>
                            </div>
                            <div class="rounded py-3 my-2 shadow bg-white mx-auto">
                                <div class="first-sec px-3 text-sm">
                                    <span class="py-1 px-1 bg-red-800 rounded-full text-xs mr-1">
                                        <font-awesome-icon :icon="['fas', 'users']" class="text-white" />
                                    </span>
                                    <span class="font-bold">Groups</span> 0
                                </div>
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
import Label from '../../Jetstream/Label.vue'

    export default {
        components: {
            AppLayout,
            StoryComponent,
            SideProfileCard,
            NavList, 
            Cover,
            ShareFeed,        
                Label
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

<template>
    <div class="">
        <form action="">
            <div v-if="show" @click="show=false" class="fixed transition-all duration-500 h-screen w-screen top-0 right-0 z-30" style="background:rgba(0,0,0,0.6)"></div>
            <div class="h-36 bg-white py-2 px-3 rounded-lg shadow">
                <h2 class="font-bold">
                    Stories
                </h2>
                <div class="my-3">
                    <div class="story-img-div relative h-24 w-20">
                        <img class="h-full rounded object-cover inline-block align-top bg-blue-200" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.name" />
                    </div>
                </div>
            </div>
            <div class="bg-white relative mt-3 rounded-md shadow-lg">
                <div @click="show=true" class="w-full z-50 relative">
                    <div class="bg-white rounded-t-md cursor-pointer px-3 py-2 relative">
                    <span class="w-full">
                            <img class="rounded-full h-8 shadow-lg inline-block align-top bg-purple-200" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.name" />
                            <textarea name="" id="" class="overflow-y-hidden focus:outline-none mt-2 h-6 max-h-10 resize-none text-xs" style="width:80%" placeholder="What's going on? #Hashing.. @Mention.. link.."></textarea>
                        </span>
                        <span class="px-2 pt-2 right-4 absolute">
                            <font-awesome-icon v-if="!show" :icon="['fas', 'camera']"/> 
                            <font-awesome-icon :icon="['far', 'newspaper']"/> 
                        </span>
                    </div>
                    <div v-if="show" class="bg-white shadow-md rounded-b-md cursor-pointer py-2">
                        <div class="flex bg-white pl-6 py-4">
                            <font-awesome-icon :icon="['far', 'image']" class="flex-grow text-md text-blue-400"/> 
                            <font-awesome-icon :icon="['fas', 'video']" class="flex-grow text-md text-green-600"/> 
                            <font-awesome-icon :icon="['fas', 'signature']" class="flex-grow text-md text-gray-400"/> 
                            <font-awesome-icon :icon="['fas', 'microphone']" class="flex-grow text-md text-red-500"/> 
                            <font-awesome-icon :icon="['fas', 'smile']" class="flex-grow text-md text-yellow-400"/> 
                            <font-awesome-icon :icon="['fas', 'file']" class="flex-grow text-md text-blue-400"/> 
                            <font-awesome-icon :icon="['fas', 'shopping-cart']" class="flex-grow text-md text-yellow-700"/> 
                            <font-awesome-icon :icon="['fas', 'poll']" class="flex-grow text-md text-blue-600"/> 
                            <font-awesome-icon :icon="['fas', 'map-marker-alt']" class="flex-grow text-md text-red-500"/> 
                            <font-awesome-icon :icon="['fas', 'music']" class="flex-grow text-md text-blue-500"/> 
                        </div>
                        <div class=" border-t rounded-b-lg bg-white px-4 py-3">
                            <button type="submit" class="right-2 absolute px-6 py-1 text-sm rounded-sm bg-red-700 text-white">Share</button>
                            <span class="px-3 border text-xs border-gray-300 rounded-full py-1 bg-gray-200">
                                <font-awesome-icon :icon="['fas', 'globe-americas']"/>
                                <select name="" id="">
                                    <option value="" class="capitalize">Only me</option>
                                    <option value="" class="capitalize" selected>Everyone</option>
                                    <option value="" class="capitalize">people i follow</option>
                                    <option value="" class="capitalize">people following me</option>
                                    <option value="" class="capitalize">anonymous</option>
                                </select>
                                <input type="text" value="Everyone" class="focus:outline-none w-16 border-0 bg-transparent">
                                <font-awesome-icon :icon="['fas', 'chevron-down']"/> 
                            </span>
                            <span class="text-xs text-gray-400 px-2">
                                654
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-3 relative">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti eius placeat nemo, sit quis in blanditiis sunt tempore beatae facere corrupti a accusamus enim doloremque. Dignissimos a id ea labore.
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data(){
        return{
            show:true,
        }
    },methods:{
        something(){

        }
    }
}
</script>

<style>

</style>
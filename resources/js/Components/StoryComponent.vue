<template>
    <div class="">
        <div v-if="show" @click="show=false" class="absolute transition-all duration-500 h-screen w-screen top-0 right-0 z-30" style="background:rgba(0,0,0,0.6)"></div>
        <div class="h-36 bg-white py-2 px-3 rounded-lg shadow">
            <h2 class="font-bold">
                Stories
            </h2>
            <div class="my-3">
                <div class="story-img-div relative h-24 w-20">
                    <img class="h-full rounded object-cover inline-block align-top bg-blue-200" :src="'/imgs/' + $page.user.profile_photo_path" :alt="$page.user.name" />
                </div>
            </div>
        </div>
        <div class="bg-white relative mt-3 rounded-md shadow-md">
            <div @click="show=true" class="w-full z-50 relative">
                <div class="bg-white shadow-md cursor-pointer px-3 py-2">
                   <span class="w-full">
                        <img class="rounded-full h-8 shadow-lg inline-block align-top px-1 pt-2 bg-purple-200" :src="'/imgs/' + $page.user.profile_photo_path" :alt="$page.user.name" />
                        <span v-if="!show" class="text-xs text-gray-400 w-4/5">What's going on? #Hashing.. @Mention.. link..</span>
                        <textarea v-if="show" name="" id="" class="overflow-y-hidden resize-none" style="width:80%" placeholder="What's going on? #Hashing.. @Mention.. link.."></textarea>
                    </span>
                    <span class="px-2 pt-2 right-4">
                        <font-awesome-icon v-if="!show" :icon="['fas', 'camera']"/> 
                        <font-awesome-icon :icon="['far', 'newspaper']"/> 
                    </span>
                </div>
                <div v-if="show" class="bg-white shadow-md cursor-pointer px-3 py-2">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio nulla quis repellat quaerat odio quam harum architecto, dolorem reprehenderit amet voluptatibus beatae qui molestias illum aspernatur facilis atque ullam reiciendis!
                </div>
            </div>
        </div>
            <div class="py-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus inventore temporibus blanditiis rem at repellat magnam harum nesciunt unde placeat reiciendis dicta, ab reprehenderit maiores consectetur veritatis totam cum consequatur!
            </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            show:false,
        }
    },methods:{
        something(){

        }
    }
}
</script>

<style>

</style>
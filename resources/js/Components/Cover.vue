<template>
    <div class="h-64 bg-gray-300 relative">
        <img class="h-full w-full rounded object-cover inline-block align-top bg-blue-200" :src="`/storage/images/covers/${$page.user.cover_photo}`" :alt="$page.user.name" />
        <div class="absolute lg:bottom-7 bottom-8 lg:left-2 left-0">
            <div class="grid grid-cols-3 gaps-1">
                <div class=" text-right">
                    <img class="rounded-full lg:h-20 h-16 shadow-lg inline-block bg-blue-200" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.username" />
                </div>
                <div class="col-span-2 ">
                    <span class="my-auto pl-2 text-white text-2xl font-bold">{{ `${$page.user.firstname} ${$page.user.lastname}` }}</span>
                    <div class="grid grid-cols-2 gap-2 text-white text-center font-bold">
                        <button class="bg-gray-400 bg-opacity-75 ml-3 text-sm lg:px-2 px-3 lg:py-1 py-2">
                            <font-awesome-icon :icon="['fas', 'pencil-alt']" class="mr-1" /> Edit
                        </button>
                        <button class="bg-gray-400 bg-opacity-75 px-3 lg:py-1 py-2">
                             <font-awesome-icon :icon="['fas', 'tasks']" class="mr-1" /> Activities
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto flex justify-center -mt-6">
            <div class="absolute justify-center  flex bg-white  z-10" style="margin: 1px auto">
                <div class="flex-grow text-center text-sm text-gray-800 cursor-pointer border-b-2 border-white hover:text-red-800 hover:border-b-2 hover:border-red-800">
                    <div class="lg:py-1 py-2 lg:px-2 px-3">
                        <span class="block">
                            <font-awesome-icon :icon="['fas', 'tasks']" class="" />
                        </span>
                        <span class="lg:block hidden">Timelines</span>
                    </div>
                </div>
                <div class="flex-grow text-center text-sm text-gray-800 cursor-pointer border-b-2 border-white hover:text-red-800 hover:border-b-2 hover:border-red-800">
                    <div class="lg:py-1 py-2 lg:px-2 px-3">
                        <span class="block">
                            <font-awesome-icon :icon="['fas', 'users']" class="" />
                        </span>
                        <span class="lg:block hidden">Groups</span>
                    </div>
                </div>
                <div class="flex-grow text-center text-sm text-gray-800 cursor-pointer border-b-2 border-white hover:text-red-800 hover:border-b-2 hover:border-red-800">
                    <div class="lg:py-1 py-2 lg:px-2 px-3">
                        <span class="block">
                            <font-awesome-icon :icon="['fas', 'thumbs-up']" class="" />
                        </span>
                        <span class="lg:block hidden">Like</span>
                    </div>
                </div>
                <div class="flex-grow text-center text-sm text-gray-800 cursor-pointer border-b-2 border-white hover:text-red-800 hover:border-b-2 hover:border-red-800">
                    <div class="lg:py-1 py-2 lg:px-2 px-3">
                        <span class="block">
                            <font-awesome-icon :icon="['fas', 'user-plus']" class="" />
                        </span>
                        <span class="lg:block hidden">Following</span>
                    </div>
                </div>
                <div class="flex-grow text-center text-sm text-gray-800 cursor-pointer border-b-2 border-white hover:text-red-800 hover:border-b-2 hover:border-red-800">
                    <div class="lg:py-1 py-2 lg:px-2 px-3">
                        <span class="block">
                            <font-awesome-icon :icon="['fas', 'users']" class="" />
                        </span>
                        <span class="lg:block hidden">Followers</span>
                    </div>
                </div>
                <div class="flex-grow text-center text-sm text-gray-800 cursor-pointer border-b-2 border-white hover:text-red-800 hover:border-b-2 hover:border-red-800">
                    <div class="lg:py-1 py-2 lg:px-2 px-3">
                        <span class="block">
                            <font-awesome-icon :icon="['fas', 'camera']" class="" />
                        </span>
                        <span class="lg:block hidden">Photos</span>
                    </div>
                </div>
                <div class="flex-grow text-center text-sm text-gray-800 cursor-pointer border-b-2 border-white hover:text-red-800 hover:border-b-2 hover:border-red-800">
                    <div class="lg:py-1 py-2 lg:px-2 px-3">
                        <span class="block">
                            <font-awesome-icon :icon="['far', 'images']" class="" />
                        </span>
                        <span class="lg:block hidden">Videos</span>
                    </div>
                </div>

            
           
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
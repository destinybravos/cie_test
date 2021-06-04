<template>
    <div>
        <div v-if="viewComment" class="text-xs">
            <!-- few comments -->
            <div class="bg-gray-100">
                <div @mouseenter="edit='flex'" @mouseleave="edit='hidden'" class="relative flex p-3 pb-1">
                    <div :class="edit" class="absolute flex gap-2 right-4 text-xs">
                        <font-awesome-icon :icon="['fas', 'pen']" class="cursor-pointer"/>
                        <font-awesome-icon :icon="['far', 'trash-alt']" class="cursor-pointer"/>
                    </div>
                    <img class="h-8 rounded-full object-cover inline-block align-top bg-blue-200" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.name" />
                    <span class="px-1 inline-flex flex-col w-full text-sm">
                        <div class=" font-bold">onyemzoro</div>
                        <!-- comment -->
                        <div class="">
                            Lorem ipsum dolor sit amet, consectetur icabo.
                        </div>
                        <div class="text-gray-400 pt-1">
                            <div class=" top-2 flex gap-2">
                                <span class="">
                                    <font-awesome-icon :icon="['fas', 'thumbs-up']" class="cursor-pointer"/>
                                    <!-- number of likes -->
                                    <span class="bottom-0 relative">2</span>
                                </span>
                                <span class="">
                                    <font-awesome-icon :icon="['far', 'comment']" class="cursor-pointer"/>
                                    <!-- number of comments -->
                                    <span class="bottom-0 relative">2</span>
                                </span>
                            </div>
                            <div v-if="!replyComments" class="pl-5">
                                <span class="flex gap-1 cursor-pointer" @click="replyComments='true'">
                                <font-awesome-icon :icon="['fas', 'reply']" class="cursor-pointer mt-1 transform rotate-180"/>
                                    <span>1</span>
                                </span>
                            </div>
                            <!-- comment's comment -->
                            <div v-if="replyComments">
                                <div class="relative text-black flex py-3 pb-1">
                                    <div :class="edit" class="absolute flex gap-2 ml-2 right-0 text-xs">
                                        <font-awesome-icon :icon="['fas', 'pen']" class="cursor-pointer"/>
                                        <font-awesome-icon :icon="['far', 'trash-alt']" class="cursor-pointer"/>
                                    </div>
                                    <img class="h-7 rounded-full object-cover inline-block align-top bg-blue-200" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.name" />
                                    <span class="px-1 inline-block text-sm">
                                        <div class=" font-bold">onyemzoro</div>
                                        <!-- comment -->
                                        <div class="">
                                            Lorem ipsum dolor sit amet, consectetur icabo.
                                        </div>
                                        <div class="text-gray-400 pt-1">
                                            <div class=" top-2 flex gap-2">
                                                <span class="">
                                                    <font-awesome-icon :icon="['fas', 'thumbs-up']" class="cursor-pointer"/>
                                                    <!-- number of likes -->
                                                    <span class="bottom-0 relative">2</span>
                                                </span>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <!-- commenting on comment -->
                            <div class="mb-2">
                                <div class="relative text-black flex py-3 pb-1 gap-2">
                                    <img class="h-7 rounded-full object-cover inline-block align-top bg-blue-200" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.name" />
                                    <div class="relative px-1 inline-block text-sm flex-grow bg-white border border-gray-300 rounded-lg">
                                        <textarea name="" id="" class="py-1 h-7 placeholder-gray-400 pl-2 focus:outline-none resize-none w-5/6" placeholder="Reply to comment"></textarea>
                                        <div class="absolute flex gap-2 top-2 right-1">
                                            <font-awesome-icon :icon="['fas', 'smile']" class="cursor-pointer flex-grow text-md text-green-600"/> 
                                            <font-awesome-icon :icon="['far', 'image']" class="cursor-pointer flex-grow text-md text-blue-400"/> 
                                            <font-awesome-icon :icon="['far', 'paper-plane']" class="cursor-pointer flex-grow text-md text-gray-400"/>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            <form>
                <div class="p-3">
                    <img class="h-8 rounded-full object-cover inline-block align-top bg-blue-200" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.name" />
                    <textarea @focus="showDown='block'" @blur="showDown='hidden'" name="" id="" class="border relative bottom-1 px-3 py-1 rounded-full border-gray-200 overflow-y-hidden focus:outline-none mt-2 h-7 max-h-10 resize-none text-xs" style="width:91%" placeholder="Write a comment and press enter"></textarea>
                </div>
                <div :class="showDown" class="relative px-4 pt-0 text-xs py-2 text-gray-500">
                    632
                    <div class="absolute right-3 flex px-3 gap-x-3 bottom-3">
                        <font-awesome-icon :icon="['fas', 'smile']" class="cursor-pointer flex-grow text-md text-green-600"/> 
                        <font-awesome-icon :icon="['far', 'image']" class="cursor-pointer flex-grow text-md text-blue-400"/> 
                        <font-awesome-icon :icon="['fas', 'microphone']" class="cursor-pointer flex-grow text-md text-red-500"/> 
                        <font-awesome-icon :icon="['far', 'paper-plane']" class="cursor-pointer flex-grow text-md text-gray-400"/> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
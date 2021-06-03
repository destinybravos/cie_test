<template>
    <div>
        <div class="relative rounded-md shadow-md bg-white mt-3">
            <div class="p-3 pb-2">
                <div class="relative">
                    <img class="h-10 rounded-full object-cover inline-block align-top bg-blue-200" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.name" />
                    <span class="px-1 inline-block text-sm">
                        <div class=" font-bold">klidf</div>
                        <div class="flex">
                            <div class="">2</div>
                            <div class="mx-2">
                                <font-awesome-icon :icon="['fas', 'globe']"/>
                            </div>
                            <div>
                                <font-awesome-icon @click="updateViwers='block'" :icon="['fas', 'caret-down']" class="cursor-pointer"/>
                                <div :class="updateViwers" class="absolute top-0 left-0">
                                    <div class="select-box inline-flex w-auto flex-col">
                                        <div @mouseleave="updateViwers='hidden'" class="option-container w-40 z-10 text-xs absolute border cursor-pointer bg-white text-gray-800">
                                            <div  @click="toggleOption='hidden'" class="option px-4 py-2 hover:bg-red-800 hover:text-white">
                                                <input value="Only me" type="radio" class="appearance-none" v-model="view_option" id="me" name="category">
                                                <label for="me">Only me</label>
                                            </div>
                                            <div  @click="toggleOption='hidden'" class="option px-4 py-2 hover:bg-red-800 hover:text-white">
                                                <input value="Everyone" type="radio" checked class="appearance-none" v-model="view_option" id="every" name="category">
                                                <label for="every">Everyone</label>
                                            </div>
                                            <div  @click="toggleOption='hidden'" class="option px-4 py-2 hover:bg-red-800 hover:text-white">
                                                <input value="People I Follow" type="radio" class="appearance-none" v-model="view_option" id="PIF" name="category">
                                                <label for="PIF">People I Follow</label>
                                            </div>
                                            <div  @click="toggleOption='hidden'" class="option px-4 py-2 hover:bg-red-800 hover:text-white">
                                                <input value="People Following Me" type="radio" class="appearance-none" v-model="view_option" id="PFM" name="category">
                                                <label for="PFM">People Following Me</label>
                                            </div>
                                            <div  @click="toggleOption='hidden'" class="option px-4 py-2 hover:bg-red-800 hover:text-white">
                                                <input value="Anonymous" type="radio" class="appearance-none" id="anon" v-model="view_option" name="category">
                                                <label for="anon">Anonymous</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </span>
                    <div class="absolute right-3 top-0">
                        <font-awesome-icon @click="chevron='block'" :icon="['fas', 'chevron-down']" class="cursor-pointer text-gray-500 text-xs"/>
                        <div :class="chevron" class="relative bottom-8 right-36">
                            <div class="select-box inline-flex w-auto flex-col">
                                <div @mouseleave="chevron='hidden'" class="option-container w-40 z-10 text-xs absolute border bg-white text-gray-800">
                                    <div  @click="toggleOption='hidden'" class="option px-4 py-2 hover:bg-red-800 hover:text-white">
                                        <input value="Only me" type="radio" class="radio appearance-none" v-model="view_option" id="me" name="category">
                                        <label for="me">Only me</label>
                                    </div>
                                    <div  @click="toggleOption='hidden'" class="option px-4 py-2 hover:bg-red-800 hover:text-white">
                                        <input value="Everyone" type="radio" checked class="radio appearance-none" v-model="view_option" id="every" name="category">
                                        <label for="every">Everyone</label>
                                    </div>
                                    <div  @click="toggleOption='hidden'" class="option px-4 py-2 hover:bg-red-800 hover:text-white">
                                        <input value="People I Follow" type="radio" class="radio appearance-none" v-model="view_option" id="PIF" name="category">
                                        <label for="PIF">People I Follow</label>
                                    </div>
                                    <div  @click="toggleOption='hidden'" class="option px-4 py-2 hover:bg-red-800 hover:text-white">
                                        <input value="People Following Me" type="radio" class="radio appearance-none" v-model="view_option" id="PFM" name="category">
                                        <label for="PFM">People Following Me</label>
                                    </div>
                                    <div  @click="toggleOption='hidden'" class="option px-4 py-2 hover:bg-red-800 hover:text-white">
                                        <input value="Anonymous" type="radio" class="radio appearance-none" id="anon" v-model="view_option" name="category">
                                        <label for="anon">Anonymous</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- post content -->
                <div class="py-5 relative">
                    <p class="text-sm" style="">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem ratione commodi architecto asperiores quia obcaecati assumenda, vero aliquid voluptate laudantium.
                    </p>
                    <span class="absolute right-3 bottom-2 text-xs">
                        <font-awesome-icon :icon="['far', 'comment']" class="cursor-pointer"/>
                        <!-- number of comments -->
                        <span class="bottom-0 relative">2</span>
                    </span>
                </div>
                <div class="border-t text-sm border-gray-200 grid grid-cols-3 text-center">
                    <div @mouseenter="likeMenu='flex'" @mouseleave="likeMenu='hidden'" class="relative cursor-pointer hover:bg-gray-100 p-2">
                        <span>
                            <font-awesome-icon :icon="['fas', 'thumbs-up']"/> Like
                        </span>
                        <div :class="likeMenu" class="absolute text-2xl shadow-lg gap-x-3 bottom-6 left-0 bg-white px-4 py-3 rounded-full">
                            <font-awesome-icon :icon="['far', 'image']" class="flex-grow text-md text-blue-400"/> 
                            <font-awesome-icon :icon="['fas', 'video']" class="flex-grow text-md text-green-600"/> 
                            <font-awesome-icon :icon="['fas', 'signature']" class="flex-grow text-md text-gray-400"/> 
                            <font-awesome-icon :icon="['fas', 'microphone']" class="flex-grow text-md text-red-500"/> 
                            <font-awesome-icon :icon="['fas', 'smile']" class="flex-grow text-md text-yellow-400"/> 
                        </div>
                    </div>
                    <div class="cursor-pointer hover:bg-gray-100 p-2" @click="toggleComment">
                        <font-awesome-icon :icon="['far', 'comment']"/>
                        Comment
                    </div>
                    <div class="cursor-pointer hover:bg-gray-100 p-2">
                        <font-awesome-icon :icon="['fas', 'share-alt']"/>
                        Share
                    </div>
                </div>
            </div>
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
    </div>
</template>

<script>
export default {
    data(){
        return{
            likeMenu:'hidden',
            showDown:'hidden',
            edit:'hidden',
            replyComments:false,
            viewComment:false,
            updateViwers:'hidden',
            chevron:'hidden'
        }
    },
    methods:{
        toggleComment(){
            if(this.viewComment =='true'){
               this.viewComment ='false'
               console.log(this.viewComment);
            }else{
                this.viewComment ='true'
                console.log(this.viewComment);
            }
        }
    },
    watch:{
        
    }
}
</script>

<style>

</style>
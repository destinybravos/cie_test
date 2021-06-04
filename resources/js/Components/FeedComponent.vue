<template>
    <div v-if="propFeeds.length > 0">
        <div class="relative rounded-md shadow-md bg-white mt-3" v-for="(feed, i) in propFeeds" :key="i">
            <div class="p-3 pb-2">
                <div class="relative">
                    <img class="h-10 rounded-full object-cover inline-block align-top bg-blue-200" :src="`/storage/images/profiles/${feed.publisher.profile_photo_path}`" :alt="$page.user.name" />
                    <span class="px-1 inline-block text-sm">
                        <div class=" font-bold">{{ feed.publisher.firstname }} {{ feed.publisher.lastname }}</div>
                        <div class="flex">
                            <!-- <div class="">2</div> -->
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
                    <div class="absolute right-3 top-0" v-if="feed.publisher.id == $page.user.id">
                        <font-awesome-icon @click="chevron='block'" :icon="['fas', 'chevron-down']" class="cursor-pointer text-gray-500 text-xs"/>
                        <div :class="chevron" class="relative bottom-8 right-36">
                            <div class="select-box inline-flex w-auto flex-col">
                                <div @mouseleave="chevron='hidden'" class="option-container w-40 z-10 text-xs absolute border bg-white text-gray-800">
                                    <inertia-link href="" class="option px-4 py-2 block hover:bg-red-800 hover:text-white">
                                        <label for="me">Delete Post</label>
                                    </inertia-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- post content -->
                <div class="py-5 relative">
                    <div class="text-sm" style="">
                        <div class="flex my-4" v-if="feed.feature_img !== '' && feed.feature_img !== null">
                            <div class="flex-grow p-0">
                                <img :src="`/storage/images/${feed.feature_img}`" :alt="feed.feature_img">
                            </div>
                        </div>
                        {{ feed.content }}
                    </div>
                    <span class="absolute right-3 bottom-2 text-xs">
                        <font-awesome-icon :icon="['far', 'comment']" class="cursor-pointer"/>
                        <!-- number of comments -->
                        <span class="bottom-0 relative">2</span>
                    </span>
                </div>
                <div class="border-t text-sm border-gray-200 grid grid-cols-3 text-center">
                    <div @mouseenter="likeMenu='flex'" @mouseleave="likeMenu='hidden'" class="cursor-pointer hover:bg-gray-100 p-2">
                        <span>
                            <font-awesome-icon :icon="['fas', 'thumbs-up']"/> Like
                        </span>
                        <div :class="likeMenu" class="absolute flex shadow-lg gap-x-3 bottom-6 left-0 bg-white px-2 py-1 rounded-full">
                            <img src="/emojis/like.png" alt="like" class="" @click="react('like', feed.id)" />
                            <img src="/emojis/love.png" alt="love" class="" @click="react('love', feed.id)"  />
                            <img src="/emojis/care.png" alt="care" class="" @click="react('care', feed.id)"  />
                            <img src="/emojis/haha.png" alt="haha" class="" @click="react('haha', feed.id)"  />
                            <img src="/emojis/wow.png" alt="wow" class="" @click="react('wow', feed.id)"  />
                            <img src="/emojis/sad.png" alt="sad" class="" @click="react('sad', feed.id)"  />
                            <img src="/emojis/angry.png" alt="angry" class="" @click="react('angry', feed.id)"  />
                            <!-- <font-awesome-icon :icon="['fas', 'video']" class="flex-grow text-md text-green-600"/> 
                            <font-awesome-icon :icon="['fas', 'signature']" class="flex-grow text-md text-gray-400"/> 
                            <font-awesome-icon :icon="['fas', 'microphone']" class="flex-grow text-md text-red-500"/> 
                            <font-awesome-icon :icon="['fas', 'smile']" class="flex-grow text-md text-yellow-400"/>  -->
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
        </div>
    </div>
    
    <!-- If there are no feeds -->
    <!-- <div v-else>
        No Feeds
    </div> -->
</template>

<script>
import Http from '../Mixins/HttpClient';
export default {
    props:{
        propFeeds:Array,
    },
    data(){
        return{
            likeMenu:'hidden',
            showDown:'hidden',
            edit:'hidden',
            replyComments:false,
            viewComment:false,
            updateViwers:'hidden',
            chevron:'hidden',
            view_option:'Everyone'
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
        },
        react(reaction, feedid){
            let data = {
                userid : this.$page.user.id,
                feedid : feedid,
                reaction : reaction
            }
            Http.client.post('/posts/react_on_feed', data)
            .then((res) => {
                console.log(res);
            })
            .catch((error) => {
                console.log(error);
                this.processing = false;
            })
        }
    },
    watch:{
        
    }
}
</script>

<style>

</style>
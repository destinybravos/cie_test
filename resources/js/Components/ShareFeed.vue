<template>
    <div>
        <div v-if="show" @click="show=false" class="fixed transition-all duration-500 h-screen w-screen top-0 right-0 z-30" style="background:rgba(0,0,0,0.6)"></div>
            <form @submit.prevent="sharePost()">
            <div class="bg-white relative mt-3 rounded-md">
                <div @click="show=true" class="w-full z-20 relative" :class="{'z-50': show}">
                    <div class="bg-white rounded-md cursor-pointer shadow-lg px-3 py-2 relative">
                        <span class="w-full">
                            <img class="rounded-full h-8 shadow-sm inline-block align-top bg-purple-200" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.name" />
                            <textarea rows="1" @keyup="autosize" v-model="post_content" class="overflow-y-hidden focus:outline-none mt-2 max-h-20 w-10/12 ml-2 resize-none text-sm" placeholder="What's going on? #Hashing.. @Mention.. link.."></textarea>
                        </span>
                        <span class="px-2 pt-2 right-4 absolute">
                            <font-awesome-icon v-if="!show" :icon="['fas', 'camera']"/> 
                            <font-awesome-icon :icon="['far', 'newspaper']"/> 
                        </span>
                    </div>
                    <div v-if="show" class="bg-white shadow-md bottom-2 relative rounded-b-md cursor-pointer py-2">
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
                        <div class=" border-t rounded-b-lg bg-white px-4 pt-3 ">
                            <button type="submit" class="right-2 absolute px-6 py-1 text-sm rounded-sm bg-red-700 text-white">
                                <font-awesome-icon icon="circle-notch" spin class="mr-2" v-if="processing" /> 
                                <font-awesome-icon icon="share-alt" class="mr-2" v-else /> 
                                Share
                            </button>
                            <span class="text-xs">
                                <div class="select-box inline-flex w-auto flex-col">
                                    <div @click="toggleOption='block'" class="selected px-2 border border-gray-300 rounded-full py-1 bg-gray-200">
                                        <font-awesome-icon :icon="['fas', 'globe-americas']"/>
                                        {{active}}
                                        <font-awesome-icon :icon="['fas', 'chevron-down']" class="ml-1"/>
                                    </div>
                                    <div @mouseleave="toggleOption='hidden'" :class="toggleOption" class="option-container absolute border bg-white text-gray-800">
                                        <div  @click="toggleOption='hidden'" class="option hover:bg-red-800 hover:text-white">
                                            <input value="Only me" type="radio" class="radio appearance-none hidden" v-model="view_option" id="me" name="category">
                                            <label for="me" class="block px-4 py-2">Only me</label>
                                        </div>
                                        <div  @click="toggleOption='hidden'" class="option hover:bg-red-800 hover:text-white">
                                            <input value="Everyone" type="radio" checked class="radio appearance-none hidden" v-model="view_option" id="every" name="category">
                                            <label for="every" class="block px-4 py-2">Everyone</label>
                                        </div>
                                        <div  @click="toggleOption='hidden'" class="option hover:bg-red-800 hover:text-white">
                                            <input value="People I Follow" type="radio" class="radio appearance-none hidden" v-model="view_option" id="PIF" name="category">
                                            <label for="PIF" class="block px-4 py-2">People I Follow</label>
                                        </div>
                                        <div  @click="toggleOption='hidden'" class="option hover:bg-red-800 hover:text-white">
                                            <input value="People Following Me" type="radio" class="radio appearance-none hidden" v-model="view_option" id="PFM" name="category">
                                            <label for="PFM" class="block px-4 py-2">People Following Me</label>
                                        </div>
                                        <div  @click="toggleOption='hidden'" class="option hover:bg-red-800 hover:text-white">
                                            <input value="Anonymous" type="radio" class="radio appearance-none hidden" id="anon" v-model="view_option" name="category">
                                            <label for="anon" class="block px-4 py-2">Anonymous</label>
                                        </div>
                                    </div>
                                </div>
                            </span> 
                            
                            <span class="text-xs text-gray-400 px-2">
                                654
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Feed Components -->
        <feed-component :prop-feeds="feeds" />
    </div>
</template>

<script>
import Http from '../Mixins/HttpClient';
import FeedComponent from '../Components/FeedComponent.vue'
import { required, minLength } from 'vuelidate/lib/validators'
import '@dmuy/toast/dist/mdtoast.css'
import mdtoast from '@dmuy/toast'
export default {
    components:{
        FeedComponent
    },
    data(){
        return{
            show:false,
            toggleOption:'hidden',
            active:'Everyone',
            view_option:'Everyone',
            post_content:'',
            userid: this.$page.user.id,
            submitStatus: null,
            processing:false,
            feeds:[]
        }
    },
    mounted(){
        this.fetchFeeds();
    },
    validations:{
        post_content:{
            required,
            minLength:minLength(5)
        }
    },
    methods:{
        sharePost(){
            this.processing = true;
            let data = {
                content: this.post_content,
                userid: this.userid,
                viewstatus: this.active,
                feedtype: 'post',
            }

            Http.client.post('/posts/sharefeed', data)
            .then((res) => {
                
                if(res.data.status == 422){
                    res.data.errors.content.map(function(error) {
                        mdtoast(`${error}`, { duration: 10000, type: mdtoast.ERROR });
                    })
                }else if(res.data.status == 200){
                    this.submitStatus = 'OK';
                    this.post_content = '';
                    this.show = false;
                    this.toggleOption = 'hidden';
                    mdtoast(`post shared`, { duration: 10000, type: mdtoast.SUCCESS });
                    this.fetchFeeds();
                }
                
                this.processing = false;
            })
            .catch((error) => {
                console.log(error);
                this.processing = false;
            })
 
        },
        fetchFeeds(){
            Http.client.post('/posts/fetchfeeds', {})
            .then(res => {
                this.feeds = res.data.feeds
            })
        },
        autosize(e){
            let el = e.target;
            el.style.cssText = 'height:' + this.calcHeight(el.value) + 'px';
            // setTimeout(function(){
                // el.style.cssText = 'height:auto; padding:0';
                // for box-sizing other than "content-box" use:
                // el.style.cssText = '-moz-box-sizing:content-box';
                // el.style.cssText = 'height:' + el.scrollHeight + 'px';
            // },0);
        },
        calcHeight(value) {
            let numberOfLineBreaks = (value.match(/\n/g) || []).length;
            // min-height + lines x line-height + padding + border
            let newHeight = 20 + numberOfLineBreaks * 20 + 12 + 2;
            return newHeight;
        }
    },
    watch:{
        'view_option' : function(val){
            this.active=val;
        }
    },
}
</script>

<style>

</style>
<template>
    <div>
        <div v-if="show" @click="show=false" class="fixed transition-all duration-500 h-screen w-screen top-0 right-0 z-30" style="background:rgba(0,0,0,0.6)"></div>
            <form @submit.prevent="sharePost()">
            <div class="bg-white relative mt-3 rounded-md shadow-lg">
                <div @click="show=true" class="w-full z-50 relative">
                    <div class="bg-white rounded-t-md cursor-pointer px-3 py-2 relative">
                    <span class="w-full">
                            <img class="rounded-full h-8 shadow-lg inline-block align-top bg-purple-200" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.name" />
                            <textarea v-model="post_content" id="" class="overflow-y-hidden focus:outline-none mt-2 h-6 max-h-10 resize-none text-xs" style="width:80%" placeholder="What's going on? #Hashing.. @Mention.. link.."></textarea>
                            <p class="typo__p text-green-600 text-sm" v-if="submitStatus === 'OK'">post shared!</p>
                            <p class="typo__p text-red-600 text-sm" v-if="submitStatus === 'ERROR'">Please fill the form correctly.</p>
                            <p class="typo__p text-blue-600 text-sm" v-if="submitStatus === 'PENDING'">sharing...</p>
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
                        <div class=" border-t rounded-b-lg bg-white px-4 pt-3 ">
                            <button type="submit" class="right-2 absolute px-6 py-1 text-sm rounded-sm bg-red-700 text-white">Share</button>
                            <span class="text-xs">
                                <div class="select-box inline-flex w-auto flex-col">
                                    <div @click="toggleOption='block'" class="selected px-2 border border-gray-300 rounded-full py-1 bg-gray-200">
                                        <font-awesome-icon :icon="['fas', 'globe-americas']"/>
                                        {{active}}
                                        <font-awesome-icon :icon="['fas', 'chevron-down']" class="ml-1"/>
                                    </div>
                                    <div @mouseleave="toggleOption='hidden'" :class="toggleOption" class="option-container absolute border bg-white text-gray-800">
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
                            </span> 
                            
                            <span class="text-xs text-gray-400 px-2">
                                654
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            </form>
    </div>
</template>

<script>
import Http from '../Mixins/HttpClient';
import { required, minLength } from 'vuelidate/lib/validators'
import '@dmuy/toast/dist/mdtoast.css'
import mdtoast from '@dmuy/toast'
export default {
    data(){
        return{
            show:false,
            toggleOption:'hidden',
            active:'Everyone',
            view_option:'Everyone',
            post_content:'',
            userid: this.$page.user.id,
             submitStatus: null
        }
    },
    
     validations:{
    post_content:{
    required,
    minLength:minLength(5)
}
    },

    methods:{
        sharePost(actions){

            this.$v.$touch()
            if (this.$v.$invalid) {
            this.submitStatus = 'ERROR'
            }else{
                this.submitStatus = 'PENDING'
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
                        }

                if(res.data.status == 200){
                    this.submitStatus = 'OK';
                  this.post_content = '';
                  this.show = false;
                 this.toggleOption = 'hidden';
                 mdtoast(`post shared`, { duration: 10000, type: mdtoast.SUCCESS });
                    
                        }
                
            })
            .catch((error) => {
                console.log(error);
            })


            }
          
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
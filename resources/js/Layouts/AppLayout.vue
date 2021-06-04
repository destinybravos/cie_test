<template>
    <div class="min-h-screen bg-gray-50">
        <!-- Top HD -->
        <div class="bg-green-800 text-sm z-30 sticky top-0 shadow">
            <div class="max-w-7xl mx-auto flex">
                <section class="py-2 px-3 md:px-1 flex-grow flex md:block">
                    <a href="#" class="hidden md:inline-block">
                        <img src="/imgs/inoimo.jpg" alt="" class="h-8 inline-block align-middle">
                        <img src="/imgs/cielogo.png" alt="" class="h-8 inline-block align-middle">
                    </a>
                    
                    <inertia-link :href="route('dashboard')" class="inline-block flex-grow cursor-pointer hover:bg-green-700 mx-1 px-1 rounded py-1 align-middle">
                        <font-awesome-icon icon="home" class="text-white text-xl ml-4 inline-block align-middle cursor-pointer" />
                    </inertia-link>
                    <inertia-link href="#" class="inline-block flex-grow cursor-pointer hover:bg-green-700 mx-1 px-1 rounded py-1 align-middle">
                        <font-awesome-icon icon="plus-circle" class="text-white text-xl ml-4 inline-block align-middle" />
                    </inertia-link>
                </section>
                
                <section class="py-2 px-3 md:px-1 flex-grow hidden md:inline-block flex-initial md:flex-grow">
                    
                </section>

                <section class="py-2 px-3 md:px-1 flex-grow flex md:block">
                    <inertia-link href="#" class="inline-block flex-grow cursor-pointer hover:bg-green-700 mx-1 px-1 rounded py-1 align-middle text-center">
                        <font-awesome-icon icon="user-plus" class="text-white text-xl inline-block mx-auto cursor-pointer" />
                    </inertia-link>
                    <inertia-link href="#" class="inline-block flex-grow cursor-pointer hover:bg-green-700 mx-1 px-1 rounded py-1 align-middle">
                        <font-awesome-icon :icon="['far', 'comment-alt']" class="text-white text-xl inline-block mx-auto cursor-pointer" />
                    </inertia-link>
                    <inertia-link href="#" class="inline-block flex-grow cursor-pointer hover:bg-green-700 mx-1 px-1 rounded py-1 align-middle">
                        <font-awesome-icon :icon="['far', 'bell']" class="text-white text-xl inline-block mx-auto cursor-pointer" />
                    </inertia-link>
                    <span href="#" class="inline-block flex-grow relative cursor-pointer hover:bg-green-700 ml-3 px-1 rounded py-1 align-middle">
                        <img @click="menu=true" class="h-6 w-6 rounded-full object-cover inline-block align-top bg-white" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.name" />
                        <div v-if="menu" class="inline-flex w-auto flex-col">
                            <div class="option-container absolute border overflow-hidden py-1 bg-white rounded-lg right-0 top-0 w-60 text-gray-800">
                                <ul class="grid grid-cols-1 gap-0 divide-y" @click="menu=false" >
                                    <li>
                                        <inertia-link :href="route('profile')" class="flex px-3 py-2">
                                            <span class="flex-grow font-semibold">
                                                <font-awesome-icon :icon="['far', 'user']" class="" />
                                                {{ $page.user.username }}
                                            </span>
                                            <img @click="menu=true" class="h-6 w-6 flex-initial rounded-full object-cover inline-block align-top bg-white" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.name" />
                                        </inertia-link>
                                    </li>
                                    <li>
                                        <inertia-link class="flex px-3 py-2">
                                            <font-awesome-icon :icon="['far', 'user']" class="" />
                                            Logout
                                        </inertia-link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </span>
                </section>
            </div>
        </div>

        <!-- side chat bar -->
        <div id="sidebar" class="z-10 shadow bg-white hidden xl:block fixed right-0 top-0 h-screen w-64">
            <div class="mt-12 flex px-6 py-2">
                <h2 class="text-xl inline-block flex-grow">
                    Chats
                </h2>
                
                <div class="flex-grow text-right text-sm">
                    <inertia-link href="#" class="cursor-pointer ml-3 px-2 rounded-full bg-gray-200 py-1 align-middle">
                        <font-awesome-icon :icon="['fas', 'user-friends']" class="text-gray-800 inline-block mx-auto cursor-pointer" />
                    </inertia-link>
                    <inertia-link href="#" class="cursor-pointer px-2 rounded-full bg-gray-200 py-1 align-middle">
                        <font-awesome-icon :icon="['fas', 'cog']" class="text-gray-800 inline-block mx-auto cursor-pointer" />
                    </inertia-link>
                </div>
            </div>
            <!-- Chatlist and group icon -->
            <div class="flex center">
                <div class="relative mx-auto flex gap-x-4">
                    <div :class="toggle" class="absolute transition-all duration-900 p-4 px-8 rounded-full bg-red-100"></div>
                    <div @click="friend" :class="color" class="z-10 py-1 px-6 mx-auto rounded-full cursor-pointer">
                       <font-awesome-icon :icon="['far', 'comment-alt']"/> 
                    </div>
                    <div @click="group" :class="color2" class="z-10 p-1 mx-auto cursor-pointer">
                        <font-awesome-icon :icon="['fas', 'users']"/> 
                    </div>
                </div>
            </div>
            <!-- Chatlist and group content -->
            <div class="mt-2">
                <chat-list v-if="openChatList"></chat-list>
                <group-list v-else></group-list>
                <div class="absolute bottom-0 p-3 w-full">
                    <input type="text" placeholder="Search for users" class="placeholder:text-gray-300 rounded-md focus:outline-none py-1 px-2 w-full bg-gray-200 text-gray-500 border-0">
                </div>
                <!-- bottom Message cards go in here -->
                <div class="fixed flex gap-x-2 bottom-0 right-2 text-right p-3">
                    <!-- small chat card section-->
                    <div :class="popMessageBox" class="text-left relative rounded-lg w-64 h-80 bg-white shadow-lg border flex flex-col border-gray-300">
                        <div class="px-1 py-1 relative flex gap-x-1 text-xs bg-green-100 rounded-t-lg">
                            <img class="h-8 rounded-full object-cover inline-block align-top bg-white" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.name" />
                            <span >
                                <div class=" font-bold">Ebube </div>
                                <div class="text-gray-400">Online</div>
                            </span>
                            <div class="absolute right-2 top-2">
                                <font-awesome-icon @click="popMessageBox='hidden'" :icon="['fas', 'times']" class="cursor-pointer flex-grow text-md text-blue-400"/>
                            </div>
                        </div>
                        <div class="text-xs px-1 py-1 overflow-y-scroll" style="flex:1 1 auto">
                            <!-- message from me to friend -->
                            <div class="mt-2 relative" style="align:right" align="right">
                                <div class="table ml-1/6">
                                    <p class="bg-gray-100 shadow-sm pl-4 pr-4 pt-2 pb-2 ml-1 mb-0" style="border-radius:9px 9px 0px 9px;">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, animi?
                                    </p>
                                </div>
                            </div>
                            <!-- message to -->
                            <div class="mt-2">
                                <div style="display:flex;">
                                    <p class="pl-4 bg-green-100 shadow-sm pr-4 pt-2 pb-2 ml-1 mb-0" style="border-radius:9px 9px 9px 0px;margin-right:30%">
                                        <span class="">
                                            locale_get_primary_language
                                        </span>
                                    </p>
                                </div>
                            </div> 
                        </div>
                        <div class="p-2 bg-green-100 rounded-b-lg flex gap-x-2">
                            <textarea name="" id="" class="flex-grow resize-none h-8 rounded-lg focus:outline-none px-2 py-1 border border-gray-300"></textarea>
                            <span class="pt-1 pr-1">
                                <font-awesome-icon :icon="['far', 'paper-plane']" class="text-md text-blue-400"/>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="main" class="xl:mr-64 mx-auto max-w-5xl lg:ml-56">
            <template v-if="verify_status > 0">
                <slot name="side"></slot>
                <div class="lg:max-w-7xl">
                    <slot></slot>
                </div>
            </template>
            <template v-else>
                <div class="lg:max-w-7xl">
                    <verification-component></verification-component>
                </div>
            </template>
        </div>
    </div>
</template>

<script>
import ChatList from '../Components/ChatList.vue';
import GroupList from '../Components/GroupList.vue';
import VerificationComponent from '../Components/VerificationComponent.vue';
export default {
  components: { VerificationComponent, ChatList, GroupList },
    data(){
        return {
            openChatList:true,
            color:'text-red-500',
            color2:'text-gray-400',
            toggle:'',
            verify_status:0,
            openChatList:true,
            menu:false,
            popMessageBox:'hidden'
        }
    },
    beforeMount(){
        this.verify_status = this.$page.user.verification_status
        console.log(this.verify_status);
    },
    methods:{
        friend(){
            this.toggle=''
            this.color='text-red-500'
            this.color2='text-gray-400'
            this.openChatList=true
        },
        group(){
            this.toggle='left-16'
            this.color='text-gray-400'
            this.color2='text-red-500'
            this.openChatList=false
        },
    }
}
</script>

<style scoped>
    
</style>
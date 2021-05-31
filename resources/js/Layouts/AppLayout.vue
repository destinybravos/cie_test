<template>
    <div class="min-h-screen bg-gray-50">
        <!-- Top HD -->
        <div class="bg-green-800 text-sm z-30 sticky top-0 shadow">
            <div class="max-w-7xl mx-auto flex">
                <section class="py-2 px-3 md:px-1 flex-grow flex md:block">
                    <a href="#" class="hidden md:inline-block">
                        <img src="/imgs/imoyes.png" alt="" class="h-8 inline-block align-middle">
                        <img src="/imgs/cielogo.png" alt="" class="h-8 inline-block align-middle">
                    </a>
                    
                    <inertia-link href="#" class="inline-block flex-grow cursor-pointer hover:bg-green-700 mx-1 px-1 rounded py-1 align-middle">
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
                    <inertia-link href="#" class="inline-block flex-grow cursor-pointer hover:bg-green-700 ml-3 px-1 rounded py-1 align-middle">
                        <img class="h-6 w-6 rounded-full object-cover inline-block align-top bg-white" :src="'/imgs/' + $page.user.profile_photo_path" :alt="$page.user.name" />
                    </inertia-link>
                </section>
            </div>
        </div>

        <!-- side chat bar -->
        <div id="sidebar" class="z-10 shadow bg-white hidden lg:block fixed right-0 top-0 h-screen" style="width:250px;">
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
        </div>

        <div id="main">
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
import VerificationComponent from '../Components/VerificationComponent.vue';
export default {
  components: { VerificationComponent },
    data(){
        return {
            verify_status:0
        }
    },
    beforeMount(){
        this.verify_status = this.$page.user.verification_status
        console.log(this.verify_status);
    }
}
</script>

<style scoped>
    #main{
        margin-right: 250px;
    }
</style>
<template>
    <div>
        <!-- Top Side Bar -->
        <div class="text-center py-1 px-2" v-touch:tap="swipeHandler">
            <inertia-link :href="route('dashboard')" :active="route().current('dashboard')">
                <img src="imgs/logo.png" alt="" class="max-w-full mx-auto inline-block align-middle">
            </inertia-link>
        </div>
        <hr>

        <!-- Top Side Bar -->
        <div class="text-center py-1 px-2 bg-blue-900 text-white">
            <div class="mt-2">
                <img :src="'http://nipost.com/storage/images/profile/' + userphoto" alt="Profile Photo" class="rounded-full mx-auto h-20 w-20 object-cover">
            </div>
            <strong class="block align-middle capitalize mt-2">
                {{ user.firstname + ' ' + user.lastname }}
            </strong>
            <span class="uppercase mb-2 inline-block">
                {{ user.user_type }}
            </span>
        </div>
        <hr>

        <nav>
            <nav-bar></nav-bar>
        </nav>
    </div>
</template>

<script>
import NavBar from './NavBar.vue'
export default {
  components: { NavBar },
    data(){
        return {
            user: this.$page.user,
            userphoto: this.$page.user.profile_photo_path
        }
    },
    mounted(){
        
    },
    methods:{
        swipeHandler (direction) {
            console.log(direction)  // May be left / right / top / bottom
        }
    }
}
</script>

<style>

</style>
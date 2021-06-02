<template>
    <div>
        <div v-for='user in users' :key='user.id' class="hover:bg-gray-200 p-2 cursor-pointer">
            <div class="flex relative">
                <img class="rounded-full h-8 shadow-lg inline-block align-top bg-blue-200" :src="`/storage/images/profiles/${user.profile_photo_path}`" :alt="user.username" />
                <span class="my-auto pl-2 text-gray-600">{{ `${user.firstname} ${user.lastname}` }}</span>
                <div class="absolute flex right-4 h-full">
                    <div class="rounded-full mt-3 h-2 w-2 bg-green-500"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Http from '../Mixins/HttpClient'
export default {
    data(){
        return {
            users:[],
            user: this.$page.user
        }
    },
    mounted(){
        this.fetchUsers();
    },
    methods:{
        fetchUsers(){
            Http.client.post('/user/fetch_friends', {id:this.user.id}) 
            .then((res) => {
                if(res.data.status == 'success'){
                    this.users = res.data.users
                }
            })
            .catch((e) => {
                if (e.response) {
                    console.log(e.response.data.message);
                }else{
                    console.log('Network error!');
                }
            });
        }
    }
}
</script>

<style>

</style>
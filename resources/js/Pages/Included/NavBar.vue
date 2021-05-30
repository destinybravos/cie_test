<template>
    <div class="overflow-auto" style="max-height:430px;">
        <ul>
            <li>
                <inertia-link class="px-4 py-2 block border-b border-gray-200 active" 
                :class="route().current('dashboard')? active_classes : classes" 
                :href="route('dashboard')">
                    <font-awesome-icon icon="tachometer-alt" class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle" /> 
                    <span class="inline-block align-middle text-gray-600 font-medium">Dashboard</span>
                </inertia-link>
            </li>

            <template v-if="user.user_type == 'admin'">
                <li>
                    <inertia-link class="px-4 py-2 block border-b border-gray-200 active" 
                    :class="route().current('record_parcel')? active_classes : classes" 
                    :href="route('record_parcel')">
                        <font-awesome-icon icon="gift" class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle" /> 
                        <span class="inline-block align-middle text-gray-600 font-medium">Manage Parcels</span>
                    </inertia-link>
                </li>
                <li>
                    <inertia-link class="px-4 py-2 block border-b border-gray-200 active" 
                    :class="route().current('feedback')? active_classes : classes" 
                    :href="route('feedback')">
                        <font-awesome-icon :icon="['fas', 'headset']" class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle" /> 
                        <span class="inline-block align-middle text-gray-600 font-medium">Contacts/Feedbacks</span>
                    </inertia-link>
                </li>
                <li>
                    <inertia-link class="px-4 py-2 block border-b border-gray-200 active" 
                    :class="route().current('messaging')? active_classes : classes" 
                    :href="route('messaging')">
                        <font-awesome-icon :icon="['far', 'envelope']" class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle" /> 
                        <span class="inline-block align-middle text-gray-600 font-medium">Message Client</span>
                    </inertia-link>
                </li>
            </template>

            <!-- <template v-if="user.user_type == 'lecturer'">
                <li>
                    <inertia-link class="px-4 py-2 block border-b border-gray-200 active" 
                    :class="route().current('content')? active_classes : classes" 
                    :href="route('content')">
                        <font-awesome-icon :icon="['far', 'eye']" class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle" /> 
                        <span class="inline-block align-middle text-gray-600 font-medium">Review Projects</span>
                    </inertia-link>
                </li>
                <li>
                    <inertia-link class="px-4 py-2 block border-b border-gray-200 active" 
                    :class="route().current('mystudents')? active_classes : classes" 
                    :href="route('mystudents')">
                        <font-awesome-icon :icon="['fas','user-graduate']" class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle" /> 
                        <span class="inline-block align-middle text-gray-600 font-medium">My Students</span>
                    </inertia-link>
                </li>
            </template>

            <template v-if="user.user_type == 'admin'">
                <li>
                    <inertia-link class="px-4 py-2 block border-b border-gray-200 active" 
                    :class="route().current('adddepartment')? active_classes : classes" 
                    :href="route('adddepartment')">
                        <font-awesome-icon :icon="['fas', 'school']" class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle" /> 
                        <span class="inline-block align-middle text-gray-600 font-medium">Add Department</span>
                    </inertia-link>
                </li>
                <li>
                    <inertia-link class="px-4 py-2 block border-b border-gray-200 active" 
                    :class="route().current('manageuser')? active_classes : classes" 
                    :href="route('manageuser')">
                        <font-awesome-icon :icon="['fas', 'users']" class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle" /> 
                        <span class="inline-block align-middle text-gray-600 font-medium">Manage Users</span>
                    </inertia-link>
                </li>
                <li>
                    <inertia-link class="px-4 py-2 block border-b border-gray-200 active" 
                    :class="route().current('assignstudents')? active_classes : classes" 
                    :href="route('assignstudents')"> 
                        <font-awesome-icon :icon="['fas','people-arrows']" class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle" /> 
                        <span class="inline-block align-middle text-gray-600 font-medium">Assign Students</span>
                    </inertia-link>
                </li>
            </template>

            
            <li>
                <inertia-link class="px-4 py-2 block border-b border-gray-200 active" 
                :class="route().current('profile')? active_classes : classes" 
                :href="route('profile')">
                    <font-awesome-icon :icon="['far','user']" class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle" /> 
                    <span class="inline-block align-middle text-gray-600 font-medium">User Profile</span>
                </inertia-link>
            </li> -->

            <li>
                <inertia-link href="#" class="px-4 py-2 block border-b border-gray-200 active" 
                :class="route().current('logout')? active_classes : classes" 
                @click.prevent="destroyAccessToken">
                    <font-awesome-icon icon="sign-out-alt" class="text-blue-700 hover:text-blue-800 mr-3 inline-block align-middle" /> 
                    <span class="inline-block align-middle text-gray-600 font-medium">Logout User</span>
                </inertia-link>
            </li>
        </ul>
    </div>
</template>

<script>
import Api from "../../Mixins/HttpClient";
export default {
    data() {
        return {
            user : this.$page.user,
            active_classes: 'block pl-3 pr-4 py-2 border-l-4 border-blue-900 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out',
            classes :  'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out'
        }
    },
    methods:{
        logout(){
            Api.client.post(`${route('logout')}`)
            .then((res) => {
                localStorage.removeItem('_token');
                window.location.href = '/';
            })
            .catch((error)=>{
                console.log(error);
            })
        },
        destroyAccessToken(){
            let HttpCredentials = {
                headers: {
                        authorization: 'Bearer ' + localStorage._token
                    }
            }
            Api.client.get(`/user/destroy_token`, HttpCredentials)
            .then((res) => {
                if(res.data.status == 'success'){
                    this.logout();
                }
            })
            .catch((error)=>{
                alert("An error occured while trying to logout!");
                console.log(error);
            })
        }
    }
}
</script>

<style>

</style>
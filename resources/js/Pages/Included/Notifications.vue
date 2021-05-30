<template>
    <div class="text-right ml-auto relative right-0 cursor-pointer">
        <div @click="openNotification = !openNotification" class="px-1">
            <font-awesome-icon :icon="['far','bell']" />
            <sup class="py-2 px-1 text-center rounded-full inline-block bg-red-600 text-white" v-if="notifications.length > 0">
                <small>{{ notifications.length }}</small>
            </sup>
        </div>
        
        <div class="w-64 bg-white shadow absolute top-0 left-0 right-auto bottom-auto not_transform text-gray-700"
            v-if="openNotification">
            <ul class="text-left" v-if="notifications.length > 0">
                <li v-for="notification in notifications" :key="notification.id" class="border-b border-blue-100 hover:bg-gray-50">
                    <inertia-link :href="notification.data.link" class="px-2 inline-block" @click="updateNotification(notification)">
                        <small v-html="notification.data.subject"></small>
                    </inertia-link>
                </li>
            </ul>
            <ul class="text-left" v-else>
                <li class="border-b border-blue-100 hover:bg-gray-50" @click="openNotification = !openNotification">
                    <span class="inline-block px-2">No Notifications</span>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import HttpClient from '../../Mixins/HttpClient';
export default {
    data(){
        return {
            openNotification:false,
            notifications:[]
        }
    },
    mounted(){
        setInterval(() => {
            this.checkForNotifications();
        }, 20000);
    },
    methods:{
        checkForNotifications(){
            let HttpCredentials = {
                headers: {
                        authorization: 'Bearer ' + localStorage._token
                    }
            }
            HttpClient.client.get('/notifications/check', HttpCredentials)
            .then((response) => {
                this.notifications = response.data;
            })
            .catch((e) => {
                console.log(e);
            })
        },
        updateNotification(notification){
            let HttpCredentials = {
                headers: {
                        authorization: 'Bearer ' + localStorage._token
                    }
            }
            HttpClient.client.post('/notifications/update', notification, HttpCredentials)
            .then((response) => {
                console.log(response.data);
            })
            .catch((e) => {
                console.log(e);
            })
        }
    }
}
</script>

<style scope>
    .not_transform{
        transform: translate3d(-15rem, 31px, 0px);
        will-change: transform;
        min-height: 10px;
    }
</style>
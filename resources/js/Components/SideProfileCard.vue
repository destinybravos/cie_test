<template>
    <div class="w-full flex relative flex-col bg-white rounded-lg shadow-lg">
        <div class="h-24 bg-white rounded w-full">
            <img class="h-24 w-full rounded-t-lg object-cover inline-block align-top bg-blue-200" :src="`/storage/images/covers/${$page.user.cover_photo}`" :alt="$page.user.name" />
        </div>
        <div class="absolute w-full text-center mt-16">
            <inertia-link :href="route('profile')" >
                <img class="rounded-full h-16 shadow-lg mx-auto object-cover inline-block align-top bg-blue-200" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.name" />
            </inertia-link>
        </div>
        <inertia-link :href="route('profile')" class="mx-auto mt-8 text-lg font-extrabold text-gray-900">{{ `${$page.user.firstname} ${$page.user.lastname}` }}</inertia-link>
        <inertia-link :href="route('profile')" class="mx-auto text-sm font-semibold text-gray-700">@{{ $page.user.username }}</inertia-link>
        <div class="my-3 text-center grid grid-cols-3 divide-x divide-gray-300" style="font-size:10px">
            <div class="py-2">
                <p>POST</p>
                <p>0</p>
            </div>
            <div class="py-2">
                <p>FOLLOWING</p>
                <p>0</p>
            </div>
            <div class="py-2">
                <p>FOLLOWERS</p>
                <p>0</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
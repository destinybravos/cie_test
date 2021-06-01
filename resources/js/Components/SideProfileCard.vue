<template>
    <div class="w-full flex relative flex-col bg-white rounded-lg shadow-lg">
        <div class="h-24 bg-white rounded w-full">
            <img class="h-24 w-full rounded-t-lg object-cover inline-block align-top bg-blue-200" :src="'/storage/images/covers/' + $page.user.cover_photo" :alt="$page.user.name" />
        </div>
        <div class="absolute w-full text-center mt-16">
            <img class="rounded-full h-16 shadow-lg mx-auto object-cover inline-block align-top bg-blue-200" :src="'/imgs/' + $page.user.profile_photo_path" :alt="$page.user.name" />
        </div>
        <p class="mx-auto mt-8 text-xl font-extrabold">destinyb</p>
        <p class="mx-auto text-md font-extrabold">@destinyb</p>
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
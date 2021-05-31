<template>
    <div class="w-full flex flex-col bg-white rounded-lg shadow-lg">
        <div class="h-24 bg-white rounded w-full">
            <img class="h-40 w-full rounded-t-lg object-cover inline-block align-top bg-blue-200" :src="'/storage/images/covers/' + $page.user.cover_photo" :alt="$page.user.name" />
        </div>
        <img class="rounded-full h-32 shadow-lg mx-auto object-cover inline-block align-top bg-blue-200" :src="'/imgs/' + $page.user.profile_photo_path" :alt="$page.user.name" />
        <p class="mx-auto mt-3 text-2xl font-extrabold">destinyb</p>
        <p class="mx-auto text-xl font-extrabold">@destinyb</p>
        <div class="my-4 text-center text-sm grid grid-cols-3 divide-x divide-gray-300">
            <div class="py-4">
                <p>POST</p>
                <p>0</p>
            </div>
            <div class="py-4">
                <p>FOLLOWING</p>
                <p>0</p>
            </div>
            <div class="py-4">
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
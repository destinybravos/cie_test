<template>
    <div class="">
        <div class="h-36 bg-white py-2 px-3 rounded-lg shadow">
            <h2 class="font-bold">
                Stories
            </h2>
            <div class="my-3">
                <div class="story-img-div relative h-24 w-20">
                    <img class="h-full rounded object-cover inline-block align-top bg-blue-200" :src="`/storage/images/profiles/${$page.user.profile_photo_path}`" :alt="$page.user.name" />
                </div>
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
<template>
    <div>
        <div v-for='index in 6' :key='index' class="hover:bg-gray-200 p-2 cursor-pointer">
            <div class="flex relative">
                <img class="rounded-full h-8 shadow-lg inline-block align-top bg-blue-200" :src="'/imgs/' + $page.user.profile_photo_path" :alt="$page.user.name" />
                <span class="my-auto pl-2 text-gray-400">Roderick</span>
                <div class="absolute flex right-4 h-full">
                    <div class="rounded-full mt-3 h-2 w-2 bg-green-300"></div>
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
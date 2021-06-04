<template>
    <div>
        <div class="py-3 px-4 my-5 rounded shadow">
            <font-awesome-icon :icon="['fas', 'tasks']" class="" /> Timeline
        </div>

        <share-feed />
    </div>
</template>

<script>
import ShareFeed from '../../Components/ShareFeed.vue'
export default {
    components:{
        ShareFeed, 
    }
}
</script>

<style>

</style>
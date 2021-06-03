<template>
    <div class="mb-8">
        <div class="flex w-full pt-3 pb-4 mb-3 px-4 bg-green-100 shadow">
            <div class="flex-grow">
                <font-awesome-icon :icon="['fas', 'tasks']" />
                Available Programs
            </div>

            <div class="flex-initial">
                <inertia-link :href="route('apply_program')" class="hover:bg-gradient-to-t bg-gradient-to-b from-red-600 to-red-800 text-white text-sm font-semibold rounded py-2 px-4">
                    Apply Now
                </inertia-link>
            </div>
        </div>

        <!-- Programs Cards -->
        <div>
            
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
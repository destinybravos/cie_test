<template>
    <div class="mb-8 bg-green-100 shadow">
        <div class="flex w-full pt-3 pb-4 px-4">
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
        <hr>

        <!-- Programs Cards -->
        <div class="pt-3 pb-4 px-4 grid grid-cols-4 gap-4">
            <div class="bg-white shadow rounded">
                <div class="overflow-hidden h-24 py-2 px-3">
                    <img src="/imgs/skillup.png" alt="Skill Up" class="max-w-full h-full">
                </div>
                <div class="py-2 px-3 font-bold text-xs">
                    Skill Up Imo
                </div>
            </div>
            <div class="bg-white shadow rounded">
                <div class="overflow-hidden h-24 py-2 px-3">
                    <img src="/imgs/pitch.png" alt="Skill Up" class="max-w-full h-full">
                </div>
                <div class="py-2 px-3 font-bold text-xs">
                    Pitch to Hope
                </div>
            </div>
            <div class="bg-white shadow rounded">
                <div class="overflow-hidden h-24 py-2 px-3">
                    <img src="/imgs/demoday.png" alt="Skill Up" class="max-w-full h-full">
                </div>
                <div class="py-2 px-3 font-bold text-xs">
                    Demo Day
                </div>
            </div>
            <div class="bg-white shadow rounded">
                <div class="overflow-hidden h-24 py-2 px-3">
                    <img src="/imgs/startup.png" alt="Skill Up" class="max-w-full h-full">
                </div>
                <div class="py-2 px-3 font-bold text-xs">
                    Startup Imo
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
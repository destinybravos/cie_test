<template>
    <div class="z-10 pl-12 hidden lg:block fixed left-0 top-0 h-screen" style="width:250px;">
        <ul class="mt-16 text-gray-700">
            <li class="mb-1">
                <inertia-link href="#" class="py-1 px-2 block" @click.prevent="showPrograms = !showPrograms">
                    <font-awesome-icon :icon="['fas', 'tasks']" class="text-blue-600 mr-2" /> Programs
                    <font-awesome-icon :icon="['fas', 'chevron-down']" class="text-gray-600 mr-2 text-xs mt-2 ml-5" />
                </inertia-link>
                <transition>
                    <ul v-if="showPrograms" class="border-l-2 border-gray-300 ml-2">
                        <li class="mb-1"> 
                            <inertia-link href="#" class="py-1 px-2 block">
                                <font-awesome-icon :icon="['fas', 'bullhorn']" class="text-green-600 mr-2" /> Pitch to Hope
                            </inertia-link>
                        </li>
                    </ul>
                </transition>
            </li>
            <li class="mb-1">
                <inertia-link href="#" class="py-1 px-2 block">
                    <font-awesome-icon :icon="['fas', 'home']" class="text-blue-600 mr-2" /> Newsfeeds
                </inertia-link>
            </li>
            <li class="mb-1">
                <inertia-link href="#" class="py-1 px-2 block">
                    <font-awesome-icon :icon="['far', 'images']" class="text-green-400 mr-2" /> Photos
                </inertia-link>
            </li>
            <li class="mb-1">
                <inertia-link href="#" class="py-1 px-2 block">
                    <font-awesome-icon :icon="['far', 'calendar-alt']" class="text-red-400 mr-2" /> Events
                </inertia-link>
            </li>
            <li class="mb-1">
                <inertia-link href="#" class="py-1 px-2 block">
                    <font-awesome-icon :icon="['fas', 'briefcase']" class="text-indigo-700 mr-2" /> Jobs
                </inertia-link>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data(){
        return {
            showPrograms:false
        }
    }
}
</script>

<style>

</style>
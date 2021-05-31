<template>
    <app-layout>
        <template #side style="width:200px; bg-red-200">
            <div class="z-10 pl-12 hidden lg:block fixed left-0 top-0 h-screen" style="width:250px;">
                <ul class="mt-16 text-gray-700">
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

        <div class="py-6" style="margin-left:200px;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Feeds Colomns -->
                <div class="md:col-span-2">
                    <story-component />
                </div>

                <!-- Side Columns -->
                <div>
                    friends
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import StoryComponent from '../../Components/StoryComponent.vue'

    export default {
        components: {
            AppLayout,
            StoryComponent,
        },
    }
</script>

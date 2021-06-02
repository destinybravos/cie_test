<template>
    <app-layout>
        <template #side style="width:200px; bg-red-200">
            <nav-list />
        </template>

        <div class="py-6 ml-0 lg:ml-52">
            <div class="mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <!-- First Columns -->
                        <div class="bg-white rounded-t">
                            <!-- Top Card -->
                            <div class="bg-green-500 bg-center bg-cover rounded-t" 
                                style="background-image:url('/imgs/setting-layer.svg'); min-height:100px;">

                            </div>
                            <!-- Form Section -->
                            <form class="mx-4">
                                <section class="my-4">
                                    <h2 class="font-bold text-2xl">Your Details</h2>
                                </section>
                                <div class="border-2 relative bg-white shadow-md my-2 w-full flex flex-row  py-0 rounded-lg">
                                    <font-awesome-icon :icon="['far', 'user']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                    <textarea v-model="uname" required type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2 h-32" placeholder="Bio"></textarea>
                                </div>
                                <div class="grid lg:grid-cols-2 grid-cols-1 gap-2">
                                    <div class="border-2 relative bg-white shadow-md w-full flex flex-row my-1 py-0 rounded-lg">
                                        <select class="w-full h-10 text-gray-500">
                                            <option class="">Select Role</option>
                                            <option>CEO and Founder</option>
                                            <option>Employee</option>
                                            <option>Freelancer</option>
                                        </select>
                                    </div>
                                    <div class="border-2 relative bg-white shadow-md w-full flex flex-row my-1 py-0 rounded-lg">
                                        <font-awesome-icon :icon="['far', 'calendar-alt']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                        <input v-model="exp" required type="number" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Years of Experience">
                                    </div>
                                    <div class="border-2 relative bg-white shadow-md w-full flex flex-row my-1 py-0 rounded-lg">
                                        <select class="w-full h-10 text-gray-500">
                                            <option class="">Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="border-2 relative bg-white shadow-md w-full flex flex-row my-1 py-0 rounded-lg">
                                        <select class="w-full h-10 text-gray-500">
                                            <option>Marital Status</option>
                                            <option>Single</option>
                                            <option>Married</option>
                                            <option>Devoced</option>
                                        </select>
                                    </div>
                                    <div class="border-2 relative bg-white shadow-md w-full flex flex-row my-1 py-0 rounded-lg">
                                        <font-awesome-icon :icon="['far', 'calendar-alt']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                        <input v-model="dob" required type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Date of Birth">
                                    </div>
                                    <div class="border-2 relative bg-white shadow-md w-full flex flex-row my-1 py-0 rounded-lg">
                                        <font-awesome-icon :icon="['fas', 'phone-alt']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                        <input v-model="phone" required type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Phone">
                                    </div>
                                    <div class="border-2 relative bg-white shadow-md w-full flex flex-row my-1 py-0 rounded-lg">
                                       <button class=" rounded-md py-2 px-4 bg-green-800 shadow-lg w-full text-white">
                                           APPLY
                                       </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="">
                        <!-- Other Component will come here -->
                        <quick-side-nav></quick-side-nav>
                    </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import StoryComponent from '../../Components/StoryComponent.vue'
    import SideProfileCard from '../../Components/SideProfileCard.vue'
    import NavList from '../../Components/NavList.vue'
    import Cover from '../../Components/Cover.vue'
    import ShareFeed from '../../Components/ShareFeed.vue'
    import QuickSideNav from '../../Components/QuickSideNav.vue'
import Button from '../../Jetstream/Button.vue'

    export default {
        components: {
            AppLayout,
            StoryComponent,
            SideProfileCard,
            NavList, 
            Cover,
            ShareFeed,
            QuickSideNav,
                Button,        
        },
        data(){
            return {
                showPrograms:false
            }
        }
    }
</script>
<style scoped>

</style>

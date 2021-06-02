<template>
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <form @submit.prevent="updateProfile()">
            <div class="max-w-6xl mx-auto px-4 py-3 rounded-lg shadow-lg bg-white mt-8">
                <h2 class="text-lg md:text-xl border-b font-semibold text-gray-800">
                    <font-awesome-icon :icon="['far', 'user']" /> Complete Profile Information
                </h2>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-5">
                    <!-- Div image part -->
                    <div class="md:px-5">
                        <div class="mb-4 text-center">
                            <h2 class="text-xl font-semibold text-gray-600">
                                Add a photo.
                            </h2>
                            <small class="text-gray-500">Show your unique personality and style.</small>
                        </div>
                        <div @click="browseFile()" class="h-60 w-60 mx-auto cursor-pointer bg-gray-50 overflow-hidden border-gray-200 border-2 rounded-full flex items-center justify-center relative">
                            <div v-if="uploading" class="absolute h-full w-full bg-gray-700 bg-opacity-75 text-center flex justify-center items-center">
                                <font-awesome-icon :icon="['fas', 'spinner']" spin class="text-6xl text-green-800" />
                            </div>
                            <div class="text-center text-gray-500" v-if="!preview">
                                <font-awesome-icon :icon="['fas', 'camera-retro']" class="text-6xl" />
                                <h2 class="text-lg mt-3" >
                                    Upload your photo
                                </h2>
                            </div>
                            <img v-else id="temp_profile_img" :src="''" alt=" " class="w-full">
                            <div class="hidden">
                                <input type="file" name="temp_img_browser" id="temp_img_browser" @change="changeImage">
                            </div>
                        </div>
                    </div>
                        <div class="md:px-5 relative" v-if="step == 1">
                            <div class="border-2 relative bg-white shadow-xl mb-5 w-full flex flex-row  py-0 rounded-lg">
                                <font-awesome-icon :icon="['far', 'user']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                <input v-model="fname" required type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Firstname">
                            </div>
                            <div class="border-2 relative bg-white shadow-xl mb-5 w-full flex flex-row  py-0 rounded-lg">
                                <font-awesome-icon :icon="['far', 'user']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                <input v-model="lname" required type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Lastname">
                            </div>
                            <div class="border-2 relative bg-white shadow-xl mb-5 w-full flex flex-row  py-0 rounded-lg">
                                <font-awesome-icon :icon="['far', 'user']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                <input v-model="lga_origin" required type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Local Government of Origin">
                            </div>
                            <div class="border-2 relative bg-white shadow-xl mb-5 w-full flex flex-row  py-0 rounded-lg">
                                <font-awesome-icon :icon="['far', 'user']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                <input v-model="state_origin" required type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="State of Origin">
                            </div>
                            <div class="border-2 relative bg-white shadow-xl mb-5 w-full flex flex-row  py-0 rounded-lg">
                                <font-awesome-icon :icon="['far', 'user']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                <input v-model="ward" type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Ward">
                            </div>
                        </div>
                        
                        <div class="md:px-5" v-if="step == 2">
                            <div class="border-2 relative bg-white shadow-xl mb-5 w-full flex flex-row  py-0 rounded-lg">
                                <font-awesome-icon :icon="['far', 'user']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                <input v-model="address" required type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Residence Address">
                            </div>
                            <div class="border-2 relative bg-white shadow-xl mb-5 w-full flex flex-row  py-0 rounded-lg">
                                <font-awesome-icon :icon="['far', 'user']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                <input v-model="lga" required type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Resident LGA">
                            </div>
                            <div class="border-2 relative bg-white shadow-xl mb-5 w-full flex flex-row  py-0 rounded-lg">
                                <font-awesome-icon :icon="['far', 'user']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                <input v-model="state" required type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="State of Residence">
                            </div>
                            <div class="border-2 relative bg-white shadow-xl mb-5 w-full flex flex-row  py-0 rounded-lg">
                                <font-awesome-icon :icon="['fas', 'globe-africa']" class="mt-3 ml-3 fa-1x absolute text-gray-500" />
                                <input v-model="country" required type="text" class="pr-3 focus:outline-none placeholder-gray-500 pl-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Country">
                            </div>
                        </div>
                </div>
                <hr class="my-5">
                <div class="flex">
                    <div class="flex-initial py-5 px-3">
                        <em>Complete your bio-data and profile information to continue..!</em>
                    </div>
                    <div class="py-5 px-6 text-right text-sm flex-grow">
                        <button type="button" @click="step++" v-if="step == 1" class="bg-gradient-to-b from-red-700 to-red-800 px-6 py-2 text-white font-semibold rounded-md">
                            NEXT <font-awesome-icon :icon="['fas', 'arrow-right']" class="" />
                        </button>
                        <button type="button" @click="step--" v-if="step == 2" class="bg-gradient-to-b from-red-700 to-red-800 px-6 py-2 text-white font-semibold rounded-md">
                            <font-awesome-icon :icon="['fas', 'arrow-left']" class="" /> PREVIOUS
                        </button>
                        <button type="submit" v-if="step >= 2" class="bg-gradient-to-b from-green-700 to-green-800 px-6 py-2 text-white font-semibold rounded-md">
                            <font-awesome-icon :icon="['fas', 'circle-notch']" spin v-if="processing" class="" /> 
                            <font-awesome-icon :icon="['far', 'save']" class="" v-else /> 
                            Save Details
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <modal-component :propShow="showModal" :propSize="'sm'" @closeModal="closeModal">
            <div class="text-lg text-center">
                <div v-if="modal_type == 'success'">
                    <font-awesome-icon :icon="['far', 'check-circle']" class="text-2xl text-green-500" /> <br>
                    {{ modal_message }}
                </div>
                <div v-else>
                    <font-awesome-icon :icon="['far', 'times-circle']" class="text-2xl text-red-500" /> <br>
                    {{ modal_message }}
                </div>
            </div>
        </modal-component>
    </div>
</template>

<script>
import $ from "jquery";
import Http from '../Mixins/HttpClient';
import ModalComponent from '../Pages/Components/ModalComponent.vue';
export default {
    components:{
        ModalComponent
    },
    data(){
        return {
            uploading:false,
            preview:false,
            fname:'',
            lname:'',
            lga_origin:'',
            state_origin:'',
            ward:'',
            address:'',
            lga:'',
            image:'',
            state:'',
            country:'',
            step:1,
            processing:false,
            userid: this.$page.user.id,
            showModal:false,
            modal_type:'',
            modal_message:''
        }
    },
    methods:{
        browseFile(){
            let imageBrowser = $('#temp_img_browser');
            imageBrowser.trigger('click');
        },
        changeImage(e){
            this.uploading = true;
            if(e.target.files && e.target.files[0]){
                let reader = new FileReader();
                reader.onload = function(e) {
                    $(`#temp_profile_img`).attr('src', e.target.result);
                    $(`#temp_profile_img`).hide();
                    $(`#temp_profile_img`).fadeIn(650);
                }
                reader.readAsDataURL(e.target.files[0]);
                this.image = e.target.files[0];
                this.preview = true;
                setTimeout(() => {
                    this.uploading = false
                }, 500);
            }
        },
        updateProfile(){
            this.processing = true;
            let formData = new FormData();
            formData.append('image', this.image);
            formData.append('firstname', this.fname);
            formData.append('lastname', this.lname);
            formData.append('lga_origin', this.lga_origin);
            formData.append('state_origin', this.state_origin);
            formData.append('lga', this.lga);
            formData.append('state', this.state);
            formData.append('address', this.address);
            formData.append('country', this.country);
            formData.append('userid', this.userid);

            Http.client.post('/user/update_profile', formData) 
            .then((res) => {
                if(res.data.status == 'success'){
                    this.modal_message = res.data.message;
                    this.modal_type = 'success';
                    this.showModal = true;
                    setTimeout(() => {
                        window.location.reload();
                    }, 100);
                }else{
                    this.modal_message = res.data.message;
                    this.modal_type = 'error';
                    this.showModal = true;
                }
                // this.clearFields();
                this.processing = false;
            })
            .catch((e) => {
                if (e.response) {
                    console.log(e.response.data.message);
                }else{
                    console.log('Network error!');
                }
                this.processing = false;
            });
        },
        closeModal(){
            this.showModal = false
        },
    }
}
</script>

<style scoped>
    
</style>
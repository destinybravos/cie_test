<template>
    <div class="bg-gray-300 min-h-screen p-6">
        <!-- Form Div -->
        <div class="mx-auto mt-16 bg-green-700 max-w-md rounded py-6 px-6 text-white">
            <form @submit.prevent="RegisterStudent">
                <div class="mb-4">
                    <label for="fname" class="block font-medium mb-1 font-semibold">
                        <font-awesome-icon :icon="['far', 'user']" /> 
                        Fullname
                    </label>
                    <input type="text" :class="inputClasses" v-model="fname" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block font-medium mb-1 font-semibold">
                        <font-awesome-icon :icon="['far', 'envelope']" /> 
                        Email Address
                    </label>
                    <input type="email" :class="inputClasses" v-model="email" required>
                </div>
                <div class="mb-4">
                    <label for="fname" class="block font-medium mb-1 font-semibold">
                        <font-awesome-icon :icon="['fas', 'phone-alt']" /> 
                        Phone Number
                    </label>
                    <input type="tel" :class="inputClasses" v-model="phone" required>
                </div>
                <div class="mb-4">
                    <label for="fname" class="block font-medium mb-1 font-semibold">
                        <font-awesome-icon :icon="['fas', 'sort-numeric-up-alt']" /> 
                        Age
                    </label>
                    <input type="number" :class="inputClasses" v-model="age" required>
                </div>
                <div class="mb-4">
                    <label for="lname" class="block font-medium mb-1 font-semibold">
                        <font-awesome-icon :icon="['fas', 'key']" /> 
                        Password
                    </label>
                    <input type="password" :class="inputClasses" v-model="pass" required>
                </div>
                <div class="mb-4">
                    <button class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent 
                        rounded-md font-semibold text-xs text-gray-900 uppercase tracking-widest hover:bg-gray-200
                        active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray 
                        transition ease-in-out duration-150">
                            <font-awesome-icon v-if="processing" :icon="['fas', 'circle-notch']" spin class="mr-2" />
                            <font-awesome-icon v-else :icon="['fas', 'user-plus']" class="mr-2" />    
                            Register User
                    </button>
                </div>
            </form>
        </div>
        <modal-component :propShow="showModal" :propSize="'sm'" @closeModal="closeModal">
            <div class="text-2xl text-center">
                <div v-if="modal_type == 'success'">
                    <font-awesome-icon :icon="['far', 'check-circle']" class="text-4xl text-green-500" /> <br>
                    {{ modal_message }}
                </div>
                <div v-else>
                    <font-awesome-icon :icon="['far', 'times-circle']" class="text-4xl text-red-500" /> <br>
                    {{ modal_message }}
                </div>
            </div>
        </modal-component>
    </div>
</template>

<script>
import Http from "../Mixins/HttpClient";
import ModalComponent from './Components/ModalComponent.vue';
export default {
  components: { ModalComponent },
    data(){
        return {
            fname:'',
            pass:'',
            phone:'',
            age:'',
            email:'',
            errors:[],
            inputClasses:'form-input rounded shadow-sm block w-full focus:text-gray-700 text-green-600',
            showModal:false,
            processing:false,
            modal_type:'',
            modal_message:''
        }
    },
    methods:{
        RegisterStudent(){
            this.processing = true;
            let student = {
                fullname: this.fname,
                password: this.pass,
                phone: this.phone,
                email: this.email,
                age: this.age,
            }
            Http.client.post('/register-student', student)
            .then((res) => {
                if(res.data.status == 'success'){
                    this.modal_message = res.data.message;
                    this.modal_type = 'success';
                    this.showModal = true;
                }else{
                    this.modal_message = res.data.message;
                    this.modal_type = 'error';
                    this.showModal = true;
                }
                this.clearFields();
                this.processing = false;
            })
            .catch((e) => {
                this.modal_message = 'An Error! Occurred. Please check your input and try again';
                this.modal_type = 'error';
                this.showModal = true;
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
        clearFields(){
            this.fname = '';
            this.pass = '';
            this.phone = '';
            this.age = '';
            this.email = '';        }
    }
}
</script>

<style>

</style>
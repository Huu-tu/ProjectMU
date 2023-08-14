<template>
    <div class="relative py-16 bg-gradient-to-br from-sky-50 to-gray-200">  
    <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
        <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
            <div class="rounded-xl bg-white shadow-xl">
                <div class="p-6 sm:p-16">
                    <div class="space-y-4">
                        <img src="https://tailus.io/sources/blocks/social/preview/images/icon.svg" loading="lazy" class="w-10" alt="tailus logo">
                        <h2 class="mb-8 text-2xl text-cyan-900 font-bold">Sign in to Continue the <br> best of Tailus.</h2>
                    </div>
                    <div class="mt-16 grid space-y-4">
                        <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                            <a class="relative flex items-center space-x-4 justify-center" @click="loginAuth()">
                                <img src="https://tailus.io/sources/blocks/social/preview/images/google.svg" class="absolute left-0 w-5" alt="google logo">
                                <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Continue with Google</span>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
  
<script>
  export default {
    name: "app",
    data() {
        return {  
            msg: "Welcome to Your Vue.js App" 
        };
    },
    methods:{
        loginAuth(){
            window.location.href = `http://127.0.0.1:8000/google/login`;
        }
    }
  }
</script>

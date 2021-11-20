<template>
    <Head title="Profile" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-b2w-900 leading-tight">
                Profile
            </h2>
        </template>


<body>

    <div class="bg-no-repeat bg-cover bg-center bg-fixed pt-24 pb-8 bg-b2w-300 max-w-screen mx-auto sm:px-6 lg:px-8 min-h-screen shadow-md" style="background-image: url('/svg/undraw_town_r6pc.svg')">
        <!-- component -->
<!-- This is an example component -->

    <div class="relative w-96 h-auto bg-opacity-95 bg-b2w-500 rounded-md pt-24 pb-8 px-4 shadow-md flex flex-col items-center flex w-8/12 bg-white shadow-md rounded-lg mx-auto">
        <div class="absolute rounded-full bg-gray-100 w-28 h-28 p-2 z-10 -top-8 shadow-lg">
            <div class="rounded-full bg-black w-full h-full overflow-auto">
                <img src="https://rairaksa.github.io/assets/img/rai.jpg">
            </div>
        </div>
        <label class="font-bold text-gray-100 text-lg">
            {{ $page.props.auth.user.name }}
        </label>
        <p class="text-center text-gray-200 mt-2 leading-relaxed">
            {{ $page.props.auth.user.email }}
        </p>
        <p class="text-center text-gray-200 mt-2 leading-relaxed">
            +60192273532
        </p>
        <a href="/dashboard/editprofile">
        <button
        id="button"
        type="button"
        class="w-full px-6 py-3 mt-3 text-xs text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-b2w-800 hover:bg-b2w-900 hover:shadow-lg focus:outline-none"
        >
        Edit Profile
        </button>
        </a>

    </div>
<!-- component -->
                        <!-- This is an example component -->
                            <div class="w-full">
                                <div class='my-4 flex w-8/12 bg-b2w-500 bg-opacity-95 shadow-md rounded-lg overflow-hidden mx-auto'>
                                    <div class="flex flex-col w-full">
                                        <div class="flex p-5 border-b">
                                            <div class="flex flex-col px-2 w-full">
                                                <span class="text-xs text-b2w-50 uppercase font-medium ">
                                                    bookings
                                                </span>
                                                <span class="text-sm text-white capitalize font-semibold pt-1">
                                                    carwash cyberjaya
                                                </span>
                                                <span class="text-xs text-gray-500 uppercase font-medium ">
                                                    Oct 20, 2021 17:00
                                                </span>
                                                <div class="flex justify-end">
                                                    <a href="/rate">
                                                    <button class="p-2 pl-5 pr-5 transition-colors duration-700 transform bg-b2w-900 hover:bg-yellow-500 text-gray-100 text-sm rounded-lg focus:border-4 border-b2w-900 shadow-md">Rate</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col p-5">
                                            <div class="border-b pb-1 flex justify-between items-center mb-2">
                                                <span class=" text-base font-semibold uppercase text-b2w-50"> HISTORY</span>
                                            </div>

                                            <div class="flex border-b py-3 cursor-pointer hover:shadow-md px-2 ">
                                                <div class="flex flex-col px-2 w-full">

                                                    <span class="text-sm text-white capitalize font-semibold pt-1">
                                                    Carwash Putrajaya
                                                    </span>
                                                    <span class="text-xs text-gray-500 uppercase font-medium ">
                                                        Oct 19, 2021 17:00
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex border-b py-3 cursor-pointer hover:shadow-md px-2 ">
                                                <div class="flex flex-col px-2 w-full">

                                                    <span class="text-sm text-white capitalize font-semibold pt-1">
                                                    Kedai Samad
                                                    </span>
                                                    <span class="text-xs text-gray-500 uppercase font-medium ">
                                                        Oct 15, 2021 16:00
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



            </div>
</body>
    </BreezeAuthenticatedLayout>
</template>



<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
    },
    props: {
        users: Array,
    },
}
</script>

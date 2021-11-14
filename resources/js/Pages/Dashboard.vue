<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
                    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

                    <!-- component -->
                    <section>
                        <div class="w-full px-4 mx-auto">
                            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 rounded-lg mt-16">
                                <div class="px-6">
                                    <div class="flex flex-wrap justify-center">
                                        <div class="w-full px-4 flex justify-center">
                                            <div class="relative">
                                            <img alt="..." src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
                                            </div>
                                        </div>
                                    <div class="w-full px-4 text-center mt-20">

                                    </div>
                                </div>
                                <div class="text-center mt-12">
                                    <h3 class="text-xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                                    Hensemelisationalism
                                    </h3>
                                    <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                                    <i class="mr-2 text-lg text-blueGray-400"></i>
                                    test@test.com
                                    </div>
                                    <div class="mb-2 text-blueGray-600 mt-10">
                                    <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
                                    Solution Manager - Creative Tim Officer
                                    </div>
                                    <div class="mb-2 text-blueGray-600">
                                    <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>
                                    University of Computer Science
                                    </div>
                                </div>
                                <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                                    <div class="flex flex-wrap justify-center">
                                    <div class="w-full lg:w-9/12 px-4 mb-10">
                                        <a href="javascript:void(0);" class="font-normal text-pink-500">
                                        Edit Profile
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            </div>







                            </div>
                        </div>
                    </section>


<!-- component -->
                        <!-- This is an example component -->
                            <div class="w-full">
                                <div class='flex w-8/12 bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
                                    <div class="flex flex-col w-full">
                                        <div class="flex p-5 border-b">
                                            <div class="flex flex-col px-2 w-full">
                                                <span class="text-xs text-gray-700 uppercase font-medium ">
                                                    bookings
                                                </span>
                                                <span class="text-sm text-red-500 capitalize font-semibold pt-1">
                                                    carwash cyberjaya
                                                </span>
                                                <span class="text-xs text-gray-500 uppercase font-medium ">
                                                    Oct 20, 2021 17:00
                                                </span>
                                                <div class="flex justify-end">
                                                    <img class="w-5 cursor-pointer" src="https://www.iconpacks.net/icons/2/free-favourite-icon-2765-thumb.png" />
                                                    <img class="w-5 cursor-pointer" src="https://www.iconpacks.net/icons/2/free-favourite-icon-2765-thumb.png" />
                                                    <img class="w-5 cursor-pointer" src="https://www.iconpacks.net/icons/2/free-favourite-icon-2765-thumb.png" />
                                                    <img class="w-5 cursor-pointer" src="https://www.iconpacks.net/icons/2/free-favourite-icon-2765-thumb.png" />
                                                    <img class="w-5 cursor-pointer" src="https://www.iconpacks.net/icons/2/free-favourite-icon-2765-thumb.png" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col p-5">
                                            <div class="border-b pb-1 flex justify-between items-center mb-2">
                                                <span class=" text-base font-semibold uppercase text-gray-700"> HISTORY</span>
                                            </div>

                                            <div class="flex border-b py-3 cursor-pointer hover:shadow-md px-2 ">
                                                <div class="flex flex-col px-2 w-full">

                                                    <span class="text-sm text-red-500 capitalize font-semibold pt-1">
                                                    Carwash Putrajaya
                                                    </span>
                                                    <span class="text-xs text-gray-500 uppercase font-medium ">
                                                        Oct 19, 2021 17:00
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex border-b py-3 cursor-pointer hover:shadow-md px-2 ">
                                                <div class="flex flex-col px-2 w-full">

                                                    <span class="text-sm text-red-500 capitalize font-semibold pt-1">
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
                </div>
            </div>
        </div>
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
}
</script>

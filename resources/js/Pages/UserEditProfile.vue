<template>
    <Head title="Edit Profile" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-b2w-900 leading-tight">
                Edit Profile
            </h2>
        </template>

                <!-- component -->
<div class="relative min-h-screen flex items-center justify-center bg-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center">
	<div class="absolute bg-b2w-300 inset-0 z-0 bg-no-repeat bg-cover bg-center bg-fixed" style="background-image: url('/svg/undraw_stars.svg')"></div>
	<div class="max-w-md w-full space-y-8 p-10 bg-b2w-500 rounded-xl shadow-md z-10 opacity-95">
<div class="grid  gap-8 grid-cols-1">
	<div class="flex flex-col ">
			<div class="flex flex-col sm:flex-row items-center">
				<h2 class="font-semibold text-lg mr-auto text-white">Edit Your Profile</h2>
				<div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
			</div>
			<div class="mt-5">
				<div class="form">
					<div class="md:space-y-2 mb-3">
						<label class="text-sm font-semibold text-gray-100 py-2">Avatar<abbr class="hidden" title="required">*</abbr></label>
						<div class="flex items-center py-6">
							<div class="w-12 h-12 mr-4 flex-none rounded-xl border overflow-hidden">
								<img class="w-12 h-12 mr-4 object-cover" src="/images/blank_profile.png" alt="Avatar Upload">
                </div>
								<label class="cursor-pointer ">
                <span class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-b2w-900 hover:bg-b2w-700 hover:shadow-lg">Browse</span>
                    <input type="file" class="hidden" :multiple="multiple" :accept="accept">
                </label>
							</div>
						</div>

							<div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-semibold text-gray-100">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-semibold text-gray-100">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="you@company.com" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-6">

                        <label for="phone" class="text-sm font-semibold text-gray-100">Phone Number</label>
                        <input type="text" name="phone" id="phone" placeholder="+1 (555) 1234-567" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>

                    <div class="mb-6">

                        <label for="password" class="text-sm font-semibold text-gray-100">Password</label>
                        <input type="password" name="password" id="password" placeholder="**********" required class="appearance-none w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>

                    <div class="mb-6">

                        <label for="confirmpassword" class="text-sm font-semibold text-gray-100">Confirm Password</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="**********" required class="appearance-none w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>

								<p class="text-xs text-red-500 text-right my-3">Required fields are marked with an
									asterisk <abbr title="Required field">*</abbr></p>
								<a href="/dashboard">
									<button
                                    id="button"
                                    type="button"
                                    class="w-full px-6 py-3 mt-3 text-sm text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-b2w-800 hover:bg-b2w-900 hover:shadow-lg focus:outline-none"
                                    >
                                    Save Changes
                                    </button>
                                    </a>
                                    <a href="/dashboard">
									<button
                                    id="button"
                                    type="button"
                                    class="w-full px-6 py-3 mt-3 text-sm text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-red-800 hover:bg-red-900 hover:shadow-lg focus:outline-none"
                                    >
                                    Cancel
                                    </button>
                                    </a>
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

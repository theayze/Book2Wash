<template>
    <Head title="Add Vehicle" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-b2w-900 leading-tight">
                Add Vehicle
            </h2>
        </template>

                <!-- component -->
        <div class="bg-no-repeat bg-cover bg-center bg-fixed min-h-screen bg-b2w-300 flex justify-center items-center" style="background-image: url('/svg/undraw_vehicle_sale.svg')">
            <div class="py-12 px-12 bg-b2w-500 rounded-2xl shadow-md z-20 opacity-95">
                <div>
                    <h1 class="text-3xl text-white font-bold text-center mb-4 cursor-pointer">Add a New Vehicle</h1>
                    <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-200 tracking-wide cursor-pointer">Save a vehicle for your next booking appointments!</p>
                </div>
                <div class="space-y-4">
                    <input type="text" placeholder="Vehicle No. Plate" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />

                    <div class="w-full flex flex-col mb-3">
										<label class="font-semibold text-white py-2">Type<abbr title="required">*</abbr></label>
										<select class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full " required="required" name="integration[city_id]" id="integration_city_id">
                                        <option value="">Select Vehicle Type</option>
                                        <option value="">Hatchback</option>
                                        <option value="">Sedan</option>
                                        <option value="">SUV</option>
                                        <option value="">Motorcycle</option>
                                        </select>
										<p class="text-sm text-red-500 hidden mt-3" id="error">Please fill out this field.</p>
					</div>
            </div>
                    <div class="text-center mt-6">
                        <a href="/vehicles">
                        <button class="py-3 w-64 text-xl text-white bg-b2w-900 rounded-2xl shadow-md">Add Vehicle</button>
                        </a>
                    </div>
                    <div class="text-center mt-6">
                        <a href="/vehicles">
                        <button class="py-3 w-64 text-xl text-white bg-red-900 rounded-2xl shadow-md">Back</button>
                        </a>
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

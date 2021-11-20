<template>
    <Head title="Search" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <a href="/search">
                    <button type="button" class="w-full bg-b2w-700 px-4 py-3 rounded text-white text-xs leading-tight font-semibold hover:bg-b2w-900 transition duration-200 each-in-out">Back to Search</button>
            </a>
        </template>


        <!-- component -->
<body>
        <!-- https://dribbble.com/shots/10977400-Freelance-Projects-Dashboard -->
        <div class="bg-no-repeat bg-cover bg-center bg-fixed bg-b2w-300 min-h-screen flex justify-center items-center shadow-xl" style="background-image: url('/svg/undraw_town_r6pc.svg')">

            <div class="flex flex-col lg:flex-row w-full justify-center gap-7">

                <div class="bg-b2w-500 bg-opacity-95 w-full lg:w-1/3 p-10 rounded-lg order-2 lg:order-first filter drop-shadow-md">
                    <h1 class="text-white font-bold tracking-wider mb-4">Make a New Booking</h1>

                    <h1 class="uppercase font-bold tracking-widest text-b2w-50 text-sm">Select Booking Time</h1>

                    <div class="my-4">
                    <div class="flex flex-row space-x-4">
                        <div class="relative z-0 w-full mb-5">
                        <input
                            type="text"
                            name="date"
                            placeholder=" "
                            onclick="this.setAttribute('type', 'date');"
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200 text-white"
                        />
                        <label for="date" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Date</label>
                        <span class="text-sm text-red-600 hidden" id="error">Date is required</span>
                        </div>
                        <div class="relative z-0 w-full">
                        <input
                            type="text"
                            name="time"
                            placeholder=" "
                            onclick="this.setAttribute('type', 'time');"
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200 text-white"
                        />
                        <label for="time" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Time</label>
                        <span class="text-sm text-red-600 hidden" id="error">Time is required</span>
                        </div>
                    </div>
                    </div>

                    <h1 class="uppercase font-bold tracking-widest text-b2w-50 text-sm mb-4">Total price</h1>
                    <div class="text-white">
                        <p>Selected Vehicle : {{ selected.plate}}</p>
                        <p>Vehicle Type : {{ selected.value }}</p>
                        <p>Type of Wash : Normal</p>
                        <p>Total Price : {{ selected.price }}</p>
                    </div>


                    <h1 class="uppercase font-bold tracking-widest text-b2w-50 text-sm mt-4">Add payment method</h1>


                    <div class="my-4 flex justify-between gap-5">
                            <button @click="setPaymentType(1)" class="border-2 focus:border-b2w-900 border-gray-200 rounded-lg py-2  w-full text-white text-center">
                                Cash
                            </button>
                            <button @click="setPaymentType(2)" class="border-2 focus:border-b2w-900 border-gray-200 rounded-lg py-2 w-full  text-white text-center">
                                Debit/Credit Card
                            </button>
                    </div>

                <a v-if="this.paymentType==1" href="/bookingcomplete">
                    <button class="w-full rounded-sm py-7 mt-7 text-center bg-b2w-900 text-white font-bold tracking-wider">Procced to Payment    &rarr;</button>
                </a>
                <a v-else href="/payment">
                    <button class="w-full rounded-sm py-7 mt-7 text-center bg-b2w-900 text-white font-bold tracking-wider">Procced to Payment    &rarr;</button>
                </a>
                </div>

                <div class="w-full lg:w-1/5 order-1 lg:order-last flex flex-col justify-start gap-7">
                    <div class="bg-b2w-500 bg-opacity-95 p-2 rounded-lg text-center filter drop-shadow-md">
                        <img src="/images/carwashcyber.jpg" alt="" class="h-40 w-full object-cover content-center rounded-t-lg"/>
                        <h1 class="text-center font-bold tracking-wider text-white mt-4">Carwash Cyberjaya</h1>
                        <p class="text-gray-500 mt-1 text-center">Jalan Teknorat Cyberjaya</p>
                        <br/>

                        <a href="/viewratings">
                        <button class="bg-b2w-900 py-2 px-4 rounded-full text-white text-sm font-semibold">View Ratings</button>
                        </a>

                        <div class="mt-5 flex justify-center mx-10 mb-5">
                            <div class="text-center">
                                <h1 class="text-gray-500">Rating</h1>
                                <p class="text-3xl text-white">4.5</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-b2w-500 bg-opacity-95 rounded-lg p-6 filter drop-shadow-md">
                        <h1 class="font-bold tracking-wider text-white">Select Your Vehicle</h1>


                        <select v-model="selectedVal" class="mt-4 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-b2w-900 focus:border-b2w-900 sm:text-sm">
                            <option v-for="option in options" :key="option">{{option.plate}}</option>
                        </select>

                        <p class="text-sm text-gray-500 m-4">Or</p>

                        <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
								<div class="w-full flex flex-col mb-3">
									<input placeholder="Insert Vehicle Plate Number" class="appearance-none block w-full border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-b2w-900 focus:border-b2w-900 sm:text-sm h-10 px-4" type="text" name="integration[street_address]" id="integration_street_address">
                                    </div>
                                        <div class="w-full flex flex-col mb-3">
                                        <select class="block w-full border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-b2w-900 focus:border-b2w-900 sm:text-sm h-10 px-4 md:w-full " required="required" name="integration[city_id]" id="integration_city_id">
                                        <option value="">Select Vehicle Type</option>
                                        <option value="">Hatchback</option>
                                        <option value="">Sedan</option>
                                        <option value="">SUV</option>
                                        <option value="">Motorcycle</option>
                                        </select>
									</div>
								</div>

                    </div>

                </div>
            </div>
        </div>
    </body>


    </BreezeAuthenticatedLayout>
</template>

<style>
  .-z-1 {
    z-index: -1;
  }

  .origin-0 {
    transform-origin: 0%;
  }

  input:focus ~ label,
  input:not(:placeholder-shown) ~ label,
  textarea:focus ~ label,
  textarea:not(:placeholder-shown) ~ label,
  select:focus ~ label,
  select:not([value='']):valid ~ label {
    /* @apply transform; scale-75; -translate-y-6; */
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
      skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    --tw-scale-x: 0.75;
    --tw-scale-y: 0.75;
    --tw-translate-y: -1.5rem;
  }

  input:focus ~ label,
  select:focus ~ label {
    /* @apply text-black; left-0; */
    --tw-text-opacity: 1;
    color: rgba(0, 0, 0, var(--tw-text-opacity));
    left: 0px;
  }

</style>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3';
import Button from '@/Components/Button.vue';
import Input from '@/Components/Input.vue';

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        Button,
        Input,
    },

    data:() => ({
        paymentType:null,
        selectedVal: "VAE 2483",

        options: [{
        plate: 'VAE 2483',
        value: 'Sedan',
        price: 'RM12.00'
        },
        {
        plate: 'PNU 151',
        value: 'Hatchback',
        price: 'RM10.00'
        },
        {
        plate: 'WWU 2871',
        value: 'SUV',
        price: 'RM14.00'
        },
    ]
    }),

    computed: {
    selected() {

        return this.options.find(op => {
        return op.plate == this.selectedVal
        })
    }
    },

    updated(){
        console.log(this.paymentType)
    },

    methods: {
        setPaymentType(type)
        {
            this.paymentType=type
            console.log("test"+this.paymentType)
        }
    },
}


</script>

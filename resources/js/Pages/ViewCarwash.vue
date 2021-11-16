<template>
    <Head title="Search" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-b2w-900 leading-tight">
                New Booking
            </h2>
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
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
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
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                        />
                        <label for="time" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Time</label>
                        <span class="text-sm text-red-600 hidden" id="error">Time is required</span>
                        </div>
                    </div>
                    </div>

                    <h1 class="text-gray-700 font-bold tracking-wider">Payment details</h1>
                    <div class="my-10">
                        <div class="flex justify-between items-center">
                            <div class="flex justify-items-start gap-3 items-stretch">
                                <div class="bg-gray-200 w-14"></div>
                                <div>
                                    <h1 class="font-bold text-gray-700">Credit card</h1>
                                    <p class="text-sm text-gray-500">2344 xxxx xxxx xxxx 4444</p>
                                </div>
                            </div>
                            <div>
                                <input type="text" placeholder="cvc" class="w-20 border-2 border-gray-300 outline-none rounded-sm px-4 py-2 focus:border-blue-600"/>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-5">
                            <div class="flex justify-items-start gap-3 items-stretch">
                                <div class="bg-gray-200 w-14"></div>
                                <div>
                                    <h1 class="font-bold text-gray-700">Credit card</h1>
                                    <p class="text-sm text-gray-500">2344 xxxx xxxx xxxx 4444</p>
                                </div>
                            </div>
                            <div>
                                <input type="text" placeholder="cvc" class="w-20 border-2 border-gray-300 outline-none rounded-sm px-4 py-2 focus:border-blue-600"/>
                            </div>
                        </div>
                    </div>

                    <h1 class="uppercase font-bold tracking-widest text-b2w-50 text-sm">Add payment method</h1>


                    <div class="my-4 flex justify-between gap-5">
                            <button class="border-2 focus:border-b2w-900 border-gray-200 rounded-lg py-2  w-full text-white text-center">
                                Cash
                            </button>
                            <button class="border-2 focus:border-b2w-900 border-gray-200 rounded-lg py-2 w-full  text-white text-center">
                                Debit/Credit Card
                            </button>
                    </div>

                <a href="/bookingcomplete">
                    <button class="w-full rounded-sm py-7 mt-7 text-center bg-b2w-900 text-white font-bold tracking-wider">Procced to Payment    &rarr;</button>
                </a>
                </div>
                <div class="w-full lg:w-1/5 order-1 lg:order-last flex flex-col justify-start gap-7">
                    <div class="bg-b2w-500 bg-opacity-95 p-2 rounded-lg text-center filter drop-shadow-md">
                        <img src="/images/carwashcyber.jpg" alt="" class="h-20 w-full object-cover content-center rounded-t-lg"/>
                        <h1 class="text-center font-bold tracking-wider text-white mt-4">Carwash Cyberjaya</h1>
                        <p class="text-gray-500 mt-1 text-center">Jalan Teknorat Cyberjaya</p>
                        <br/>
                        <button class="bg-b2w-900 py-2 px-4 rounded-full text-white text-sm font-semibold">View Ratings</button>

                        <div class="mt-5 flex justify-center mx-10 mb-5">
                            <div class="text-center">
                                <h1 class="text-gray-500">Rating</h1>
                                <p class="text-3xl text-white">4.5</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-b2w-500 bg-opacity-95 rounded-lg p-6 filter drop-shadow-md">
                        <h1 class="font-bold tracking-wider text-white">Select Your Vehicle</h1>
                        <p class="text-sm text-gray-500 mt-2">Please set up your hourly or fixed rate so that the client is aware of your pricing</p>
                        <div class="my-4 flex justify-between gap-5">
                            <div class="border-2 border-gray-200 rounded-lg py-2  w-full text-gray-700 text-center">
                                Hourly
                            </div>
                            <div class="border-2 border-gray-200 rounded-lg py-2 w-full  text-gray-700 text-center">
                                Fixed
                            </div>
                        </div>

                        <span class="text-gray-400">$</span> <span class="text-2xl text-black">180</span><span class="text-gray-400"> / hour</span>

                        <div class="mt-3 w-full border-t-4 border-gray-300 rounded-full relative">
                            <div class="w-4/5 absolute left-0 -top-1 border-t-4 border-blue-600 rounded-full">
                                <div class="absolute w-5 h-5 bg-blue-600 rounded-full top-0 bottom-0 my-auto -right-1 ring-1 ring-blue-600 ring-offset-2 ring-offset-white">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span>$20</span>
                            <span>$300</span>
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
}


</script>

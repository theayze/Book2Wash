<template>

        <div>


    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-b2wdark-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <img src="/images/BOOK2WASHFIX2.png">
                </div>
            </div>

            <nav class="mt-10">
                <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-b2wdark-600 hover:bg-opacity-25 hover:text-gray-100" href="/Admin">
                    <span class="mx-3">Dashboard</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 bg-b2wdark-600 bg-opacity-25 text-gray-100" href="/BookingHistory">
                    <span class="mx-3">Booking History</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-b2wdark-600 hover:bg-opacity-25 hover:text-gray-100"  href="/Reviews">
                    <span class="mx-3">Reviews</span>
                </a>

            </nav>
        </div>
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-b2w-900">
                <div class="flex items-center">
                    <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </button>

                    <div class="relative mx-4 lg:mx-0">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </span>

                        <input class="form-input w-32 sm:w-64 rounded-md pl-10 pr-4 focus:border-indigo-600" type="text"
                            placeholder="Search">
                    </div>
                </div>

                <a>
                    <button type="button" class="justify-right bg-b2w-900 text-sm px-4 py-1 shadow-md m-1 rounded text-gray-200 font-semibold hover:bg-b2wdark-900 transition duration-200 each-in-out">Log Out</button>
                </a>



            </header>
            <main class="bg-no-repeat bg-cover bg-center bg-fixed flex-1 overflow-x-hidden overflow-y-auto bg-gray-300" style="background-image: url('/svg/Rect Light.svg')">
                <div class="container mx-auto px-6 py-8">
                    <h3 class="text-gray-700 text-3xl font-medium">Booking History</h3>

                    <!-- <div class="w-full h-screen bg-blue-200 flex justify-center items-center"
							>
								<ul class="container flex flex-col gap-4 p-16">
									<li class="border-gray-400 flex flex-row">

        <div class="bg-gray-100 rounded-lg w-full h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400">
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Car Plate Number</label>
                <label class="text-gray-800 text-4xl font-bold">VUE 1679</label>

            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Date/Time</label>
                <label class="text-gray-800 text-4xl font-bold">29/10/2021 16:32</label>

            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Payment Amount</label>
                <label class="text-green-800 text-4xl font-bold">RM12.38</label>

            </div>
        </div>

									</li>
									<li class="border-gray-400 flex flex-row mb-2">
										<div class="bg-gray-100 rounded-lg w-full h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400">
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Car Plate Number</label>
                <label class="text-gray-800 text-4xl font-bold">VUE 1679</label>

            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Date/Time</label>
                <label class="text-gray-800 text-4xl font-bold">29/10/2021 16:32</label>

            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Payment Amount</label>
                <label class="text-green-800 text-4xl font-bold">RM12.38</label>

            </div>
        </div>
									</li>
									<li class="border-gray-400 flex flex-row mb-2">
										<div class="bg-gray-100 rounded-lg w-full h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400">
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Car Plate Number</label>
                <label class="text-gray-800 text-4xl font-bold">VUE 1679</label>

            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Date/Time</label>
                <label class="text-gray-800 text-4xl font-bold">29/10/2021 16:32</label>

            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Payment Amount</label>
                <label class="text-green-800 text-4xl font-bold">RM12.38</label>

            </div>
        </div>
									</li>
									<li class="border-gray-400 flex flex-row mb-2">
										<div class="bg-gray-100 rounded-lg w-full h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400">
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Car Plate Number</label>
                <label class="text-gray-800 text-4xl font-bold">VUE 1679</label>

            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Date/Time</label>
                <label class="text-gray-800 text-4xl font-bold">29/10/2021 16:32</label>

            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Payment Amount</label>
                <label class="text-green-800 text-4xl font-bold">RM12.38</label>

            </div>
        </div>
									</li>
									<li class="border-gray-400 flex flex-row mb-2">
										<div class="bg-gray-100 rounded-lg w-full h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400">
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Car Plate Number</label>
                <label class="text-gray-800 text-4xl font-bold">VUE 1679</label>

            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Date/Time</label>
                <label class="text-gray-800 text-4xl font-bold">29/10/2021 16:32</label>

            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Payment Amount</label>
                <label class="text-green-800 text-4xl font-bold">RM12.38</label>

            </div>
        </div>
									</li>
									<li class="border-gray-400 flex flex-row mb-2">
										<div class="bg-gray-100 rounded-lg w-full h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400">
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Car Plate Number</label>
                <label class="text-gray-800 text-4xl font-bold">VUE 1679</label>

            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Date/Time</label>
                <label class="text-gray-800 text-4xl font-bold">29/10/2021 16:32</label>

            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Payment Amount</label>
                <label class="text-green-800 text-4xl font-bold">RM12.38</label>

            </div>
        </div>
									</li>
								</ul>
							</div> -->


                <div class="mt-8">

                    </div>

                    <div class="flex flex-col mt-8">
                        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                            <div
                                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                                <table class="min-w-full">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Car No.Plate</th>
                                            <th
                                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Car Type</th>
                                            <th
                                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Status</th>
                                            <th
                                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Date/Time</th>
                                            <th
                                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Total</th>
                                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                        </tr>
                                    </thead>

                                    <tbody class="bg-white">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="flex items-center">

                                                    <div class="ml-4">
                                                        <div class="text-sm leading-5 font-medium text-gray-900">VTD 7263
                                                        </div>
                                                        <div class="text-sm leading-5 text-gray-500">Cristiano Ronaldo</div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">Hatchback</div>
                                                <div class="text-sm leading-5 text-gray-500"></div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Cash</span>
                                            </td>

                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                                12-12 13:00</td>

                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                                RM 10.00</td>

                                            <td
                                                class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                                <a href="#" class="text-b2w-800 hover:text-b2wdark-900">Info</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="flex items-center">

                                                    <div class="ml-4">
                                                        <div class="text-sm leading-5 font-medium text-gray-900">VFA 9487
                                                        </div>
                                                        <div class="text-sm leading-5 text-gray-500">Leonel Messi</div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">Sedan</div>
                                                <div class="text-sm leading-5 text-gray-500"></div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Credit/Debit Card</span>
                                            </td>

                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                                12-12 16:10</td>

                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                                RM 12.00</td>

                                            <td
                                                class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                                <a href="#" class="text-b2w-800 hover:text-b2wdark-900">Info</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="flex items-center">

                                                    <div class="ml-4">
                                                        <div class="text-sm leading-5 font-medium text-gray-900">BEA 6237
                                                        </div>
                                                        <div class="text-sm leading-5 text-gray-500">Ahmad Ehsan</div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">Sedan</div>
                                                <div class="text-sm leading-5 text-gray-500"></div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Cash</span>
                                            </td>

                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                                13-12 13:00</td>

                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                                RM 12.00</td>

                                            <td
                                                class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                                <a href="#" class="text-b2w-800 hover:text-b2wdark-900">Info</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="flex items-center">

                                                    <div class="ml-4">
                                                        <div class="text-sm leading-5 font-medium text-gray-900">TAS 3678
                                                        </div>
                                                        <div class="text-sm leading-5 text-gray-500">Fattah Amin</div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">SUV</div>
                                                <div class="text-sm leading-5 text-gray-500"></div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Credit/Debit Card</span>
                                            </td>

                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                                13-12 18:00</td>

                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                                RM 16.00</td>

                                            <td
                                                class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                                <a href="#" class="text-b2w-800 hover:text-b2wdark-900">Info</a>
                                            </td>
                                        </tr>




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>
            </main>
        </div>
    </div>
</div>





</template>

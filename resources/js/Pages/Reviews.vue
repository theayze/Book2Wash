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

                <a class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-b2wdark-600 hover:bg-opacity-25 hover:text-gray-100" href="/BookingHistory">
                    <span class="mx-3">Booking History</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 bg-b2wdark-600 bg-opacity-25 text-gray-100"  href="/Reviews">
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
                    <h3 class="text-gray-700 text-3xl font-medium">Reviews</h3>


                <div class="bg-white shadow-md rounded-lg my-4 px-4 py-4 w-full">
                <div class="mb-1 tracking-wide px-4 py-4" >
                    <h2 class="text-gray-800 font-semibold mt-1">67 Users reviews</h2>
                    <div class="-mx-8 px-8 pb-3 w-1/2">
                        <div class="flex items-center mt-1">
                            <div class="w-1/5 text-b2w-900 tracking-tighter">
                            <span>5 star</span>
                            </div>
                            <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class=" w-7/12 bg-b2w-900 rounded-lg h-2"></div>
                            </div>
                            </div>
                            <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-sm">51%</span>
                            </div>
                        </div><!-- first -->
                        <div class="flex items-center mt-1">
                            <div class="w-1/5 text-b2w-900 tracking-tighter">
                            <span>4 star</span>
                            </div>
                            <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class="w-1/5 bg-b2w-900 rounded-lg h-2"></div>
                            </div>
                            </div>
                            <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-sm">17%</span>
                            </div>
                        </div><!-- second -->
                        <div class="flex items-center mt-1">
                            <div class="w-1/5 text-b2w-900 tracking-tighter">
                            <span>3 star</span>
                            </div>
                            <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class=" w-3/12 bg-b2w-900 rounded-lg h-2"></div>
                            </div>
                            </div>
                            <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-sm">19%</span>
                            </div>
                        </div><!-- thierd -->
                        <div class="flex items-center mt-1">
                            <div class=" w-1/5 text-b2w-900 tracking-tighter">
                            <span>2 star</span>
                            </div>
                            <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class=" w-1/5 bg-b2w-900 rounded-lg h-2"></div>
                            </div>
                            </div>
                            <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-sm">8%</span>
                            </div>
                        </div><!-- 4th -->
                        <div class="flex items-center mt-1">
                            <div class="w-1/5 text-b2w-900 tracking-tighter">
                            <span>1 star</span>
                            </div>
                            <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class=" w-2/12 bg-b2w-900 rounded-lg h-2"></div>
                            </div>
                            </div>
                            <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-sm">5%</span>
                            </div>
                        </div><!-- 5th -->
                    </div>
                </div>

                <div class="bg-white max-w-xl rounded-2xl px-10 py-8 border-b border-t transition duration-500">
                        <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">Carwash Review</h1>
                        <div class="flex mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        </div>
                        <p class="mt-4 text-md text-gray-600">The manager was very kind and accommodating.</p>
                </div>

                <div class="bg-white max-w-xl rounded-2xl px-10 py-8 border-b border-t transition duration-500">
                        <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">Excellent</h1>
                        <div class="flex mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        </div>
                        <p class="mt-4 text-md text-gray-600">Good Carwash and everything is perfectly fine.</p>
                </div>

                </div>






                </div>
            </main>
        </div>
    </div>
</div>





</template>




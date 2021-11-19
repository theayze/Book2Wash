<template>
    <html>
     <div class="flex items-center justify-center w-screen h-screen bg-blue-200">
  <form class="md:w-1/2-screen m-0 p-5 bg-white w-full tw-h-full shadow md:rounded-lg ">
    
    <div class="flex items-center justify-center text-2xl text-indigo-900">Book a Carwash! <small class="pl-2 text-gray-500">Let Us Know You're Coming</small></div>
    <div class="flex items-center justify-center mt-6 ">
    <label class="pb-2 text-gray-700 font-semibold">Date</label>
    <label class="pb-2 text-gray-700 font-semibold">Time</label>
    </div>
    <div class="flex items-center justify-center mt-6 ">
      <input type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" >
      <input type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" >
    </div>
    
    <div class="flex-col flex py-3">
      <label class="pb-2 text-gray-700 font-semibold">Car Number Plate </label>
      <input type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" >
    </div>
    
    <div class="flex-col flex py-3">
      <label class="pb-2 text-gray-700 font-semibold">Form of payment</label>
      <input type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" >

    </div>
    
    <div class="mt-2">
      <button class="p-3 bg-indigo-400 text-white w-full hover:bg-indigo-300">Book Carwash!</button>
    </div>
  </form>
</div>  
    </html>
</template>
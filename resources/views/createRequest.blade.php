<script src="https://unpkg.com/flowbite@1.4.7/dist/datepicker.js"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Request') }}
        </h2>
    </x-slot>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
                    <form class="space-y-8" action="/createRequestNew" method="post">
                        @csrf
                        <div class="space-y-8 divide-y divide-gray-200">
                            <div>
                                <div>
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">Create Request</h3>
                                </div>
                            </div>

                            <div class="pt-8">
                                <div class="sm:col-span-3">
                                    <label for="platform" class="block text-sm font-medium text-gray-700">
                                        Platform </label>
                                    <div class="mt-1">
                                        <select id="platform" name="platform"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            <option value="ps4">PS4</option>
                                            <option value="ps5">PS5</option>
                                            <option value="xbox">Xbox</option>
                                            <option value="pc">PC</option>
                                            <option value="ps3">PS3</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="game" class="block text-sm font-medium text-gray-700">
                                        Game </label>
                                    <div class="mt-1">
                                        <select id="game" name="game"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            <option value="fifa-22">Fifa 22</option>
                                            <option value="fifa-21">Fifa 21</option>
                                            <option value="fifa-20">Fifa 20</option>
                                            <option value="fifa-19">Fifa 19</option>
                                            <option value="pes-2022">Pes 2022 (We Football)</option>
                                            <option value="pes-2021">Pes 2021</option>
                                            <option value="pes-2020">Pes 2020</option>
                                            <option value="pes-2019">Pes 2019</option>
                                            <option value="mortal-kombat">Mortal Kombat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="phoneNumber" class="block text-sm font-medium text-gray-700"> Phone Number </label>
                                    <div class="mt-1">
                                        <input type="text" name="phoneNumber" id="phoneNumber" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="whatsapp" class="block text-sm font-medium text-gray-700"> Whatsapp Number </label>
                                    <div class="mt-1">
                                        <input type="text" name="whatsapp" id="whatsapp" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="location" class="block text-sm font-medium text-gray-700">
                                        Location </label>
                                    <div class="mt-1">
                                        <select id="location" name="location"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            <option>Helipolis</option>
                                            <option>Nasr-City</option>
                                            <option>5th-Settlement</option>
                                            <option>Giza</option>
                                            <option>Zayed</option>
                                            <option>Downtown</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <div class="relative mt-2 p-2 ">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input name="datePicker" datepicker="" type="text"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                                               placeholder="Select date">
                                    </div>
                                </div>
                                <!-- component -->
                                <div class="sm:col-span-3">
                                    <div class="mt-2 p-2 bg-white rounded-lg ">
                                        <div class="flex">
                                            <select name="hours"
                                                    class="bg-transparent text-xl appearance-none outline-none">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">10</option>
                                                <option value="12">12</option>
                                            </select>
                                            <span class="text-xl mr-3"> </span>
                                            <select name="minutes"
                                                    class="bg-transparent text-xl appearance-none outline-none mr-4">
                                                <option value="0">00</option>
                                                <option value="30">30</option>
                                            </select>
                                            <select name="ampm"
                                                    class="bg-transparent text-xl appearance-none outline-none">
                                                <option value="am">AM</option>
                                                <option value="pm">PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <div class="mt-2 p-2 bg-white rounded-lg ">
                                        <div class="flex">
                                            <span class="text-xl mr-3"><input type="text" name="user_id" hidden  value="{{ \Illuminate\Support\Facades\Auth::id() }}"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="flex justify-end">
                                <button type="submit"
                                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    .sm\:col-span-3 {
        padding: 11px 0;
    }
</style>

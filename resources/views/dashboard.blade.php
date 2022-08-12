<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Reservations') }}
        </h2>
    </x-slot>
    @php
        $userId = \Illuminate\Support\Facades\Auth::id();

    @endphp

    <div id="matches-wrapper" class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Horray.. We Found A Match, good luck and have fun</h2>
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <ul id="matches"  role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach($matched_request as $key => $request_data)
                            @php
                                $requestOwnerId = \App\Models\User::find($request_data->user_id);
                            @endphp
                            <li class="col-span-1 bg-gray-100 rounded-lg shadow divide-y divide-gray-300  @if ($userId == $requestOwnerId->id)  bg-blue-100 user-own-reservation @endif">
                                <div class="w-full flex items-center justify-between p-6 space-x-6">
                                    <div class="flex-1 truncate">
                                        <div class="items-center ">
                                            <h3 class="text-gray-900 text-sm font-medium truncate">{{ $request_data->hours . ':' . $request_data->minutes . ' ' . Str::upper($request_data->ampm) }}</h3>
                                            <h3 class="text-gray-900 text-sm font-medium truncate">{{ $request_data->date }}</h3>
                                        </div>
                                        <p class="mt-1 text-gray-500 text-sm truncate">{{ $request_data->location }}</p>
                                        <p class="mt-1 text-gray-500 text-sm truncate">@if ($userId == $requestOwnerId->id)
                                                Your Request
                                            @else
                                                {{ Str::ucfirst(\App\Models\User::find($request_data->user_id)->name) }}
                                            @endif</p>
                                    </div>
                                    <div class="bg-gray-50 p-2 rounded">
                                        <h3 class="mt-1 justify-center flex text-gray-900 text-sm font-medium truncate">{{ $request_data->platform }}</h3>
                                        <h3 class="mt-1 justify-center flex text-gray-900 text-sm font-medium truncate">{{ $request_data->game }}</h3>
                                    </div>
                                </div>
                                <div>
                                    <div class="-mt-px flex divide-x divide-gray-300">
                                        <div class="w-0 flex-1 flex">
                                            <a href="https://wa.me/+201099056989"
                                               class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                                <!-- Heroicon name: solid/mail -->
                                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <svg class="w-5 h-5 text-gray-400" version="1.1" id="Layer_1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="20px" y="20px"
                                                     viewBox="0 0 308 308"
                                                     style="enable-background:new 0 0 308 308;"
                                                     xml:space="preserve">
<g id="XMLID_468_">
    <path id="XMLID_469_" d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156
		c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687
		c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887
		c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153
		c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348
		c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802
		c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922
		c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0
		c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458
		C233.168,179.508,230.845,178.393,227.904,176.981z"/>
    <path id="XMLID_470_" d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716
		c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396
		c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z
		 M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188
		l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677
		c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867
		C276.546,215.678,222.799,268.994,156.734,268.994z"/>
</g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
</svg>
                                                <span class="ml-3">Whatsapp</span>
                                            </a>
                                        </div>
                                        <div
                                            class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                            @if((new \Jenssegers\Agent\Agent())->isDesktop())
                                                <input disabled value="+123456789" id="copyPhone"
                                                       class="opacity-0 contents w-0 h-0 relative w-0  py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                                <!-- Heroicon name: solid/phone -->
                                                <svg class="w-5 h-5 text-gray-700"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                                </svg>
                                                <button id="copyPhoneButton" class="ml-3 text-gray-900">Copy
                                                    Number
                                                </button>
                                            @elseif((new \Jenssegers\Agent\Agent())->isMobile())

                                                <a href="tel:+1-202-555-0170" id="copy-phone"
                                                   class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                                    <!-- Heroicon name: solid/phone -->
                                                    <svg class="w-5 h-5 text-gray-400"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                                    </svg>
                                                    <span class="ml-3">Call</span>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Here Are Other Requests For Inspiration</h2>

                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach($requests->groupBy(function($item){
                            return $item["location"]."-".$item["date"];
                        })->sortBy('date') as $key => $request)
                            @foreach($request as $request_data)
                                @php
                                    $requestOwnerId = \App\Models\User::find($request_data->user_id);
                                @endphp

                                <li class="col-span-1 bg-gray-100 rounded-lg shadow divide-y divide-gray-300  @if ($userId == $requestOwnerId->id) order-first @endif">
                                    <div class="w-full flex items-center justify-between p-6 space-x-6">
                                        <div class="flex-1 truncate">
                                            <div class="items-center ">
                                                <h3 class="text-gray-900 text-sm font-medium truncate">{{ $request_data->hours . ':' . $request_data->minutes . ' ' . Str::upper($request_data->ampm) }}</h3>
                                                <h3 class="text-gray-900 text-sm font-medium truncate">{{ $request_data->date }}</h3>
                                            </div>
                                            <p class="mt-1 text-gray-500 text-sm truncate">{{ $request_data->location }}</p>
                                            <p class="mt-1 text-gray-500 text-sm truncate">@if ($userId == $requestOwnerId->id)
                                                    Your Request
                                                @else
                                                    {{ Str::ucfirst(\App\Models\User::find($request_data->user_id)->name) }}
                                                @endif</p>
                                        </div>


                                        <div class="bg-gray-50 p-2 rounded">
                                            <h3 class="mt-1 justify-center flex text-gray-900 text-sm font-medium truncate">{{ $request_data->platform }}</h3>
                                            <h3 class="mt-1 justify-center flex text-gray-900 text-sm font-medium truncate">{{ $request_data->game }}</h3>
                                        </div>

                                    </div>
                                    @if ($userId == $requestOwnerId->id)
                                        <div class="bg-gray-50 p-2 rounded">
                                            <form action="/delete/{{ $request_data->id }}" method="post">
                                                @csrf
                                                <button class=" font-bold p-2 mt-2 rounded" type="submit">Delete
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </li>

                            @endforeach

                        @endforeach

                        <!-- More people... -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@if((new \Jenssegers\Agent\Agent())->isDesktop())
    <script>
        let matches = document.getElementById("matches").childNodes.length;
        let wrapper = document.getElementById("matches-wrapper");
        if ( matches == 1){
            wrapper.style.display = "none";
        }

        document.getElementById("copyPhoneButton").addEventListener("click", copyPhoneNum);

        function copyPhoneNum() {


            /* Get the text field */
            var copyText = document.getElementById("copyPhone");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            console.log(copyText.value);
        }
    </script>
@endif

<style>
    @media screen and (min-width: 768px) {
        .user-own-reservation {
            grid-column: 1 / span 3;
            width: 30%;
        }
    }

    .days-of-week.grid.grid-cols-7.mb-1 {
        grid-template-columns: auto auto auto auto auto auto;
    }

</style>
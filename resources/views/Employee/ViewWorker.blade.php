<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="text-lg  leading-tight">
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:inline">
                    <x-jet-nav-link href="{{ route('ViewWorker') }}" :active="request()->routeIs('ViewWorker')">
                        {{ __('View Worker') }}
                    </x-jet-nav-link>
                </div>
            
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:inline">
                        <x-jet-nav-link href="{{ route('AddWorker') }}" :active="request()->routeIs('AddWorker')">
                            {{ __('Add Worker') }}
                        </x-jet-nav-link>
                </div>
            
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:inline">
                    <x-jet-nav-link href="{{ route('EditWorker') }}" :active="request()->routeIs('EditWorker')">
                        {{ __('Edit Worker') }}
                    </x-jet-nav-link>
                </div>
                
            </h2>
        </div>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mx-1 my-3">
        
    <div class="w-full h-100 overflow-y-auto" >
        <div class="tableContanier">
            <div class="mb-5">
                <x-jet-validation-errors class="mb-4" />
            </div>
            <div class="tableContent ">
                @if ($Worker->isempty())
                    <h1 class="msg text-bold">
                        قائمة الأبحاث فارغة
                    </h1>
                @else
                <div class="px-4">
                    <table class="w-full">
                        <tr class="tableHead px-4">
                            <th>name</th>
                            <th>age</th>
                            <th>country</th>
                            <th>language</th>
                            <th>Social_status</th>
                            <th>Experience</th>
                            <th>religon</th>
                            <th>worker_photo</th>
                            <th>Available</th>
                        </tr>
                        @foreach($Worker as $item)
                            <tr class="tableBody border-b border-gray-300">
                                <td class="px-3">
                                    {{$item->name}}
                                </td>
                                
                                <td class="px-3">
                                        {{$item->age}}
                                </td>
                                <td class="px-3">
                                    {{$item->country}}
                                </td>
                                <td class="px-3">
                                    {{$item->language}}
                                </td>
                                
                                <td class="px-3">
                                    <div class="fix">
                                        {{$item->Social_status}}
                                    </div>
                                </td>
                                <td class="px-3">
                                    <div class="fix">
                                        {{$item->Experience}}
                                    </div>
                                </td>
                                <td class="px-3">
                                    {{$item->religon}}
                                </td>
                                <td class="px-3">
                                    {{$item->worker_photo_path}}
                                </td>
                                <td class="px-3">
                                    {{$item->Available}}
                                </td> 
                            
                                {{-- <td>
                                    <a class="text-indigo-500" href="{{route('download',$item->address_file)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </a>
                                </td> --}}
                            </tr>
                        @endforeach
                    </table>
                </div> 
                @endif
            </div>
        </div>
    </div>
</div>
</div>
</x-app-layout>
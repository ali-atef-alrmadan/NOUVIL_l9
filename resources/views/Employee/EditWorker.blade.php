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
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mx-1 my-3">
        
    <div class="w-full h-full overflow-y-auto" >
        <div class="tableContanier">
            <div class="mb-5">
                <x-jet-validation-errors class="mb-4" />
            </div>
            <div class="tableContent  text-center max-w-6xl">
                @if ($Worker->isempty())
                    <h1 class="msg text-bold">
                        This Office Have Not Worker.
                    </h1>
                @else
                    <table class="w-full">
                        <tr class="tableHead">
                            <th>edit</th>
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
                            <tr class="tableBody">
                                
                                    <td class="px-3">
                                        <form method="POST" action="{{route("DeleteWorker")}}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" name="id" value="{{$item->id}}" hidden>
                                            <input class="sm:inline w-20 p-2 rounded-lg inline-block bg-red-500 text-white hover:bg-red-600 cursor-pointer" type="submit" name="submit" value="Delete">
                                        </form>
                                        <form method="POST" action="{{route("SaveEditWorker")}}" enctype="multipart/form-data" class="w-full">
                                            @csrf
                                        <div class="space-y-2 flex">
                                            <input type="text" name="id" value="{{$item->id}}" hidden>
                                            <input class="sm:inline w-20 p-2 rounded-lg inline-block bg-green-500 text-white hover:bg-green-600 cursor-pointer" type="submit" name="submit" value="Save">
                                        </div>
                                    </td>
                                    <td class="px-3">
                                        <input type="text" name="name" value="{{$item->name}}" class="p-2 rounded-lg border  cursor-pointer form-control">
                                    </td>
                                    <td class="px-3">
                                        <input type="number" name="age" value="{{$item->age}}" class="p-2 rounded-lg border  cursor-pointer form-control">
                                    </td>
                                    <td class="px-3">
                                        <select id="country" name="country" class="p-2 rounded-lg border  cursor-pointer form-control">
                                            <option value="{{$item->country}}" selected >{{$item->country}}</option>
                                            @include('layouts.components.countries')
                                        </select>
                                        {{-- <input type="text" name="country"  class=""> --}}
                                    </td>
                                    <td class="px-3">
                                        <select id="language" name="language" class="p-2 rounded-lg border  cursor-pointer form-control">
                                            <option value="{{$item->language}}" selected >{{$item->language}}</option>
                                            @include('layouts.components.Languages')
                                        </select>
                                    </td>
                                    <td class="px-3">
                                        <input type="text" name="Social_status" value="{{$item->Social_status}}" class="p-2 rounded-lg border  cursor-pointer form-control">
                                    </td>
                                    <td class="px-3">
                                        <input type="text" name="Experience" value="{{$item->Experience}}" class="p-2 rounded-lg border  cursor-pointer form-control">
                                    </td>
                                    <td class="px-3">
                                        <input type="text" name="religon" value="{{$item->religon}}" class="p-2 rounded-lg border  cursor-pointer form-control">
                                    </td>
                                    <td class="px-3">
                                        <label id="{{$item->worker_photo_path.'0'}}" class="p-2 rounded-lg border border-indigo-500 cursor-pointer" for="{{$item->worker_photo_path}}">
                                            {{$item->worker_photo_path}}
                                        </label>
                                        <div class="hidden">
                                            <input type="file" name="worker_photo_path" id="{{$item->worker_photo_path}}" onchange="changeName(this)">
                                        </div>
                                    </td>
                                    <td class="px-3">
                                        <input type="text" name="Available" value="{{$item->Available}}" class="p-2 rounded-lg border  cursor-pointer form-control">
                                    </td>
                                </tr>    
                            </form>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
</x-app-layout>
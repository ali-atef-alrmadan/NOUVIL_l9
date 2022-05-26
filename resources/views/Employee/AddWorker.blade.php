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

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mx-1 my-3">
                <div class="mb-5">
                    <x-jet-validation-errors class="mb-4" />
                </div>
                
            <form class="md:w-100 w-full" method="POST" action="{{route("storeAddWorker")}}" enctype="multipart/form-data" >
                @csrf
                <div>
                    <x-jet-label for="name" value="{{ __('name') }}" class="p-3"/>
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="nameage" />
                </div>
                <div>
                    <x-jet-label for="age" value="{{ __('age') }}" class="p-3"/>
                    <x-jet-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus autocomplete="age" />
                </div>
                <div >
                    <x-jet-label value="{{ __('countries') }}" class="p-3"/>
                    <select id="country" name="country"class="w-full form-control p-2 mb-2 border border-grae-200 rounded-md focus:border-green-500">
                        @include('layouts.components.countries')
                    </select>
                </div>
                <div>
                    <x-jet-label for="language" value="{{ __('language') }}" class="p-3"/>
                    <select id="language" name="language"class="w-full form-control p-2 mb-2 border border-grae-200 rounded-md focus:border-green-500">
                        @include('layouts.components.Languages')
                    </select>
                </div>
                <div>
                    <x-jet-label for="Social_status" value="{{ __('Social_status') }}" class="p-3"/>
                    <select id="Social_status" name="Social_status" class="w-full form-control p-2 mb-2 border border-grae-200 rounded-md focus:border-green-500">
                        <option value="single" >single</option>
                        <option value="Married" >Married</option>
                    </select>
                </div>
                <div>
                    <x-jet-label for="Experience" value="{{ __('Experience') }}" class="p-3"/>
                    <x-jet-input id="Experience" class="block mt-1 w-full" type="number" name="Experience" :value="old('Experience')" required autofocus autocomplete="Experience" />
                </div>
                <div>
                    <x-jet-label for="religon" value="{{ __('religon') }}" class="p-3"/>
                    <select class="w-full form-control p-2 mb-2 border border-grae-200 rounded-md focus:border-green-500" id="religon" name="religon">
                        @include('layouts.components.religon')
                    </select>
                </div>
                <div>
                    <x-jet-label for="worker_photo_path" value="{{ __('Worker Photo') }}" class="p-3"/>
                    <x-jet-input id="worker_photo_path" class="block mt-1 w-full" type="file" name="worker_photo_path" :value="old('worker_photo_path')" required autofocus autocomplete="worker_photo_path" />
                </div>
                

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button class="bg-green-500 text-white hover:bg-green-600 m-4 w-full justify-center">
                        {{ __('Add Worker') }}
                    </x-jet-button>
                </div>
                
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
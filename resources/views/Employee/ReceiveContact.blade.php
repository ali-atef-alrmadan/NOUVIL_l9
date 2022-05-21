<x-app-layout>{{-- feedback--}}
    <x-slot name="header">
        <h2 class="text-lg leading-tight">
            {{ __('Receive Contact') }}
        </h2>
    </x-slot>
    <div class="  max-w-7xl mx-auto sm:px-6 lg:px-8 justify-center">
        <div class= " bg-white overflow-hidden shadow-xl sm:rounded-lg mx-1 my-3">
            <div class="w-full h-100 overflow-y-auto">
                <div class="tableContanier">
                    <div class="text-right mb-5">
                        <x-jet-validation-errors class="mb-4" />
                    </div>
                    <div class="tableContent text-center max-w-6xl">
                        @if ($feedback->isEmpty())
                            <h1 class="msg text-bold">
                                Do not message.
                            </h1>
                        @else
                            <table class="w-full">
                                <tr class="tableHead">
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                </tr>
                                @foreach($feedback as $item)
                                    <tr class="tableBody border-b border-gray-200">
                                        <td class="px-3">{{$item->name}}</td>
                                        <td class="px-3">{{$item->email}}</td>
                                        <td class="px-3">{{$item->Phone}}</td>
                                        <td class="px-3">
                                            <div class="fix">
                                                {{$item->message}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
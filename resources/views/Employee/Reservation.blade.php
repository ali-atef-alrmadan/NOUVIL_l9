<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg leading-tight">
            {{ __('Reservation') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mx-1 my-3">
        
    <div class="w-full h-100 overflow-y-auto" >
        <div class="tableContanier">
            <div class="mb-5">
                <x-jet-validation-errors class="mb-4" />
            </div>
            <div class="tableContent  text-center max-w-6xl">
                @if ($Worker->isempty())
                    <h1 class="msg text-bold">
                        This Office Have Not Reservation.
                    </h1>
                @else
                <div class="px-4">
                    <table class="w-full">
                        <tr class="tableHead px-4">
                            <th>decision</th>
                            <th>name</th>
                            <th>age</th>
                            <th>country</th>
                            <th>language</th>
                            <th>Social_status</th>
                            <th>Experience</th>
                            <th>religon</th>
                            <th>Request</th>
                        </tr>
                        @foreach($Worker as $item)
                            <tr class="tableBody border-b border-gray-300">
                                <td class="px-3 flex">
                                    <form method="POST" class="inline" action="{{route("rejectReservation")}}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="Worker_id" value="{{$item->id}}" hidden>
                                        <input class="sm:inline w-20 p-2 rounded-lg inline-block bg-red-500 text-white hover:bg-red-600 cursor-pointer" type="submit" name="submit" value="Reject">
                                    </form>
                                    <form method="POST" class="inline" action="{{route("acceptReservation")}}" enctype="multipart/form-data" class="w-full">
                                        @csrf
                                        <div class="space-y-2 flex">
                                            <input type="text" name="Worker_id" value="{{$item->id}}" hidden>
                                            <input class="sm:inline w-20 p-2 rounded-lg inline-block bg-green-500 text-white hover:bg-green-600 cursor-pointer" type="submit" name="submit" value="Accept">
                                        </div>
                                    </form>
                                </td>
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
                                    {{$item->Social_status}}
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
                                    {{$item->Available}}
                                </td>
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
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg text-gray-400 leading-tight text-right">
            {{ __('Mumber') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mx-1 my-3">
        
            <div class="w-full h-100 overflow-y-auto">
                <div class="tableContanier">
                    <div class="text-right mb-5">
                        <x-jet-validation-errors class="mb-4" />
                    </div>
                    <div class="tableContent">
                        @if($User->isEmpty())
                            <h1 class="msg text-bold">
                                This Office Have Not User Viewed.
                            </h1>
                        @else
                            <table class="w-full text-center" >
                                <tr class="tableHead">
                                    <th>Role</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>Delete Mumber</th>
                                </tr>
                                @foreach ($User as $item)
                                    <tr class="tableBody">
                                        <td>{{$item->display_name}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->Phone}}</td>
                                        <td>{{$item->country}}</td>
                                        <td>
                                            <form method="POST" action="{{route("DeleteMumber")}}" enctype="multipart/form-data">
                                                @csrf
                                                <input type="text" name="id" value="{{$item->id}}" hidden>
                                                <button class="w-20 p-2 rounded-lg inline-block bg-red-500 text-white hover:bg-red-600" type="submit" name="submit" value="accept">Delete</button>
                                            </form>
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
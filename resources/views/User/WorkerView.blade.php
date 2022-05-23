<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg text-gray-400 leading-tight text-right">
            {{ __('Mumber') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white  overflow-hidden shadow-xl sm:rounded-lg mx-1 my-3">
            <div class="w-full">
                <div class=" space-y-2 p-2 m-3 ">
                    <form class="w-full flex justify-center items-center flex-row" type="get" action="{{url('/WorkerView')}}">
                        @csrf
                            <button class="w-full p-2 m-3 rounded-lg inline-block bg-green-500 text-white hover:bg-green-600 cursor-pointer" type="submit"  name="query">
                                All
                            </button>
                    </form> 
                    <form class="w-full flex justify-center items-center flex-row" type="get" action="{{url('/search')}}">
                        @csrf
                        @foreach ($country as $item)
                            <input type="text" value={{$item->country}} name="query" hidden>
                            <button class="w-full p-2 m-3 rounded-lg inline-block bg-green-500 text-white hover:bg-green-600 cursor-pointer" type="submit"  name="query"> {{$item->country}}
                            </button>
                        @endforeach
                    </form> 
                </div>   
                {{-- ('id','name','age','country','language','Social_status','Experience','religon','worker_photo_path','Available',) --}}
                <div class="flex justify-center flex-row flex-wrap gap-6 p-4">
                    @foreach($Worker as $item)
                        <div class="w-[21rem] h-[30rem] max-w-md max-h-lg rounded-md shadow bg-white inline">
                            <img src="{{asset('storage/worker_photo/'.$item->worker_photo_path)}}" class="w-full h-[15rem] bg-gray-300 rounded-md bg-cover bg-fix"/>
                            <div class="p-3 relative">
                                
                                <div class="text-2xl text-gray-600 font-bold">
                                    {{$item->name}}
                                </div>
                                <div class="ml-4 mt-2">
                                    <p class="w-full h-32 fix">{{$item->country}} national She is {{$item->age}} years old, her religion {{$item->religon}} and she is in a social situation {{$item->Social_status}}. She has {{$item->Experience}} years of experience in this field</p>
                                </div>
                            </div>
                                <div class="bottom-0 text-center ">
                                    <form action="">
                                        <input type="submit" value="Reservation" name="make-reservation" class="bg-blue-500 hover:bg-blue-700 transition-colors text-white p-2 rounded cursor-pointer">
                                    </form>
                                </div>
                        </div>
            
                    @endforeach
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
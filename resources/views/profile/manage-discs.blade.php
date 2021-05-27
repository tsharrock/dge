<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listing Manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-gray-200 bg-opacity-25">
                    <div class="p-6">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('managediscimages') }}">Add a disc</a>
                    </div>

                    @foreach($discs as $disc)
                        <div class="m-3 p-6 grid grid-cols-3 border border-solid">
                            <div class="">
                                <img class="border border-solid" src="/uploads/{{Auth::user('id')->id}}/{{ $disc->img_front }}" width="75" />
                            </div>
                            <div class="">
                                <h3>{{ $disc->masterdisc['mold'] }}</h3>
                                <p>{{ $disc->description }}</p>
                            </div>
                            <div class="">Edit / Delete</div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

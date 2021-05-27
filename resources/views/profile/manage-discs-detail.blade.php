<x-app-layout>
    <meta name="_token" content="{{ csrf_token() }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Disc Manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
{{--                    <form method="POST" action="{{ route('add-disc') }}">--}}

{{--                    </form>--}}
                    <div class="p-6">
                        <h2>Add a disc</h2>
                        <form method="POST" action="/manage-discs/save">
                            @csrf
                            <div class="py-2">
                                @livewire('master-disc-search')
                            </div>
                            <div class="py-2">
                                <label for="weight">Weight</label><br />
                                <input type="text" placeholder="In Kg" id="weight" name="weight" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                            <div class="py-2">
                                <label for="condition">Condition</label>
                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="sleepy_scale_rating" id="sleepy_scale_rating">
                                    @foreach($conditions as $condition)
                                        <option value="{{$condition->sleepy_scale_rating}}">{{$condition->sleepy_scale_rating}}: {{$condition->description}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="py-2">
                                @livewire('plastic-select')
                            </div>
                            <div class="py-2">
                                <label for="condition">Description</label>
                                <textarea class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="description" id="description"></textarea>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label for="price">Price</label><br />
                                    $ <input type="text" name="price" id="price" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                </div>
{{--                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">--}}
{{--                                    <span class="price-negotiable">Negotiable?</span><br />--}}
{{--                                    <label class="inline-flex items-center mt-2">--}}
{{--                                        <input type="radio" class="form-radio" name="negotiable" value="1">--}}
{{--                                        <span class="ml-2">Yes</span>--}}
{{--                                    </label>--}}
{{--                                    <label class="inline-flex items-center mt-2">--}}
{{--                                        <input type="radio" class="form-radio" name="negotiable" value="0">--}}
{{--                                        <span class="ml-2">No</span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
{{--                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">--}}
{{--                                    <span class="price-negotiable">Local only?</span><br />--}}
{{--                                    <label class="inline-flex items-center mt-2">--}}
{{--                                        <input type="radio" class="form-radio" name="shipping_cost" value="1">--}}
{{--                                        <span class="ml-2">Yes</span>--}}
{{--                                    </label>--}}
{{--                                    <label class="inline-flex items-center mt-2">--}}
{{--                                        <input type="radio" class="form-radio" name="shipping_cost" value="0">--}}
{{--                                        <span class="ml-2">No</span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">--}}
{{--                                    <label for="price">Shipping</label><br />--}}
{{--                                    <input type="text" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="disc-shipping-price">--}}
{{--                                </div>--}}
                            </div>
                            <button type="submit">Save Disc</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

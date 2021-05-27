<div class="relative">
    {{-- The whole world belongs to you. --}}
    <label for="plastic_id">Plastic type</label>

    <select name="plastic_id" id="plastic_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        <option value=''>Choose a plastic type</option>
        @foreach($plastics as $plastic)
            <option value="{{ $plastic->id }}">{{ $plastic->plastic_type }}</option>
        @endforeach
    </select>
</div>

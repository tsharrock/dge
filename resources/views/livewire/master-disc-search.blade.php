<div class="relative">
    {{-- The whole world belongs to you. --}}
    <label for="disc_id">Choose your disc</label>
    <input wire:model="query" type="text" name="master-disc-search" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
    <input type="hidden" name="disc_id">
    <div id="search-results" class="absolute">
        <ul>
        @foreach($disc_results as $disc)
            <li class="bg-white p-2 ring-1 cursor-pointer" onclick="saveSelect('{{ $disc['id'] }}', '{{ $disc['mold'] }}')" wire:click="updatePlasticList({{ $disc['brand']['id'] }})">{{ $disc['brand']['brand'] }} {{ $disc['mold'] }}</li>
        @endforeach
    </div>
</div>

<script>
    function saveSelect(disc_id, mold) {
        setTimeout(function(){
            document.getElementsByName("master-disc-search")[0].value = mold;
            document.getElementsByName("disc_id")[0].value = disc_id;
            document.getElementById('search-results').style.display = "none";
        },500);
    }
</script>

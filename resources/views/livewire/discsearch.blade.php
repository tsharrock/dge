<div class="container mx-auto">
    <input id="searchBox" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
           wire:model="search" onkeyup="showHideResults();" type="text" placeholder="Search discs..."/>

    <br />
    <br />
    <br />
    <br />

    <div id="tableResults" class="grid grid-cols-6">
        @foreach($discs as $disc)
        <div class="border-solid border-4 border-gray-600 rounded m-10">
            <p>Brand: {{ $disc->Brand }}</p>
            <p>Mold: {{ $disc->Mold }}</p>
            <p>Type: {{ $disc->type }}</p>
            <p>Speed: {{ $disc->speed }}</p>
            <p>Glide: {{ $disc->glide }}</p>
            <p>Turn: {{ $disc->turn }}</p>
            <p>Fade: {{ $disc->fade }}</p>
            <p>Currently available: {{ $disc->current }}</p>
            <p>Date approved: {{ $disc->date_approved }}</p>
        </div>
        @endforeach
    </div>
{{--    <table id="tableResults" class="table-auto">--}}
{{--        <tr>--}}
{{--            <th class="px-4 py-2">Brand</th>--}}
{{--            <th class="px-4 py-2">Mold</th>--}}
{{--            <th class="px-4 py-2">Type</th>--}}
{{--            <th class="px-4 py-2">Speed</th>--}}
{{--            <th class="px-4 py-2">Glide</th>--}}
{{--            <th class="px-4 py-2">Turn</th>--}}
{{--            <th class="px-4 py-2">Fade</th>--}}
{{--            <th class="px-4 py-2">Current?</th>--}}
{{--            <th class="px-4 py-2">Date approved</th>--}}
{{--        </tr>--}}
{{--        @foreach($discs as $disc)--}}
{{--        <tr>--}}
{{--            <td class="px-4 py-2">{{ $disc->Brand }}</td>--}}
{{--            <td class="px-4 py-2">{{ $disc->Mold }}</td>--}}
{{--            <td class="px-4 py-2">{{ $disc->type }}</td>--}}
{{--            <td class="px-4 py-2">{{ $disc->speed }}</td>--}}
{{--            <td class="px-4 py-2">{{ $disc->glide }}</td>--}}
{{--            <td class="px-4 py-2">{{ $disc->turn }}</td>--}}
{{--            <td class="px-4 py-2">{{ $disc->fade }}</td>--}}
{{--            <td class="px-4 py-2">{{ $disc->current }}</td>--}}
{{--            <td class="px-4 py-2">{{ $disc->date_approved }}</td>--}}
{{--        </tr>--}}
{{--        @endforeach--}}
{{--    </table>--}}

</div>
<script>
    let results = document.getElementById("tableResults");
    let searchParam = document.getElementById("searchBox");
    results.style.display = "none";

    function showHideResults(){
        console.log(searchParam.value);
        if (searchParam.value == null || searchParam.value === "") {
            results.style.display = "none";
        } else {
            results.style.display = "block";
        }
    }
</script>
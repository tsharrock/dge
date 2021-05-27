<div>
    <div class="row">
        <h4>Search for discs by any method you see below.</h4>
    </div>
    <div class="row mt-3 mb-6">
        <div class="col">
            <label for="disc_mold" class="form-label">Disc name</label>
            <input wire:model="queryMolds" type="text" class="form-control" id="disc_mold" aria-describedby="moldHelp">
            <div id="moldHelp" class="form-text">(Wraith, Escape, Destroyer, Judge...)</div>
        </div>
        <div class="col">
            <label for="disc_brand" class="form-label">Disc brand/mfg</label>
            <input type="text" class="form-control" id="disc_brand" aria-describedby="brandHelp">
            <div id="brandHelp" class="form-text">(Discraft, Innova, Kastaplast...)</div>
        </div>
        <div class="col">
            <label for="disc_type" class="form-label">Disc type</label>
            <select class="form-control" id="disc_type" name="disc_type">
                <option>Select type</option>
                <option value="1">Distance driver</option>
                <option value="2">Control/Fairway driver</option>
                <option value="3">Midrange</option>
                <option value="4">Putter/Putt & Approach</option>
            </select>
        </div>
        <div class="col">
            <label for="disc_speed" class="form-label">Disc speed</label>
            <select class="form-control" id="disc_speed" name="disc_speed">
                <option>Select speed</option>
                <option value="15">15</option>
                <option value="14">14</option>
                <option value="13">13</option>
                <option value="12">12</option>
                <option value="11">11</option>
                <option value="10">10</option>
                <option value="9">9</option>
                <option value="8">8</option>
                <option value="7">7</option>
                <option value="6">6</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
        </div>
        <div class="col">
            <label for="disc_glide" class="form-label">Disc glide</label>
            <select class="form-control" id="disc_glide" name="disc_glide">
                <option>Select glide</option>
                <option value="7">7</option>
                <option value="6">6</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
        </div>
        <div class="col">
            <label for="disc_turn" class="form-label">Disc turn</label>
            <select class="form-control" id="disc_turn" name="disc_turn">
                <option>Select turn</option>
                <option value="+1">+1</option>
                <option value="0">0</option>
                <option value="-1">-1</option>
                <option value="-2">-2</option>
                <option value="-3">-3</option>
                <option value="-4">-4</option>
                <option value="-5">-5</option>
            </select>
        </div>
        <div class="col">
            <label for="disc_fade" class="form-label">Disc fade</label>
            <select class="form-control" id="disc_fade" name="disc_fade">
                <option>Select fade</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12"><h4>Discs available.</h4></div>

        @foreach($disc_results as $disc)
            <div class="col">
                <div class="disc-card border rounded p-2">
                    <img class="results-img" src="/uploads/{{ $disc->user_id }}/{{ $disc->img_front }}" />
                    {{ $disc->masterdisc['brand']['brand'] }} {{ $disc->masterdisc['mold'] }} ${{ $disc->price }}
                </div>
            </div>
        @endforeach
    </div>
    <div class="row mt-3">
        <div class="col">list of available discs here</div>
    </div>
</div>

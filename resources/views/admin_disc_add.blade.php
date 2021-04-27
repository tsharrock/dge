<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Disc Exchange</title>
        @livewireStyles
    </head>
    <body class="antialiased">
    <div class="container mx-auto">
        <h1>Disc Admin</h1>
        <h2>Add a new disc</h2>
        @if (\Session::has('success'))
            <h5 style="color: green;">{{\Session::get('success')}}</h5>
        @endif
        <form class="form-inline" action="/save-disc" method="post">
            @csrf
            <div class="form-group mb-2">
                <label for="brand" class="sr-only">Brand</label>
                <input type="text" class="form-control" id="brand" name="Brand" placeholder="Brand">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="mold" class="sr-only">Mold</label>
                <input type="text" class="form-control" id="mold" name="Mold" placeholder="Mold">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="type" class="sr-only">Type</label>
                <select class="form-control" id="type" name="type" >
                    <option value="">Select Type</option>
                    <option value="driver">Distance Driver</option>
                    <option value="control">fairway/control Driver</option>
                    <option value="midrange">Midrange</option>
                    <option value="putt">Putt/approach</option>
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="speed" class="sr-only">Speed</label>
                <select class="form-control" id="speed" name="speed">
                    <option>Speed</option>
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
            <div class="form-group mx-sm-3 mb-2">
                <label for="glide" class="sr-only">Glide</label>
                <select class="form-control" id="glide" name="glide">
                    <option>Glide</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="turn" class="sr-only">Turn</label>
                <select class="form-control" id="turn" name="turn">
                    <option>Turn</option>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="fade" class="sr-only">Fade</label>
                <select class="form-control" id="fade" name="fade">
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="current" class="sr-only">Current</label>
                <select class="form-control" id="current" name="current">
                    <option>Current?</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="date_approved" class="sr-only">Date approved</label>
                <input type="text" class="form-control" id="date_approved" name="date_approved" placeholder="Date Approved mm/dd/yyyy">
            </div>

            <button type="submit" class="btn btn-primary mb-2">Save disc</button>
        </form>

        <hr class="my-5">

        <h2>Disc listing</h2>
        @livewire('discsearch')

    </div>
    @livewireScripts
    </body>
</html>

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Disc;


class DiscController extends Controller
{
    public function edit(Request $request, $id) {
//        dd($request->id);
        $disc = Disc::where('id', $id)->get();

        return view('admin_edit_disc', ['disc'=>$disc]);

    }

    public function saveNew(Request $request) {
        $newdate = date('Y-m-d', strtotime($request->date_approved));
        $disc = [
            'Brand'=>$request->Brand,
            'Mold'=>$request->Mold,
            'type'=>$request->type,
            'speed'=>$request->speed,
            'glide'=>$request->glide,
            'turn'=>$request->turn,
            'fade'=>$request->fade,
            'current'=>$request->current,
            'date_approved'=>$newdate
        ];

        Disc::create($disc);


//        return Redirect::back()->with(['msg', 'The Message']);
        return Redirect::back()->with('success', 'Disc added successfully');

    }
}

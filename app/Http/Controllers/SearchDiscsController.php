<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchDiscsController extends Controller
{
    public function __invoke() {
        return view('search-discs');
    }
}

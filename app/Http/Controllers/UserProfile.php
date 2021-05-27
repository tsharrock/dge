<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfile extends Controller
{
    public function __invoke()
    {
        $userid = Auth::id();
        $userinfo = User::with('discs')->with('buyerRatings')->with('sellerRatings')->get();
        return view('dashboard', ['user'=>$userinfo[0]]);
    }
}

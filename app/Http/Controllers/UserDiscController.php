<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterDisc;
use App\Models\Brand;
use App\Models\Condition;
use App\Models\UserDisc;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class UserDiscController extends Controller
{
    public function __invoke()
    {
        $userid = Auth::id();
        $discs = UserDisc::with('masterdisc')->where('user_id', $userid)->get();

        return view('profile.manage-discs', ['discs'=>$discs]);
    }
    public function addImages()
    {
        return view('profile.manage-discs-images');
    }
    public function clearImages(Request $request, $img){
        $request->session()->forget($img);
        return redirect('/manage-discs/add');
    }
    public function uploadCropImage(Request $request)
    {
        $folderPath = public_path('upload/');

        $userid = Auth::id();
        if (! File::exists(public_path()."/uploads/".$userid."/")) {
            File::makeDirectory(public_path()."/uploads/".$userid."/");
        }
        $folderPath = public_path('uploads/'.$userid.'/');
        $image_parts = explode(";base64,", $request->image);
        $img_type = $request->side;

        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $imageName = uniqid() . '.jpg';
        $imageFullPath = $folderPath.$imageName;
        session([$img_type.'_img' => $imageName]);
        file_put_contents($imageFullPath, $image_base64);
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);
    }
    public function addDetail()
    {
        $discs = MasterDisc::with('brand')->get();
        $conditions = Condition::all();
        return view('profile.manage-discs-detail', ['conditions'=>$conditions]);
    }
    public function saveDisc(Request $request) {
//        dd($request->all());
        $disc = new UserDisc();
        $userid = Auth::id();

        $disc->user_id = $userid;
        $disc->disc_id = $request->disc_id;
        $disc->description = $request->description;
        $disc->sleepy_scale_rating = $request->sleepy_scale_rating;
        $disc->price = $request->price;
        $disc->negotiable = 0;
        $disc->shipping_cost = $request->shipping_cost;
        $disc->local_only = $request->local_only;
        $disc->img_front = session()->get('front_img');
        $disc->img_back = $request->session()->get('back_img');
        $disc->weight = $request->weight;
        $disc->color = $request->color;
        $disc->plastic_id = $request->plastic_id;
        $disc->stamp = $request->stam;

        Log::info($disc);
        $disc->save();
        $request->session()->forget('front_img');
        $request->session()->forget('back_img');
        return redirect(route('managediscs'));
    }
}

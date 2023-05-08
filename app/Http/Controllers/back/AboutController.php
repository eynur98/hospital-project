<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Models\Language;
use App\Services\FIle_download;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('back.about.index',['about'=>About::first(),'languages'=>Language::where('status', 1)->get()]);
    }

    public function update (AboutRequest $request){

        try{
         $about = About::first() ??[];
     
        $requests=$request->all();
      
      $photo = new FIle_download();
      $checkedPhoto =  $photo->download($request)??false;
      if ($checkedPhoto){
          $requests['image']=$checkedPhoto;
      }
      else{
        $requests['image']=$about->image;
      }
      $about->update($requests);
    //  toastr()->success('sdd');
      return redirect()->back()->with('success','');

    }
    catch (\Exception $e) {
     $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $this->rules());

     if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
     }
 
 }
    }
}

<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;

use App\Models\About;
use App\Models\Appointment;
use App\Models\Language;
use App\Services\FIle_download;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
      $list = Appointment::paginate(10);
        return view('back.appointment.index',compact('list'));
    }

    public function store(Request $request){
      Appointment::create($request->all());
      return back()->with('success','Thanks');
    }
  public function delete($id){
    Appointment::find($id)->delete();
    return back();
  }
}

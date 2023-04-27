<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorPositonRequest;
use App\Models\DoctorPosition;
use App\Models\Language;
use App\Models\Slider;
use App\Services\FIle_download;
use Illuminate\Http\Request;

class DoctorPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.brends.index',['brend'=>DoctorPosition::paginate(10), 'languages'=>Language::where('status', 1)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorPositonRequest $request)
    {
        $requests=$request->all();
       
        
        if(!isset($requests['status'])){
            $requests['status']='0';
        }
        DoctorPosition::create($requests);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return DoctorPosition::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DoctorPositonRequest $request, $id)
    {
        $category = DoctorPosition::find($id);
     
     

      if(!isset($requests['status'])){
        $requests['status']='0';
    }
      $category->update($requests);
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DoctorPosition::where('id',$id)->delete();
        return redirect()->back();
    }
}

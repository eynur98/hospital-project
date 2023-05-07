<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\StatisticaRequest;
use App\Models\Language;
use App\Models\Statistic;
use App\Services\FIle_download;
use Illuminate\Http\Request;

class StatisticaController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.statistica.index',['certificate'=>Statistic::paginate(10), 'languages'=>Language::where('status', 1)->get()]);
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
    public function store(StatisticaRequest $request)
    {

        try{
        $requests=$request->all();
       
        $photo = new FIle_download();
        $checkedPhoto =  $photo->download($request)??false;
        if ($checkedPhoto){
            $requests['image']=$checkedPhoto;
        }
        if(!isset($requests['status'])){
            $requests['status']='0';
        }
        Statistic::create($requests);
        return redirect()->back()->with('success','');

    }
    catch (\Exception $e) {
     $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $this->rules());

     if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
     }
 
 }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Statistic::find($id);
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
    public function update(StatisticaRequest $request, $id)
    {

        try{
        $certificate = Statistic::find($id);
     
        $requests=$request->all();
      
      $photo = new FIle_download();
      $checkedPhoto =  $photo->download($request)??false;
      if ($checkedPhoto){
          $requests['image']=$checkedPhoto;
      }
    
      if(!isset($requests['status'])){
          $requests['status']='0';
      }
    
   
      $certificate->update($requests);
      return redirect()->back()->with('success','');

    }
    catch (\Exception $e) {
     $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $this->rules());

     if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
     }
 
 }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Statistic::where('id',$id)->delete();
        return redirect()->back()->with('success','');
    }
}

<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRequest;
use App\Models\Certificate;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Services\FIle_download;
use App\Models\Language;
use App\Models\DoctorCategory;
use App\Models\DoctorPosition;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.project.index',['project'=>Doctor::paginate(10), 'languages'=>Language::where('status', 1)->get(),'categories'=>DoctorPosition::get()]);
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
    public function store(DoctorRequest $request)
    {

        
        $requests=$request->all();
       
      
     
        $photo = new FIle_download();
        $checkedPhoto =  $photo->download($request)??false;
        if ($checkedPhoto){
            $requests['image']=$checkedPhoto;
        }
        if(!isset($requests['status'])){
            $requests['status']='0';
        }
        $doctor=Doctor::create($requests);
        foreach ($request->file('images') as $imagefile) {
            $image = new Certificate();
            $imageName= time() . "-" . uniqid() . '.' .$imagefile->getClientOriginalExtension();
            $imagefile->move(public_path('uploads'),$imageName);
            $image->image='/uploads/'.$imageName;
            $image->doctor_id = $doctor->id;
            $image->save();
          }

        return redirect()->back()->with('success','');

    
   

    //  if ($validator->fails()) {
    //     return response()->json($validator->errors(), 422);
    //  }
 
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //  dd(Doctor::find($id));
        return Doctor::with('certificates')->find($id);
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
    public function update(DoctorRequest $request, $id)
    {

    
        $project = Doctor::find($id);
     
          $requests=$request->all();
        
         
     
      $photo = new FIle_download();
      $checkedPhoto =  $photo->download($request)??false;
      if ($checkedPhoto){
          $requests['image']=$checkedPhoto;
      }
      else{
        $requests['image']=$project->image;
      }
        if(!isset($requests['status'])){
            $requests['status']='0';
        }
      
     
        $project->update($requests);

            Certificate::whereDoctorId($id)->delete();
          
        foreach ($request->images as $imagefile) {
       
            $image = new Certificate();
            if ($request->hasFile('images')) {
                $imageName= time() . "-" . uniqid() . '.' .$imagefile->getClientOriginalExtension();
            $imagefile->move(public_path('uploads'),$imageName);
            $image->image='/uploads/'.$imageName;
            $image->doctor_id = $project->id;
            }else{
                
                $image->image = $imagefile;
                $image->doctor_id = $project->id;
            }
            $image->save();
          }
        return redirect()->back()->with('success','');

    
//     catch (\Exception $e) {
//      $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $this->rules());

//      if ($validator->fails()) {
//         return response()->json($validator->errors(), 422);
//      }
 
//  }
    }

    
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::where('id',$id)->delete();
        return redirect()->back()->with('success','');
    }
}

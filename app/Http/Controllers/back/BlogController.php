<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Services\FIle_download;
use App\Models\Language;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.support.index',['support'=>Blog::paginate(10), 'languages'=>Language::where('status', 1)->get()]);
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
    public function store(BlogRequest $request)
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
   
        Blog::create($requests);
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
        return Blog::find($id);
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
    public function update(BlogRequest $request, $id)
    {

        try{
        $support = Blog::find($id);
     
          $requests=$request->all();
        
        $photo = new FIle_download();
        $checkedPhoto =  $photo->download($request)??false;
        if ($checkedPhoto){
            $requests['image']=$checkedPhoto;
        }
      
        if(!isset($requests['status'])){
            $requests['status']='0';
        }
      
     
        $support->update($requests);
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
        Blog::where('id',$id)->delete();
        return redirect()->back()->with('success','');
    }
}

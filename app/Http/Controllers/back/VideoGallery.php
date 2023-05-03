<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoGaleryRequest;
use App\Models\VideoGalery;
use App\Services\FIle_download;
use Illuminate\Http\Request;

class VideoGallery extends Controller
{
  
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.video-gallery.index',['certificate'=>VideoGalery::paginate(10)]);
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
    public function store(VideoGaleryRequest $request)
    {
        $requests=$request->all();
       
      
        if(!isset($requests['status'])){
            $requests['status']='0';
        }
        VideoGalery::create($requests);
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
        return VideoGalery::find($id);
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
    public function update(VideoGaleryRequest $request, $id)
    {
        $certificate = VideoGalery::find($id);
     
        $requests=$request->all();
      
   
    
      if(!isset($requests['status'])){
          $requests['status']='0';
      }
    
   
      $certificate->update($requests);
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
        VideoGalery::where('id',$id)->delete();
        return redirect()->back();
    }
}

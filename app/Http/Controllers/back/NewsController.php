<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\Comment;
use App\Models\News;
use Illuminate\Http\Request;
use App\Services\FIle_download;
use App\Models\Language;
use App\Models\NewsCategory;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.news.index',['news'=>News::paginate(10), 'languages'=>Language::where('status', 1)->get(),'categories'=>NewsCategory::get()]);
    }

  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
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
        News::create($requests);
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
        return News::find($id);
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        try{
        $news = News::find($id);
     
          $requests=$request->all();
        
        $photo = new FIle_download();
        $checkedPhoto =  $photo->download($request)??false;
        if ($checkedPhoto){
            $requests['image']=$checkedPhoto;
        }
      
        if(!isset($requests['status'])){
            $requests['status']='0';
        }
      
     
        $news->update($requests);
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
        News::where('id',$id)->delete();
        return redirect()->back()->with('success','');
    }

    public function comment($id)
    {
        $comments=Comment::where('news_id',$id)->get();
        return view('back.comment.index',compact('comments'));
    }

    public function comment_status(Request $request, $id)
    {
       
        $comment = Comment::find($id);
        $comment->status = ($request->status == 'false') ? '0' : '1';
        $comment->save();
       
        return response()->json(['success' => true, 'status' => $comment->status]);
        
    }


    public function comment_destroy($id)
    {
        Comment::where('id',$id)->delete();
        return redirect()->back()->with('success','');
    }
}

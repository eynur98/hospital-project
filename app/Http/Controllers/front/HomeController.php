<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ContactMessageRequest;
use App\Models\About;
use App\Models\Blog;
use App\Models\Certificate;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\ContactMessage;
use App\Models\Doctor;
use App\Models\DoctorPosition;
use App\Models\News;
use App\Models\NewsCategory;

use App\Models\Service;
use App\Models\Slider;
use App\Models\Statistic;
use App\Models\Support;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function __construct(){

        $services = Service::where('status',1)->get();

        View::share('services', $services);

        $doctor_positons = DoctorPosition::where('status',1)->get();

        View::share('doctor_positons', $doctor_positons);

        $news_categories = NewsCategory::where('status',1)->get();

        View::share('news_categories', $news_categories);

        $contact = Contact::first();

        View::share('contact', $contact);

    }
    public function index(){
        $sliders = Slider::where('status',1)->get();
      
        $blogs = Blog::where('status', 1)->orderBy('created_at', 'ASC')->limit(3)->get();
       // $services = Service::where('slug', 'LIKE', '%plastic-surgery%')->get();
         $doctors = Doctor::where('status',1)->get();
        $statics = Statistic::where('status', 1)->get();
         $comments = Comment::where('status',1)->get();
         
       return view('front.home.index',compact('sliders','blogs','doctors', 'statics','comments'));
   }

    public function news($slug){
        $news_cat=NewsCategory::where('slug',$slug)->first() ?? abort(404);
        $news = News::where('news_category_id',$news_cat->id)->where('status',1)->paginate(18);
        return view('front.news.index',compact('news'));
    }


    public function newsDetail($slug){
        $news = News::whereSlug($slug)->first();
        $news_category=NewsCategory::where('id',$news->news_category_id)->first() ?? [];
        $similar_products = News::where('news_category_id', $news_category->id)->get() ?? [];
    
      if (!Cookie::get('news_' . $news->id)) {
       
        $news->increment('view_count');
     
    }
        return view('front.news.news',compact('news','news_category','similar_products'));
    }

    public function doctor($slug){
        $doctor_position = DoctorPosition::whereSlug($slug)->first();
    
     /*    $doctors = Doctor::where('doctor_position_id',$doctor_position->id)->where('status',1)->paginate(18); */
      /*   dd($doctors); */
        return view('front.doctor.index',compact('doctor_position'));
    }


    public function blog(){
       
        $news = Blog::where('status',1)->paginate(18);
        return view('front.blog.index',compact('news'));
    }

    public function blog_detail($slug){
        $news = Blog::whereSlug($slug)->first() ?? abort(404);
        if (!Cookie::get('news_' . $news->id)) {
       
            $news->increment('view_count');
         
        }
        return view('front.blog.blog',compact('news'));
    }

    public function about(){

        return view('front.about.index',['about'=>About::first(),'doctors'=>Doctor::where('status',1)->limit(4)->get()]);
    }

    public function elaqe(){
        return view('front.contact.index');
    }

   /*  public function products(){
        
        return view('front.products.index');
    } */

  

    public function service_detail($slug){
        $service = Service::whereSlug($slug)->first() ?? abort(404);
      
        return view('front.services.index',compact('service'));
    }

    public function image_gallery(){
       
        $news = Blog::where('status',1)->paginate(18);
        return view('front.blog.index',compact('news'));
    }
    public function video_gallery(){
       
        $news = Blog::where('status',1)->paginate(18);
        return view('front.blog.index',compact('news'));
    }
   

     public function comment(CommentRequest $request){
      
        $requests=$request->all();
         Comment::create($requests);
         return redirect()->back()->with('success','Comment posted');
     }
}

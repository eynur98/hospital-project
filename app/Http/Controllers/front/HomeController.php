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
use App\Models\ImageGalery;
use App\Models\News;
use App\Models\NewsCategory;

use App\Models\Service;
use App\Models\Slider;
use App\Models\Statistic;
use App\Models\Support;
use App\Models\VideoGalery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function __construct(){

        $services = Service::withTranslations()->where('status',1)->get();

        View::share('services', $services);

        $doctor_positons = DoctorPosition::withTranslations()->where('status',1)->get();

        View::share('doctor_positons', $doctor_positons);

        $news_categories = NewsCategory::withTranslations()->where('status',1)->get();

        View::share('news_categories', $news_categories);

        $contact = Contact::first() ?? [];

        View::share('contact', $contact);

    }
    public function index(){
        $sliders = Slider::withTranslations()->where('status',1)->get();
      
        $blogs = Blog::withTranslations()->where('status', 1)->where('at_home', 1)->orderBy('created_at', 'DESC')->limit(3)->get();
       // $services = Service::where('slug', 'LIKE', '%plastic-surgery%')->get();
         $doctors = Doctor::withTranslations()->where('status',1)->where('at_home', 1)->get();
        $statics = Statistic::withTranslations()->where('status', 1)->where('at_home', 1)->get();
         $comments = Comment::where('status',1)->get();
         
       return view('front.home.index',compact('sliders','blogs','doctors', 'statics','comments'));
   }

    public function news($slug){
        $news_cat=NewsCategory::withTranslations()->where('slug',$slug)->first() ?? abort(404);
        $news = News::withTranslations()->where('news_category_id',$news_cat->id)->where('status',1)->paginate(18);
        $last_news = News::withTranslations()->where('status', 1)->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('front.news.index',compact('news','last_news'));
    }


    public function newsDetail($slug){
        $news = News::withTranslations()->whereSlug($slug)->first() ?? abort(404);
      //  dd($news);
        $news_category=NewsCategory::withTranslations()->where('id',$news->news_category_id)->first() ?? [];
        $last_news = News::withTranslations()->where('status', 1)->orderBy('created_at', 'DESC')->limit(3)->get();
    
      if (!Cookie::get('news_' . $news->id)) {
       
        $news->increment('view_count');
     
    }
        return view('front.news.news',compact('news','news_category','last_news'));
    }

    public function doctor($slug){
        $doctor_position = DoctorPosition::withTranslations()->whereSlug($slug)->first();
    
     /*    $doctors = Doctor::where('doctor_position_id',$doctor_position->id)->where('status',1)->paginate(18); */
      /*   dd($doctors); */
        return view('front.doctor.index',compact('doctor_position'));
    }
    public function doctor_detail($slug){
        $news = Doctor::withTranslations()->whereSlug($slug)->first();
        $news_category=DoctorPosition::where('id','<>',$news->news_category_id)->first() ?? [];
        $similar_products = News::withTranslations()->where('news_category_id', $news_category->id)->inRandomOrder()->get() ?? [];
    
    //   if (!Cookie::get('news_' . $news->id)) {
       
    //     $news->increment('view_count');
     
    // }
        return view('front.doctor.doctor',compact('news','news_category','similar_products'));
    }

    public function blog(){
       
        $news = Blog::withTranslations()->where('status',1)->paginate(18);
        $last_news = Blog::withTranslations()->where('status', 1)->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('front.blogs.index',compact('news','last_news'));
    }

    public function blog_detail($slug){
        $news = Blog::withTranslations()->whereSlug($slug)->first() ?? abort(404);
        if (!Cookie::get('news_' . $news->id)) {
       
            $news->increment('view_count');
         
        }
        $last_news = Blog::withTranslations()->where('status', 1)->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('front.blogs.blog',compact('news','last_news'));
    }

    public function about(){

        return view('front.about.index',['about'=>About::withTranslations()->first(),'doctors'=>Doctor::withTranslations()->where('status',1)->limit(4)->get(),  'statics' => Statistic::withTranslations()->where('status', 1)->get()]);
    }

    public function elaqe(){
        return view('front.contact.index');
    }

   /*  public function products(){
        
        return view('front.products.index');
    } */

  

    public function service_detail($slug){
        $service = Service::whereSlug($slug)->first() ?? abort(404);
        $doctors = Doctor::withTranslations()->where('status',1)->limit(3)->get();
        return view('front.services.index',compact('service','doctors'));
    }

    public function image_gallery(){
       
        $news = ImageGalery::where('status',1)->paginate(18);
        return view('front.galeries.image-galery',compact('news'));
    }
    public function video_gallery(){
       
        $news = VideoGalery::where('status',1)->paginate(18);
        return view('front.galeries.video-galery',compact('news'));
    }
   

     public function comment(CommentRequest $request){
      
        $requests=$request->all();
         Comment::create($requests);
         return redirect()->back()->with('success','Comment posted');
     }

     public function search(Request $request)
    {
      
        if($request->blog !=null){
            $news = Blog::withTranslations()
            ->where('title', 'like', '%' . $request->blog . '%')
            ->where('status', 1)
            ->paginate(18);
            $last_news = Blog::withTranslations()->where('status', 1)->orderBy('created_at', 'DESC')->limit(3)->get();
            return view('front.blogs.index',compact('news','last_news'));
        }
        if($request->news !=null){
                  $news = News::withTranslations()
            ->where('title', 'like', '%' . $request->news . '%')
            ->where('status', 1)
            ->paginate(18);
            $last_news = Blog::withTranslations()->where('status', 1)->orderBy('created_at', 'DESC')->limit(3)->get();
         //   dd($news);
            return view('front.news.index',compact('news','last_news'));
        }
        // if($request->doctor !=null){
        //     $news = Doctor::where('title', 'like', '%' . $request->doctor . '%')->where('status',1)->get();
        //     return view('front.blog.blog',compact('news'));
        // }
       
        
    }
}

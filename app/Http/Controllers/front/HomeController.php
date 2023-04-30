<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactMessageRequest;
use App\Models\About;
use App\Models\Blog;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\ContactMessage;
use App\Models\Doctor;
use App\Models\DoctorPosition;
use App\Models\News;
use App\Models\NewsCategory;

use App\Models\Service;
use App\Models\Slider;
use App\Models\Support;
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
        // $sliders = Slider::where('status',1)->get();
        // $banners = Banner::where('status',1)->limit(2)->get();
        // $news = News::where('status', 1)->orderBy('created_at', 'ASC')->limit(6)->get();
        // $partners = Partner::where('type',1)->get();
        // $cats = Category::where('home', 1)->where('status',1)->with('category_prods')->get();
        return view('front.home.index');//compact('sliders','banners','news','partners', 'cats'));
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
        return view('front.news.news',compact('news','news_category','similar_products'));
    }

    public function blog(){
       
        $news = Blog::where('status',1)->paginate(18);
        return view('front.blog.index',compact('news'));
    }

    public function blog_detail($slug){
        $news = Blog::whereSlug($slug)->first() ?? abort(404);
       
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

   
   

    // public function contact_message(ContactMessageRequest $request){
      
    //     $requests=$request->all();
    //     ContactMessage::create($requests);
    //     return redirect()->back();
    // }
}

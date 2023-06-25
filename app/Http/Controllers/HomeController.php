<?php

namespace App\Http\Controllers;

use App\Jobs\SendBirthdaySms;
use App\Models\Activity;
use App\Models\ActivityBusiness;
use App\Models\Ads;
use App\Models\Blog;
use App\Models\Business;
use App\Models\BusinessCategory;
use App\Models\BusinessComment;
use App\Models\BusinessInfo;
use App\Models\BusinessService;
use App\Models\Category;
use App\Models\City;
use App\Models\Comment;
use App\Models\CustomerContact;
use App\Models\CustomerFaq;
use App\Models\DayList;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Personel;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function selectTest()
    {

    }
    public function index()
    {
        $ads=Ads::latest()->get();

        $blogs= Blog::where('status', 1)->latest()->take(3)->get();
        $businesses=Business::all();
        $activities=Activity::where('status', 1)->latest()->take(4)->get();
        $featuredServices=ServiceSubCategory::whereNotNull('featured')->orderBy('featured', 'asc')->get();
        return view('welcome', compact( 'blogs', 'businesses','ads', 'activities', 'featuredServices'));
    }
    public function pageDetail($slug)
    {
        $page=Page::where('slug', $slug)->firstOrFail();
        return view('page.detail', compact('page'));
    }

    public function personelControl(Request $request)
    {
        $personel=Personel::where('email', $request->phone)->first();
        if ($personel){
            if (Hash::check($request->password, $personel->password)){
                if($personel->activities()->where('activity_id', $request->activity_id)->first()){
                    return response()->json([
                        'status'=>"error",
                        'message'=>"Bu etkinliğe zaten katıldınız",
                    ]);
                }
                else{
                    $activityPersonel=new ActivityBusiness();
                    $activityPersonel->activity_id=$request->activity_id;
                    $activityPersonel->personel_id=$personel->id;
                    $activityPersonel->status=1;
                    if ($activityPersonel->save()){
                        return response()->json([
                            'status'=>"success",
                            'message'=>"Etkinliğe Katılımınız Onaylandı. Aşağıdaki Katılımcı Listesinden Görebilirsiniz",
                        ]);
                    }
                }

            }
            else{
                return response()->json([
                    'status'=>"error",
                    'message'=>"Kullanıcı Bilgisi Doğrulanamadı",
                ]);
            }
        }
        else{
            return response()->json([
                'status'=>"error",
                'message'=>"Girdiğiniz telefon numarası sistemde kayıtlı değil",
            ]);
        }
    }
    public function contact()
    {
        return view('contact');
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'name'=>"required",
            'email'=>"required",
            'subject'=>"required",
            'content'=>"required",
        ], [], [
            'name'=>"Ad Soyad",
            'email'=>"E-posta",
            'subject'=>"Konu",
            'content'=>"İçerik",
        ]);
        $contact=new CustomerContact();
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->subject=$request->input('subject');
        $contact->content=$request->input('content');
        if ($contact->save()){
            return back()->with('response', [
               'status'=>"success",
               'message'=>"İletişim mesajınız gönderildi"
            ]);
        }
    }
    public function liveSearch(Request $request)
    {

        $searchTerm = $request->input('search');
        $businesses = Business::where('name', 'LIKE', '%'.$searchTerm.'%')->get();

        return view('live-search-results', compact('businesses'));

    }
    public function allService()
    {
        $serviceAll=ServiceCategory::all();
        return view('service.index', compact('serviceAll'));
    }

    public function serviceDetail($slug, Request $request)
    {
        if(count($request->all()) == 0){
            $service=ServiceCategory::where('slug', $slug)->firstOrFail();/*hizmet kategorisini bul*/
            $businesses=$service->businessService()->where('status', 1)/*hizmeti veren işletmeleri bul*/
                ->select('business_id')
                ->groupBy('business_id')
                ->paginate(5);
        }
        else{
            $service=ServiceSubCategory::where('slug', $request->input('alt-kategori'))->firstOrFail();/*hizmet kategorisini bul*/
            $businesses=$service->businessService()->where('status', 1)/*hizmeti veren işletmeleri bul*/
                ->select('business_id')
                ->groupBy('business_id')
                ->paginate(5);
        }
        return view('service.detail', compact('businesses', 'service'));
    }
    public function activities()
    {
        $activities=Activity::latest()->paginate(10);
        return view('activity.index', compact('activities'));
    }
    public function activityDetail($slug)
    {
        $activity=Activity::where('slug', $slug)->firstOrFail();

        $heads=$this->headers($activity->description);
        $activities=Activity::latest()->take(4)->get();
        return view('activity.detail', compact('activity', 'heads', 'activities'));
    }
    public function about()
    {
        $sponsors=Sponsor::latest()->get();
        $comments=Comment::where('status', 1)->latest()->get();
        return view('about.index', compact('sponsors', 'comments'));
    }

    public function faq()
    {
        $faqs= CustomerFaq::all();
        return view('faq.index', compact('faqs'));
    }
    public function businessCategory($slug)
    {
        $businessCategory=BusinessCategory::where('slug', $slug)->firstOrFail();
        $businesses=$businessCategory->businesses()->paginate(5);

        return view('business.category', compact('businesses'));
    }
    public function getInfo(Request $request)
    {
        $request->validate([
            'fullname'=>"required|min:3",
            'business_name'=>"required|min:3",
            'phone'=>"required|min:11"
        ], [], [
            'fullname'=>"Ad soyad",
            'business_name'=>"İşletme Adı",
            'phone'=>"Telefon"
        ]);
        $businessInfo=new BusinessInfo();
        $businessInfo->fullname=$request->input('fullname');
        $businessInfo->business_name=$request->input('business_name');
        $businessInfo->phone=$request->input('phone');
        if ($businessInfo->save()){
            return to_route('business')->with('response', [
                'status'=>"success",
                'message'=>"Talebiniz Gönderildi Size en kısa zamanda arayacağız"
            ]);
        }
    }
    public function page($slug)
    {
        $page=Page::where('slug', $slug)->first();
        return view('front.page', compact('page'));
    }
    public function category($slug)
    {
        $category=Category::where('slug', $slug)->first();
        $businesses= Business::where('category_id', $category->id)->get();

        return view('front.category', compact('businesses'));
    }
    public function allBusiness()
    {
        $businesses=Business::where('status', 2)->orderBy('order_number')->paginate(5);
        return view('business.index', compact('businesses'));
    }

    public function businessDetail($slug)
    {
        $business=Business::where('slug', $slug)->firstOrFail();
        $dayList=DayList::all();
        $womanServices=$business->services()->where('type',1)->get();
        $manServices=$business->services()->where('type',2)->get();
        $womanServiceCategories=$womanServices->groupBy('category');
        $manServiceCategories=$manServices->groupBy('category');
        $manCategories=[];
        $womanCategories=[];
        foreach ($manServiceCategories as $key=>$value){
             $manCategories[]=ServiceCategory::find($key);
        }
        foreach ($womanServiceCategories as $key=>$value){
            $womanCategories[]=ServiceCategory::find($key);
        }
        return view('business.detail', compact('business', 'dayList', 'manServiceCategories', 'womanServiceCategories', 'womanCategories', 'manCategories'));
    }
    public function login()
    {
        return view('customer.auth.login');

    }

    public function blogs()
    {
        $blogs= Blog::where('status', 1)->paginate(10);
        return view('blog.index', compact('blogs'));
    }
    public function headers($html)
    {
        $heads=[];
        preg_match_all('/<h4.*?>(.*?)<\/h4>/', $html, $matches);
        foreach ($matches[1] as $match) {
            $heads[]=$match;
        }
        return $heads;
    }
    public function blogDetail($slug)
    {
        $blog=Blog::where('slug', $slug)->firstOrFail();
        $heads=$this->headers($blog->description);
        $blogs=Blog::latest()->take(4)->get();
        return view('blog.detail', compact('blog', 'heads', 'blogs'));
    }
    public function detail($slug){
        $business=Business::where('slug', $slug)->first();

        return view('front.business_detail', compact('business'));
    }
    public function typeSearch(Request $request)
    {
        //$request->dd();
        if ($request->city == null){
            $businesses=Business::where('category_id', $request->type)->get();
        }
        else{
            $businesses=Business::where('category_id', $request->type)->where('city', $request->city)->get();
        }

        return view('front.type_search', compact('businesses'));
    }
    /*
     * Service Post Function
     * */
    public function serviceSearch(Request $request)
    {
        $request->validate([
           'service_id'=>"required_without:city_id",
           'city_id'=>"required_without:service_id",
        ], [], [
            'service_id'=>"Hizmet Seçimi",
            'city_id'=>"Şehir Seçimi"
        ]);
        $service_id = $request->input('service_id');
        $city_id = $request->input('city_id');

        if ($service_id && $city_id) {
            $service=ServiceCategory::where('id', $service_id)->firstOrFail();
            $city=City::where('id',$city_id)->first();
            return to_route('serviceAllGet', [$city->slug, $service->slug]);
        }
        else {
            if ($service_id) {
                $service=ServiceCategory::where('id', $service_id)->firstOrFail();
                return to_route('serviceGet', $service->slug);
            }
            if ($city_id) {
                $city=City::where('id',$city_id)->first();
                return to_route('serviceCityGet', $city->slug);
            }
        }
    }
    /*
      * Service Get $city, $service Function
    * */
    public function serviceAllGet($city, $service)
    {
        $service=ServiceCategory::where('slug', $service)->first();
        $city=City::where('slug', $city)->first();
        $businesses = Business::where('city', $city->id)
            ->whereHas('services', function ($query) use ($service) {
                $query->where('category', $service->id);
            })
            ->paginate(5);

        return view('service.search', compact('businesses', 'service'));
    }
    /*
       * Service Get $city Function
     *
     * */
    public function serviceCityGet($city)
    {
        $city=City::where('slug', $city)->first();
        $businesses = Business::where('city', $city->id)->paginate(5);
        return view('service.search', compact('businesses', 'city'));
    }
    /*
       * Service Get $service Function
     *
     * */
    public function serviceGet($service)
    {
        $service=ServiceCategory::where('slug', $service)->first();
        $businesses = Business::whereHas('services', function ($query) use ($service) {
                $query->where('category', $service->id);
            })
            ->paginate(5);
        return view('service.search', compact('businesses', 'service'));

    }

    public function businessCategorySearch(Request $request)
    {

        $request->validate([
            'category_id'=>"required_without:city_id",
            'city_id'=>"required_without:category_id",
        ], [], [
            'category_id'=>"Salon Türü Seçimi",
            'city_id'=>"Şehir Seçimi"
        ]);
        $category_id = $request->input('category_id');
        $city_id = $request->input('city_id');

        if ($category_id && $city_id) {
            $service=BusinessCategory::where('id', $category_id)->firstOrFail();
            $city=City::where('id',$city_id)->first();
            return to_route('categoryAllGet', [$city->slug, $service->slug]);
        }
        else {
            if ($category_id) {
                $service=BusinessCategory::where('id', $category_id)->firstOrFail();
                return to_route('categoryGet', $service->slug);
            }
            if ($city_id) {
                $city=City::where('id',$city_id)->first();
                return to_route('categoryCityGet', $city->slug);
            }
        }
    }

    public function categoryAllGet($city, $category)
    {
        $category=BusinessCategory::where('slug', $category)->first();
        $city=City::where('slug', $city)->first();
        $businesses = Business::where('category_id', $category->id)->paginate(5);
        return view('service.search', compact('businesses', 'category', 'city'));
    }
    public function categoryCityGet($city)
    {
        $city=City::where('slug', $city)->first();
        $service=null;
        $businesses = Business::where('city', $city->id)->paginate(5);
        return view('service.search', compact('businesses', 'service', 'city'));
    }
    public function categoryGet($category)
    {
        $category=BusinessCategory::where('slug', $category)->first();
        $businesses = Business::where('category_id', $category->id)->paginate(5);
        return view('service.search', compact('businesses', 'category'));

    }
    public function businessSearch(Request $request)
    {
        $business=Business::find($request->business_id);
        return to_route('detail', $business->slug);
    }

}

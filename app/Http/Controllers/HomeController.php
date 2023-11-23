<?php

namespace App\Http\Controllers;

use App\Http\Resources\ServiceCategoryResource;
use App\Jobs\SendBirthdaySms;
use App\Models\Activity;
use App\Models\ActivityBusiness;
use App\Models\Ads;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Business;
use App\Models\BusinessCategory;
use App\Models\BusinessComment;
use App\Models\BusinessInfo;
use App\Models\BusinessService;
use App\Models\Category;
use App\Models\City;
use App\Models\Comment;
use App\Models\Country;
use App\Models\CustomerContact;
use App\Models\CustomerFaq;
use App\Models\DayList;
use App\Models\Faq;
use App\Models\FeaturedCategorie;
use App\Models\Page;
use App\Models\Personel;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $ads = Ads::all();

        $blogs = Blog::where('status', 1)->latest()->take(3)->get();
        $activities = Activity::where('status', 1)->latest()->take(4)->get();
        $featuredServices = ServiceSubCategory::whereNotNull('featured')->where('is_abroad', 0)->orderBy('featured', 'asc')->get();
        $featuredCategories = FeaturedCategorie::where('status', 1)->get();
        $abroadServices = ServiceSubCategory::where('is_abroad', 1)->get();
        $comments = Comment::where('user_statu', 1)->where('status', 1)->latest()->get();

        $abroadCities = Country::find(4)->cities;
        return view('welcome', compact('abroadCities', 'comments', 'abroadServices', 'featuredCategories', 'blogs', 'ads', 'activities', 'featuredServices', 'featuredCategories'));
    }

    public function nearMe(Request $request)
    {

        $lat = $request->input('lat'); // Kullanıcıdan alınan latitude
        $lng = $request->input('long'); // Kullanıcıdan alınan longitude
        $km = $request->input('km');

        $distance = isset($km) ? intval($km) : 100; // Yakınlık yarıçapı (örneğin, 100 kilometre)

        $businesses = Business::select('businesses.*')->has('personel')
            ->when((!empty($lat) && !empty($lng)), function ($q) use ($lat, $lng, $distance) {
                $q->selectRaw("(6371 * acos(cos(radians(?)) * cos(radians(lat)) * cos(radians(longitude) - radians(?)) + sin(radians(?)) * sin(radians(lat)))) AS distance", [$lat, $lng, $lat])
                    ->havingRaw("distance < ?", [$distance]);
            })
            ->orderBy('distance', 'asc')
            ->paginate(setting('speed_pagination_number'));

        $favoriteIds = [];
        if (auth('customer')->check()) {
            foreach (auth('customer')->user()->favorites as $favorite) {
                $favoriteIds[] = $favorite->business_id;
            }
        }

        return view('service.search', compact('businesses', 'favoriteIds', 'lat', 'lng'));
    }

    public function allServices()
    {
        $services = ServiceCategory::all();

        $womanServices = [];
        $manServices = [];
        foreach ($services as $service) {
            if ($service->type_id == 1) {
                $womanServices[] = ServiceCategoryResource::make($service);
            } else {
                $manServices[] = ServiceCategoryResource::make($service);
            }
        }
        //return view('');
    }

    public function pageDetail($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('page.detail', compact('page'));
    }

    public function personelControl(Request $request)
    {
        $personel = Personel::where('email', $request->phone)->first();
        if ($personel) {
            if (Hash::check($request->password, $personel->password)) {
                if ($personel->activities()->where('activity_id', $request->activity_id)->first()) {
                    return response()->json([
                        'status' => "error",
                        'message' => "Sie haben bereits an diesem Event teilgenommen.",
                    ]);
                } else {
                    $activityPersonel = new ActivityBusiness();
                    $activityPersonel->activity_id = $request->activity_id;
                    $activityPersonel->personel_id = $personel->id;
                    $activityPersonel->status = 1;
                    if ($activityPersonel->save()) {
                        return response()->json([
                            'status' => "success",
                            'message' => "Ihre Teilnahme an dem Event wurde bestätigt. Sie können die Liste der Teilnehmer unten sehen.",
                        ]);
                    }
                }

            } else {
                return response()->json([
                    'status' => "error",
                    'message' => "Benutzerinformationen stimmen nicht überein. ",
                ]);
            }
        } else {
            return response()->json([
                'status' => "error",
                'message' => "Die von Ihnen angegebene Telefonnummer ist nicht im System registriert.",
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
            'name' => "required",
            'email' => "required",
            'subject' => "required",
            'content' => "required",
        ], [], [
            'name' => "Name Nachname",
            'email' => "E-mail",
            'subject' => "Thema",
            'content' => "Erläuterung",
        ]);
        $contact = new CustomerContact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->content = $request->input('content');
        if ($contact->save()) {
            return back()->with('response', [
                'status' => "success",
                'message' => "Ihre Nachricht wurde gesendet. "
            ]);
        }
    }

    public function liveSearch(Request $request)
    {

        $searchTerm = $request->input('search');
        $businesses = Business::has('personel')->where('name', 'LIKE', '%' . $searchTerm . '%')->get();

        return view('search.live-search-results', compact('businesses'));

    }

    public function allService()
    {
        $services = ServiceCategory::all();

        $womanServices = [];
        $manServices = [];
        foreach ($services as $service) {
            if ($service->type_id == 1) {
                $womanServices[] = ServiceCategoryResource::make($service);
            } else {
                $manServices[] = ServiceCategoryResource::make($service);
            }
        }
        return view('service.index', compact('womanServices', 'manServices'));
    }

    public function serviceDetail($slug, Request $request)
    {
        if (count($request->all()) == 0) {
            $service = ServiceCategory::where('slug', $slug)->firstOrFail();/*hizmet kategorisini bul*/

            $businesses = Business::whereHas('businessService', function ($query) use ($service) {
                $query->where('category', $service->id);
            })->whereNotNull('city')
                ->has("personel")
                ->paginate(setting('speed_pagination_number'));

        } else {
            $service = ServiceSubCategory::where('slug', $request->input('alt-kategori'))->firstOrFail();/*hizmet kategorisini bul*/
            $businesses = Business::whereHas('businessService', function ($query) use ($service) {
                $query->where('category', $service->id);
            })->whereNotNull('city')
                ->has("personel")
                ->paginate(setting('speed_pagination_number'));
        }

        $favoriteIds = [];
        if (auth('customer')->check()) {
            foreach (auth('customer')->user()->favorites as $favorite) {
                $favoriteIds[] = $favorite->business_id;
            }
        }


        return view('service.detail', compact('businesses', 'service', 'favoriteIds'));
    }

    public function activities()
    {
        $activities = Activity::latest()->paginate(setting('speed_pagination_number'));
        return view('activity.index', compact('activities'));
    }

    public function activityDetail($slug)
    {
        $activity = Activity::where('slug', $slug)->firstOrFail();

        $heads = $this->headers($activity->description);
        $activities = Activity::latest()->take(4)->get();
        return view('activity.detail', compact('activity', 'heads', 'activities'));
    }

    public function about()
    {
        $sponsors = Sponsor::latest()->get();
        $comments = Comment::where('status', 1)->latest()->get();
        return view('about.index', compact('sponsors', 'comments'));
    }

    public function faq()
    {
        $faqs = Faq::all();
        return view('faq.index', compact('faqs'));
    }

    public function businessCategory(Request $request,$slug)
    {

        $businessCategory = BusinessCategory::where('slug', $slug)->firstOrFail();
        if($request->filled("gender_type") and $request->filled('city_id')){
            $businesses = $businessCategory->businesses()->whereNotNull('city')->where('type_id', $request->gender_type)->where('city', $request->city_id)->has('personel')->paginate(setting('speed_pagination_number'));
        }
        else{
            $businesses = $businessCategory->businesses()->whereNotNull('city')->has('personel')->paginate(setting('speed_pagination_number'));
        }
        $favoriteIds = [];
        if (auth('customer')->check()) {
            foreach (auth('customer')->user()->favorites as $favorite) {
                $favoriteIds[] = $favorite->business_id;
            }
        }

        return view('business.category', compact('businesses', 'favoriteIds'));
    }

    public function getInfo(Request $request)
    {
        $request->validate([
            'fullname' => "required|min:3",
            'business_name' => "required|min:3",
            'phone' => "required|min:11"
        ], [], [
            'fullname' => "Name Nachname",
            'business_name' => "Firmenname",
            'phone' => "Mobilenummer"
        ]);
        $businessInfo = new BusinessInfo();
        $businessInfo->fullname = $request->input('fullname');
        $businessInfo->business_name = $request->input('business_name');
        $businessInfo->phone = $request->input('phone');
        if ($businessInfo->save()) {
            return to_route('business')->with('response', [
                'status' => "success",
                'message' => "Ihre Anfrage wurde versendet. Wir werden uns so schnell wie möglich bei Ihnen melden."
            ]);
        }
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('front.page', compact('page'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $businesses = Business::where('category_id', $category->id)->has('personel')->get();

        return view('front.category', compact('businesses'));
    }

    public function allBusiness()
    {
        $businesses = Business::where('status', 2)->has('personel')->orderBy('order_number')->paginate(setting('speed_pagination_number'));
        return view('business.index', compact('businesses'));
    }

    public function businessDetail($slug)
    {
        $business = Business::where('slug', $slug)->firstOrFail();
        $dayList = DayList::all();
        $womanServices = $business->services()->where('type', 1)->get();
        $manServices = $business->services()->where('type', 2)->get();
        $womanServiceCategories = $womanServices->groupBy('category');
        $manServiceCategories = $manServices->groupBy('category');
        $manCategories = [];
        $womanCategories = [];
        foreach ($manServiceCategories as $key => $value) {
            $manCategories[] = ServiceCategory::find($key);
        }
        foreach ($womanServiceCategories as $key => $value) {
            $womanCategories[] = ServiceCategory::find($key);
        }
        return view('business.detail', compact('business', 'dayList', 'manServiceCategories', 'womanServiceCategories', 'womanCategories', 'manCategories'));
    }

    public function login()
    {
        return view('customer.auth.login');

    }

    public function blogs()
    {
        $blogs = Blog::where('status', 1)->paginate(setting('speed_pagination_number'));
        return view('blog.index', compact('blogs'));
    }

    public function headers($html)
    {
        $heads = [];
        preg_match_all('/<h4.*?>(.*?)<\/h4>/', $html, $matches);
        foreach ($matches[1] as $match) {
            $heads[] = $match;
        }
        return $heads;
    }

    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $heads = $this->headers($blog->description);
        $blogs = Blog::latest()->take(4)->get();
        $comments = $blog->comments()->paginate(setting('speed_pagination_number'));

        return view('blog.detail', compact('blog', 'heads', 'blogs', 'comments'));
    }

    public function blogCommentStore(Request $request)
    {
        $blogComment = new BlogComment();
        $blogComment->blog_id = $request->input('blog_id');
        $blogComment->customer_id = auth('customer')->id();
        $blogComment->comment = $request->input('comment');
        $blogComment->ip = $request->ip();
        if ($blogComment->save()) {
            return back()->with('response', [
                'status' => "success",
                'message' => "Ihr Kommentar wurde abgeschickt und wird nach einer Überprüfung veröffentlicht."
            ]);
        }

    }

    /*
     * Service Post Function
     * */
    public function serviceSearch(Request $request)
    {
        $request->validate([
            'service_id' => "required_without:city_id",
            'city_id' => "required_without:service_id",
        ], [], [
            'service_id' => "Hizmet Seçimi",
            'city_id' => "Şehir Seçimi"
        ]);
        $service_id = $request->input('service_id');
        $city_id = $request->input('city_id');

        if ($service_id && $city_id && $city_id != "nach_Standort") {
            $service = ServiceCategory::where('id', $service_id)->firstOrFail();
            $city = City::where('id', $city_id)->first();
            return to_route('serviceAllGet', [$city->slug, $service->slug]);
        } else {
            if ($service_id) {
                $service = ServiceCategory::where('id', $service_id)->firstOrFail();
                return to_route('serviceGet', $service->slug);
            }
            if ($city_id != "nach_Standort") {
                $city = City::where('id', $city_id)->first();
                return to_route('serviceCityGet', $city->slug);
            }
            if ($city_id == "nach_Standort") {
                return to_route('nachStandort', ['lat' => $request->input('lat'), 'long' => $request->input('long')]);
            }
        }
    }

    /*
      * Service Get $city, $service Function
    * */
    public function serviceAllGet($city, $service)
    {

        $service = ServiceCategory::where('slug', $service)->first();
        $city = City::where('slug', $city)->first();

        $businesses = Business::whereNotNull("city")->has('personel')->where('city', $city->id)
            ->whereHas('services', function ($query) use ($service) {
                $query->where('category', $service->id);
            })
            ->paginate(setting('speed_pagination_number'));
        $favoriteIds = [];
        if (auth('customer')->check()) {
            foreach (auth('customer')->user()->favorites as $favorite) {
                $favoriteIds[] = $favorite->business_id;
            }
        }
        return view('service.search', compact('businesses', 'service', 'favoriteIds', 'city'));
    }

    public function serviceSubCategoryGet($category, $subCategory)
    {
        $service = ServiceCategory::where('slug', $category)->first();
        $subCategory = ServiceSubCategory::where('slug', $subCategory)->first();

        $businesses = Business::where('status', 1)
            ->whereHas('services', function ($query) use ($service, $subCategory) {
                $query->where('category', $service->id)->where('sub_category', $subCategory->id);
            })
            ->has('personel')
            ->whereNotNull('city')
            ->paginate(setting('speed_pagination_number'));

        $favoriteIds = [];
        if (auth('customer')->check()) {
            foreach (auth('customer')->user()->favorites as $favorite) {
                $favoriteIds[] = $favorite->business_id;
            }
        }

        $abroadCities = City::where('country_id', 4)->get();
        return view('service.search', compact('businesses', 'service', 'favoriteIds', 'subCategory', 'abroadCities'));
    }

    public function serviceSubSearch(Request $request)
    {
        $request->validate([
            'sub_category' => "required"
        ], [], [
            'sub_category' => "Service"
        ]);

        $subCategory = ServiceSubCategory::where('id', $request->input('sub_category'))->first();

        $service = ServiceCategory::where('id', $subCategory->category_id)->first();

        $businesses = Business::where('status', 1)
            ->has('personel')
            ->whereNotNull('city')
            ->where('city', $request->input('city_id'))
            ->whereHas('services', function ($query) use ($service, $subCategory) {
                $query->where('category', $service->id)->where('sub_category', $subCategory->id);
            })
            ->when($request->filled('gender_type'), function ($query) use ($request){
                $query->where('type_id', $request->gender_type);
            })
            ->paginate(setting('speed_pagination_number'));
        $favoriteIds = [];
        if (auth('customer')->check()) {
            foreach (auth('customer')->user()->favorites as $favorite) {
                $favoriteIds[] = $favorite->business_id;
            }
        }

        return view('service.search', compact('businesses', 'service', 'favoriteIds', 'subCategory'));
    }
    /*
       * Service Get $city Function
     *
     * */
    public function serviceCityGet($city)
    {
        $city = City::where('slug', $city)->first();
        $businesses = Business::where('city', $city->id)->has('personel')->whereNotNull('city')->paginate(setting('speed_pagination_number'));
        $favoriteIds = [];
        if (auth('customer')->check()) {
            foreach (auth('customer')->user()->favorites as $favorite) {
                $favoriteIds[] = $favorite->business_id;
            }
        }
        return view('service.search', compact('businesses', 'city', 'favoriteIds'));
    }

    /*
       * Service Get $service Function
     *
     * */
    public function serviceGet($service)
    {
        $service = ServiceCategory::where('slug', $service)->first();
        $businesses = Business::whereHas('services', function ($query) use ($service) {
            $query->where('category', $service->id);
        })
            ->has('personel')
            ->whereNotNull('city')
            ->paginate(setting('speed_pagination_number'));
        return view('service.search', compact('businesses', 'service'));

    }

    public function businessCategorySearch(Request $request)
    {

        $request->validate([
            'category_id' => "required_without:city_id",
            'city_id' => "required_without:category_id",
        ], [], [
            'category_id' => "Salon Türü Seçimi",
            'city_id' => "Şehir Seçimi"
        ]);
        $category_id = $request->input('category_id');
        $city_id = $request->input('city_id');

        if ($category_id && $city_id && $city_id != "nach_Standort") {
            $service = BusinessCategory::where('id', $category_id)->firstOrFail();
            $city = City::where('id', $city_id)->first();
            return to_route('categoryAllGet', [$city->slug, $service->slug]);
        } else {
            if ($category_id) {
                $service = BusinessCategory::where('id', $category_id)->firstOrFail();
                return to_route('categoryGet', $service->slug);
            }
            if ($city_id && $city_id != "nach_Standort") {
                $city = City::where('id', $city_id)->first();
                return to_route('categoryCityGet', $city->slug);
            }
            if ($city_id == "nach_Standort") {
                return to_route('nachStandort', ['lat' => $request->input('lat'), 'long' => $request->input('long')]);
            }
        }
    }

    public function categoryAllGet($city, $category)
    {
        $category = BusinessCategory::where('slug', $category)->first();
        $city = City::where('slug', $city)->first();
        $businesses = $category->businesses()->where('city', $city->id)->paginate(setting('speed_pagination_number'));

        $favoriteIds = [];
        if (auth('customer')->check()) {
            foreach (auth('customer')->user()->favorites as $favorite) {
                $favoriteIds[] = $favorite->business_id;
            }
        }

        return view('service.search', compact('businesses', 'category', 'city', 'favoriteIds'));
    }

    public function categoryAndSubCategoryGet($category, $subCategory)
    {

    }

    public function categoryCityGet($city)
    {
        $city = City::where('slug', $city)->first();
        $service = null;
        $businesses = Business::whereNotNull('city')
            ->has('personel')
            ->where('city', $city->id)
            ->paginate(setting('speed_pagination_number'));

        $favoriteIds = [];
        if (auth('customer')->check()) {
            foreach (auth('customer')->user()->favorites as $favorite) {
                $favoriteIds[] = $favorite->business_id;
            }
        }
        $abroadServices = ServiceSubCategory::where('is_abroad', 1)->get();
        return view('service.search', compact('businesses', 'service', 'city', 'favoriteIds', 'abroadServices'));
    }

    public function categoryGet($category)
    {
        $category = BusinessCategory::where('slug', $category)->first();
        $businesses = $category->businesses()->whereNotNull('city')->has('personel')->paginate(setting('speed_pagination_number'));

        $favoriteIds = [];
        if (auth('customer')->check()) {
            foreach (auth('customer')->user()->favorites as $favorite) {
                $favoriteIds[] = $favorite->business_id;
            }
        }
        return view('service.search', compact('businesses', 'category', 'favoriteIds'));

    }

    public function businessSearch(Request $request)
    {
        $business = Business::find($request->business_id);
        return to_route('detail', $business->slug);
    }

}

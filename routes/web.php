<?php

use Illuminate\Support\Facades\Route;
Route::get('/test', function (){
    $existingData = \App\Models\Business::find(8);
    for($i = 0; $i < 1000; $i++){
        $newData = $existingData->replicate();
        $newData->email = "1234567".$i;
        $newData->slug = "kuafor-". $i;
        $newData->save();
    }
});
Route::controller(\App\Http\Controllers\HomeController::class)->group(function (){
    Route::get('/', 'index')->name('welcome');
    Route::get('/salonlar', 'allBusiness')->name('business.all');
    Route::get('/salon-kategori/{slug}', 'businessCategory')->name('business.category');
    Route::get('/salon/{slug}/detay', 'businessDetail')->name('business.detail');

    Route::get('sayfa/{slug}', 'pageDetail')->name('page.detail');

    Route::get('/bloglar','blogs')->name('blog.index');
    Route::get('/blog/{slug}/detay','blogDetail')->name('blog.detail');
    Route::post('/blog/yorum/kaydet', 'blogCommentStore')->name('blog.comment.store');
    Route::get('/etkinlikler','activities')->name('activity.index');
    Route::get('/etkinlik/{slug}/detay','activityDetail')->name('activity.detail');
    Route::post('/activity/personel/control', 'personelControl')->name('activity.personel.control');

    Route::get('/hakkimizda','about')->name('about');
    Route::get('/sss','faq')->name('faq');

    Route::get('/tum-hizmetler','allService')->name('service.all');
    Route::get('/hizmet/{slug}','serviceDetail')->name('service.detail');

    Route::post('/hizmet-ara','serviceSearch')->name('searchService');
    Route::get('/hizmet-ara/{city}/{service}','serviceAllGet')->name('serviceAllGet');
    Route::get('/hizmet-turu-ara/{category}/{service}','serviceSubCategoryGet')->name('serviceSubCategoryGet');
    Route::get('/hizmet-ara/{city}','serviceCityGet')->name('serviceCityGet');
    Route::get('/hizmet/{service}','serviceGet')->name('serviceGet');

    Route::post('/salon-ara', 'businessCategorySearch')->name('businessCategorySearch');
    Route::get('/salon-ara/{city}/{category}','categoryAllGet')->name('categoryAllGet');
    Route::get('/sehir-ara/{city}','categoryCityGet')->name('categoryCityGet');
    Route::get('/salon-ara/{category}','categoryGet')->name('categoryGet');

    Route::get('/live-search', 'liveSearch')->name('live-search');
    Route::get('/iletisim', 'contact')->name('contact');
    Route::post('/iletisim/save', 'contactStore')->name('contact.store');

});


Route::get('randevu-olustur/{business}', [\App\Http\Controllers\AppointmentController::class, 'step1Show'])->name('step1.show');
Route::get('randevu-olustur/adim-1/save', [\App\Http\Controllers\AppointmentController::class, 'step1Store'])->name('step1.store');
Route::post('randevu-olustur', [\App\Http\Controllers\AppointmentController::class, 'appointmentCreate'])->name('appointment.create');
Route::get('randevu-olusturuldu/{appointment}', [\App\Http\Controllers\AppointmentController::class, 'step5Show'])->name('appointment.success');
Route::post('appointment/time/control', [\App\Http\Controllers\AppointmentController::class, 'appointmentTimeControl'])->name('appointment.time.control');
Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
    Route::get('/login', [\App\Http\Controllers\Customer\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Customer\Auth\LoginController::class, 'login']);

    Route::post('/logout', [\App\Http\Controllers\Customer\Auth\LoginController::class, 'logout'])->name('logout');

    Route::get('/register', [\App\Http\Controllers\Customer\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [\App\Http\Controllers\Customer\Auth\RegisterController::class, 'register']);

    Route::get('/sifremi-unuttum', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'showForgotView'])->name('showForgotView');
    Route::post('/sifremi-unuttum', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'forgotPassword'])->name('forgotPassword');

    Route::get('/telefon-dogrulama', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'phoneVerify'])->name('phone.verify');
    Route::post('/telefon-dogrulama', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'phoneVerifyAction'])->name('phone.verify.action');

    Route::get('/verify-phone', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'index'])->name('verify');
    Route::post('/code/test', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'verifyCode'])->name('verify.code');

    Route::middleware(['auth:customer', 'active'])->group(function () {
        Route::get('/home', [\App\Http\Controllers\Customer\HomeController::class, 'index'])->name('home');
        Route::get('/yorumlar', [\App\Http\Controllers\Customer\HomeController::class, 'comments'])->name('comments');
        Route::get('/favori-isletmeler', [\App\Http\Controllers\Customer\HomeController::class, 'favorites'])->name('favorite.index');
        Route::get('/islem-yaptigim-isletmeler', [\App\Http\Controllers\Customer\HomeController::class, 'addicted'])->name('addicted.index');
        Route::get('/ürün-siparislerim', [\App\Http\Controllers\Customer\HomeController::class, 'orders'])->name('order.index');
        Route::post('district/get', [\App\Http\Controllers\Customer\HomeController::class, 'getDistrict'])->name('getDistrict');
        Route::post('/appointment/cancel', [\App\Http\Controllers\Customer\HomeController::class, 'cancelAppointment'])->name('appointment.cancel');
        Route::post('/add/favorite', [\App\Http\Controllers\Customer\HomeController::class, 'addFavorite'])->name('favorite.add');
        Route::post('/remove/favorite', [\App\Http\Controllers\Customer\HomeController::class, 'removeFavorite'])->name('favorite.remove');
        Route::get('/paketlerim', [\App\Http\Controllers\Customer\HomeController::class, 'packets'])->name('packet.index');
        Route::get('/paket/{id}/detay', [\App\Http\Controllers\Customer\HomeController::class, 'packetDetail'])->name('packet.detail');
        Route::get('/gecmis-randevularım', [\App\Http\Controllers\Customer\HomeController::class, 'appointments'])->name('appointment.index');
        Route::get('/randevu/{id}/detay', [\App\Http\Controllers\Customer\HomeController::class, 'appointmentDetail'])->name('appointment.detail');
        Route::post('/appointment/comment/store', [\App\Http\Controllers\Customer\HomeController::class, 'addComment'])->name('appointment.comment.store');
        Route::controller(\App\Http\Controllers\Customer\ProfileController::class)->prefix('profile')->as('profile.')->group(function () {
            Route::get('/hesap-ayarlari', 'edit')->name('edit');
            Route::get('/sifre-degistir', 'editPassword')->name('password.edit');
            Route::post('/update', 'update')->name('update');
            Route::post('/change-password', 'changePassword')->name('change-password');
        });
    });
});
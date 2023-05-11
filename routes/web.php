<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\HomeController::class)->group(function (){

    Route::get('/', 'index')->name('welcome');
    Route::get('/salonlar', 'allBusiness')->name('business.all');
    Route::get('/salon-kategori/{slug}', 'businessCategory')->name('business.category');
    Route::get('/salon/{slug}/detay', 'businessDetail')->name('business.detail');

    Route::get('sayfa/{slug}', [\App\Http\Controllers\HomeController::class, 'pageDetail'])->name('page.detail');

    Route::get('/bloglar','blogs')->name('blog.index');
    Route::get('/blog/{slug}/detay','blogDetail')->name('blog.detail');

    Route::get('/etkinlikler','activities')->name('activity.index');
    Route::get('/etkinlik/{slug}/detay','activityDetail')->name('activity.detail');
    Route::post('/activity/personel/control', [\App\Http\Controllers\HomeController::class, 'personelControl'])->name('activity.personel.control');

    Route::get('/tum-hizmetler','allService')->name('service.all');
    Route::get('/hizmet/{slug}','serviceDetail')->name('service.detail');
    Route::get('/hakkimizda','about')->name('about');
    Route::get('/sss','faq')->name('faq');

    Route::post('/hizmet-ara','serviceSearch')->name('searchService');
    Route::get('/hizmet-ara/{city}/{service}','serviceAllGet')->name('serviceAllGet');
    Route::get('/hizmet-ara/{city}','serviceCityGet')->name('serviceCityGet');
    Route::get('/hizmet/{service}','serviceGet')->name('serviceGet');

    Route::post('/salon-ara', 'businessCategorySearch')->name('businessCategorySearch');
    Route::get('/salon-ara/{city}/{category}','categoryAllGet')->name('categoryAllGet');
    Route::get('/salon-ara/{city}','categoryCityGet')->name('categoryCityGet');
    Route::get('/isletme-ara/{category}','categoryGet')->name('categoryGet');

    Route::get('/live-search', 'liveSearch')->name('live-search');
    Route::get('/iletisim', 'contact')->name('contact');
    Route::post('/iletisim/save', 'contactStore')->name('contact.store');

});
Route::controller(\App\Http\Controllers\AppointmentController::class)->prefix('randevu-al')->group(function (){
    Route::get('/{business}/hizmet/{service}/adim-1', 'step1Show')->name('step1.show');
    Route::post('/adim-1/save', 'step1Store')->name('step1.store');
    Route::get('/{business}/adim-2', 'step2Show')->name('step2.show');
    Route::post('/adim-2/save', 'step2Store')->name('step2.store');
    Route::get('/{business}/adim-3', 'step3Show')->name('step3.show');
    Route::post('/adim-3/save', 'step3Store')->name('step3.store');
    Route::get('/{business}/adim-4', 'step4Show')->name('step4.show');
    Route::post('/adim-4/save', 'step4Store')->name('step4.store');
    Route::get('/adim-4/save', 'step4StoreNoPost')->name('step4.no_post');
    Route::get('/randevu-olusturuldu', 'step5Show')->name('step5.show');
});

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
    Route::post('/verify/phone', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'verify'])->name('verifyPhone');

    Route::middleware(['auth:customer', 'active'])->group(function () {
        Route::get('/home', [\App\Http\Controllers\Customer\HomeController::class, 'index'])->name('home');
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
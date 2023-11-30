<?php

use Illuminate\Support\Facades\Route;


Route::controller(\App\Http\Controllers\HomeController::class)->group(function (){
    Route::get('/', 'index')->name('welcome');
    Route::get('/nach/standort', 'nearMe')->name('nachStandort');
    Route::get('/salons', 'allBusiness')->name('business.all');
        Route::get('/salon-kategorie/{slug}', 'businessCategory')->name('business.category');
    Route::get('/salon/{slug}/detail', 'businessDetail')->name('business.detail');

    Route::get('seite/{slug}', 'pageDetail')->name('page.detail');

    Route::get('/blogs','blogs')->name('blog.index');
    Route::get('/blog/{slug}/detail','blogDetail')->name('blog.detail');
    Route::post('/blog/yorum/kaydet', 'blogCommentStore')->name('blog.comment.store');
    Route::get('/events','activities')->name('activity.index');
    Route::get('/event/{slug}/detail','activityDetail')->name('activity.detail');
    Route::post('/activity/personel/control', 'personelControl')->name('activity.personel.control');

    Route::get('/uberuns','about')->name('about');
    Route::get('/faq','faq')->name('faq');

    Route::get('/tum-hizmetler','allService')->name('service.all');
    Route::get('/hizmet/{slug}','serviceDetail')->name('service.detail');

    Route::post('/hizmet-ara','serviceSearch')->name('searchService');
    Route::post('/alt-kategori/hizmet-ara','serviceSubSearch')->name('searchSubService');
    Route::get('/dienstleistung-suchen/{city}/{service}','serviceAllGet')->name('serviceAllGet');
    Route::get('/hizmet-turu-ara/{category}/{service}','serviceSubCategoryGet')->name('serviceSubCategoryGet');
    Route::get('/dienstleistung-stadt-suchen/{city}','serviceCityGet')->name('serviceCityGet');
    Route::get('/dienstleistung-suche/{service}','serviceGet')->name('serviceGet');

    Route::post('/salon-ara', 'businessCategorySearch')->name('businessCategorySearch');
    Route::get('/salon-suche/{city}/{category}','categoryAllGet')->name('categoryAllGet');
    Route::get('/stadt-suche/{city}','categoryCityGet')->name('categoryCityGet');
    Route::get('/salon-kategorie-suche/{category}','categoryGet')->name('categoryGet');

    Route::get('/live-search', 'liveSearch')->name('live-search');

    Route::get('/kontakt', 'contact')->name('contact');
    Route::post('/iletisim/save', 'contactStore')->name('contact.store');

});


Route::get('termin-bestätigen/{business}', [\App\Http\Controllers\AppointmentController::class, 'step1Show'])->name('step1.show');
Route::get('termin-bestätigen/adim-1/save', [\App\Http\Controllers\AppointmentController::class, 'step1Store'])->name('step1.store');
Route::post('randevu-olustur', [\App\Http\Controllers\AppointmentController::class, 'appointmentCreate'])->name('appointment.create');
Route::get('termin-bestätigt/{appointment}', [\App\Http\Controllers\AppointmentController::class, 'step5Show'])->name('appointment.success');
Route::post('appointment/time/control', [\App\Http\Controllers\AppointmentController::class, 'appointmentTimeControl'])->name('appointment.time.control');
Route::group(['prefix' => 'benutzer', 'as' => 'customer.'], function () {
    Route::get('/login', [\App\Http\Controllers\Customer\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Customer\Auth\LoginController::class, 'login']);

    Route::post('/logout', [\App\Http\Controllers\Customer\Auth\LoginController::class, 'logout'])->name('logout');

    Route::get('/register', [\App\Http\Controllers\Customer\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [\App\Http\Controllers\Customer\Auth\RegisterController::class, 'register']);

    Route::get('/passwort-vergessen', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'showForgotView'])->name('showForgotView');
    Route::post('/sifremi-unuttum', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'forgotPassword'])->name('forgotPassword');

    Route::get('/mobilnummer-verifizierung', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'phoneVerify'])->name('phone.verify');
    Route::post('/telefon-dogrulama', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'phoneVerifyAction'])->name('phone.verify.action');

    Route::get('/verify-phone', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'index'])->name('verify');
    Route::post('/code/test', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'verifyCode'])->name('verify.code');

    Route::middleware(['auth:customer', 'active'])->group(function () {
        Route::get('/startseite', [\App\Http\Controllers\Customer\HomeController::class, 'index'])->name('home');
        Route::get('/berechtigungen', [\App\Http\Controllers\Customer\HomeController::class,'permissions'])->name('permissions');
        Route::get('/benachrichtigungen', [\App\Http\Controllers\Customer\HomeController::class,'notifications'])->name('notifications');
        Route::get('/kommentare', [\App\Http\Controllers\Customer\HomeController::class, 'comments'])->name('comments');
        Route::get('/beliebteste-salons', [\App\Http\Controllers\Customer\HomeController::class, 'favorites'])->name('favorite.index');
        Route::get('/meine-salons', [\App\Http\Controllers\Customer\HomeController::class, 'addicted'])->name('addicted.index');
        Route::get('/produkt-bestellungen', [\App\Http\Controllers\Customer\HomeController::class, 'orders'])->name('order.index');
        Route::get('/meinepakete', [\App\Http\Controllers\Customer\HomeController::class, 'packets'])->name('packet.index');
        Route::get('/meinekampagnen', [\App\Http\Controllers\Customer\HomeController::class, 'campaigns'])->name('campaign.index');
        Route::get('/paket/{id}/detail', [\App\Http\Controllers\Customer\HomeController::class, 'packetDetail'])->name('packet.detail');
        Route::get('/vergangene-termine', [\App\Http\Controllers\Customer\HomeController::class, 'appointments'])->name('appointment.index');
        Route::get('/termin/{id}/detail', [\App\Http\Controllers\Customer\HomeController::class, 'appointmentDetail'])->name('appointment.detail');

        Route::post('update/permissions', [\App\Http\Controllers\Customer\HomeController::class, 'permissionUpdate'])->name('permissions.update');
        Route::post('district/get', [\App\Http\Controllers\Customer\HomeController::class, 'getDistrict'])->name('getDistrict');
        Route::post('/appointment/cancel', [\App\Http\Controllers\Customer\HomeController::class, 'cancelAppointment'])->name('appointment.cancel');
        Route::post('/add/favorite', [\App\Http\Controllers\Customer\HomeController::class, 'addFavorite'])->name('favorite.add');
        Route::post('/remove/favorite', [\App\Http\Controllers\Customer\HomeController::class, 'removeFavorite'])->name('favorite.remove');
        Route::post('/appointment/comment/store', [\App\Http\Controllers\Customer\HomeController::class, 'addComment'])->name('appointment.comment.store');
        Route::post('/campaign/detail', [\App\Http\Controllers\Customer\HomeController::class, 'campaignDetail'])->name('campaign.detail');

        Route::controller(\App\Http\Controllers\Customer\ProfileController::class)->prefix('profil')->as('profile.')->group(function () {
            Route::get('/konto-einstellungen', 'edit')->name('edit');
            Route::get('/passwort-ändern', 'editPassword')->name('password.edit');
            Route::post('/update', 'update')->name('update');
            Route::post('/change-password', 'changePassword')->name('change-password');
        });
    });
});
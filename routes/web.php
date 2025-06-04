<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomPasswordResetController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Artisan;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// Route::get('/', function () {
//     return view('welcome');
// });

 
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return "Cache cleared successfully!";
});


Route::post('/log-action', function (Request $request) {
    ActivityLog::create([
        'user_id' => Auth::id(),
        'action' => $request->action,
        'url' => $request->url,
        'ip_address' => $request->ip(),
        'user_agent' => $request->header('User-Agent'),
    ]);
    return response()->json(['success' => true]);
});

Route::get('/run-migration', function () {
    Artisan::call('migrate');
    return 'Migrations have been run successfully!';
});

//register routes
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

//login and logout routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');

//Password Reset routes
Route::get('password/reset', [CustomPasswordResetController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [CustomPasswordResetController::class, 'sendResetLink'])->name('password.email');
Route::get('password/reset/{token}', [CustomPasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [CustomPasswordResetController::class, 'reset'])->name('password.update');
//Admin routes
Route::middleware('auth')->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admindashboard');
//blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/edit/{id}', [BlogController::class,'edit'])->name('blog.edit');
Route::post('/blog/update/{id}', [BlogController::class,'update'])->name('blog.update');
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
Route::get('our_project/create', [OurProjectController::class, 'create'])->name('our_project.create');
Route::post('our_project', [OurProjectController::class, 'store'])->name('our_project.store');
Route::get('our_project/{id}/edit', [OurProjectController::class, 'edit'])->name('our_project.edit');
Route::put('our_project/{ourProject}', [OurProjectController::class, 'update'])->name('our_project.update');
Route::delete('our_project/{id}', [OurProjectController::class, 'destroy'])->name('our_project.destroy');
Route::get('our_project', [OurProjectController::class, 'index'])->name('our_project.index');

//activity logs
Route::get('/activity_logs', [ActivityLogController::class, 'index'])->name('admin.activiy_logs');


Route::get('/blog-category', [BlogCategoryController::class, 'index'])->name('blog-category');
Route::post('/blog-category/store', [BlogCategoryController::class, 'store'])->name('blog-category.store');
Route::get('/blog-category/edit/{id}', [BlogCategoryController::class,'edit'])->name('blog-category.edit');
Route::post('/blog-category/update/{id}', [BlogCategoryController::class,'update'])->name('blog-category.update');
Route::delete('/blog-category/destroy/{id}', [BlogCategoryController::class,'destroy'])->name('blog-category.destroy');


Route::get('/setting', [SettingController::class,'index'])->name('setting.index');
Route::post('/setting/update', [SettingController::class,'update'])->name('setting.update');



Route::get('/case-study', [SettingController::class,'case_study'])->name('case-study');
Route::get('/setting', [SettingController::class, 'metaPage'])->name('metaPage');
Route::post('/settings/update', [SettingController::class, 'updateSetting'])->name('settings.update');
Route::post('/settings/new-meta', [SettingController::class, 'new_meta_add'])->name('settings.new_meta');
Route::get('settings/edit-meta/{id}', [SettingController::class, 'editSettingForm'])->name('settings.edit_meta');
});
Route::get('/',[ViewController::class,'index'])->name('home');
Route::post('/appointments',[HomeController::class,'appointments'])->name('appointments');
Route::post('/messages',[HomeController::class,'messages'])->name('message');


Route::get('/about',[ViewController::class,'about'])->name('about');
Route::get('/contact',[ViewController::class,'contact'])->name('contact');
Route::post('/contacts',[ContactController::class,'contacts'])->name('contacts');


Route::get('/faq',[ViewController::class,'faq'])->name('faq');
Route::get('/home-networking',[ViewController::class,'homenetworking'])->name('homenetworking');
Route::get('/digital-marketing',[ViewController::class,'digitalmarketing'])->name('digitalmarketing');
Route::get('/email-services',[ViewController::class,'emailservices'])->name('emailservices');
Route::get('/anit-virus-and-security-software',[ViewController::class,'anitvirussecuritysoftware'])->name('anitvirussecuritysoftware');
Route::get('/app-development',[ViewController::class,'appdevelopment'])->name('appdevelopment');
Route::get('/apple-mac-ios',[ViewController::class,'applemacios'])->name('applemacios');
Route::get('/business-services',[ViewController::class,'businessservices'])->name('businessservices');
Route::get('/computer-tune-ups',[ViewController::class,'computertuneups'])->name('computertuneups');
Route::get('/data-backup-services',[ViewController::class,'databackupsservices'])->name('databackupsservices');
Route::get('/internent-conectivity',[ViewController::class,'internentconectivity'])->name('internentconectivity');
Route::get('/microsoft-windows',[ViewController::class,'microsoftwindows'])->name('microsoftwindows');
Route::get('/printer-multi-function',[ViewController::class,'printermultifunction'])->name('printermultifunction');
Route::get('/privacy-policy',[ViewController::class,'privacypolicy'])->name('privacypolicy');
Route::get('/refund-policy',[ViewController::class,'refundpolicy'])->name('refundpolicy');
Route::get('/terms',[ViewController::class,'terms'])->name('terms');
Route::get('/thanku',[ViewController::class,'thanku'])->name('thanku');
Route::get('/program-errors-crashes',[ViewController::class,'programerrorscrashes'])->name('programerrorscrashes');
Route::get('/smart-phones-tablet',[ViewController::class,'smartphonestablet'])->name('smartphonestablet');
Route::get('/software-application',[ViewController::class,'softwareapplication'])->name('softwareapplication');
Route::get('/training-guidence',[ViewController::class,'trainingguidence'])->name('trainingguidence');
Route::get('/ui-ux-design',[ViewController::class,'uiuxdesign'])->name('uiuxdesign');
Route::get('/virus-malware-removal',[ViewController::class,'virusmalwareremoval'])->name('virusmalwareremoval');
Route::get('/web-agency',[ViewController::class,'webagency'])->name('webagency');
Route::get('/web-development',[ViewController::class,'webdevelopment'])->name('webdevelopment');
Route::get('/wifi-connectivity',[ViewController::class,'wificonnectivity'])->name('wificonnectivity');
Route::get('/checkout',[ViewController::class,'checkout'])->name('checkout');
Route::get('/blogs',[ViewController::class,'blogs'])->name('blogs');
Route::get('/blogs/{slug}', [ViewController::class, 'blogDetails'])->name('blog_details');

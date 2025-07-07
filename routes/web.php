<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReturnExchangeController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UpdateProfileController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AdminMailController;

Route::get('/', function () {
    return view('login');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/men', function () {
    return view('men');
});

Route::get('/insta', function () {
    return view('insta');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

// Route::get('/gallery', function () {
//     return view('gallery');
// });
Route::get('/gallery', [ProductController::class, 'show']);




Route::get('/about', function () {
    return view('about');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/return', function () {
    return view('return');
});
Route::get('/order', function () {
    return view('order');
});

Route::get('/woman', function () {
    return view('woman');
});
Route::get('/img_uplod', function () {
    return view('img_uplod');
});

#----------------------------------------------------
Route::get('/authentication-login', function () {
    return view('admin.authentication-login');
});
Route::get('/authentication-register', function () {
    return view('admin.authentication-register');
});
Route::get('/view_return', function () {
    return view('admin.view_return');
});
Route::get('/product_add', function () {
    return view('admin.product_add');
});
Route::get('/view_contactus', function () {
    return view('admin.view_contactus');
});
Route::get('/view_user', function () {
    return view('admin.view_user');
});
// Route::get('/shopping', function (){
//     return view('shopping');
// });
Route::get('/view_product', function (){
    return view('admin.view_product');
});

Route::get('/mail', function (){
    return view('admin.mail');
});

Route::get('/view_shopping', function (){
    return view('view_shopping');
});
Route::get('/edit_profile', function (){
    return view('admin.edit_profile');
});





// -----------------------------------------------------------admin panel------------------------------

Route::get('/admin/deshbord',[AdminUserController::class, 'dashboard'])->name('admin.deshbord');
Route::get('admin/authentication-register', [AdminUserController::class, 'create'])->name('authentication-register');
Route::post('admin/authentication-register', [AdminUserController::class, 'store'])->name('authentication-register');
 Route::get('admin/authentication-login', [AdminUserController::class, 'showadLoginForm']);
 Route::post('/adminlogin', [AdminUserController::class, 'adlogin']);
 Route::get('/logout1', [AdminUserController::class, 'logout'])->name('logout');
 Route::get('/admin/view_profile', [AdminUserController::class, 'viewProfile'])->name('admin.view_profile');
 Route::get('/admin/send_bill/{order_id}', [AdminMailController::class, 'sendbill'])->name('admin.send_bill');
 Route::get('/admin/edit_profile', [AdminUserController::class, 'editProfile'])->name('admin.edit_profile');
Route::put('/admin/profile/update', [AdminUserController::class, 'updateProfile'])->name('admin.update_profile');





#---------------------------------------------------Mail contoller----------------------------------------------------

Route::get('/admin/emailForm', function () {
    return view('admin.emailForm');
})->name('admin.emailForm');


#--------------------------------------productscontrller--------------------------------
Route::get('/admin/edit_product/{id}', [ProductController::class, 'edit'])->name('admin.edit_product');
Route::post('/admin/product/update/{id}', [ProductController::class, 'update'])->name('admin.update_product');
Route::get('/admin/view-products', [ProductController::class, 'view'])->name('admin.view_product');
Route::post('/admin/emailForm', [MailController::class, 'sendMail'])->name('admin.emailForm');
Route::get('/admin/export-csv', [ProductController::class, 'exportCSV'])->name('admin.export_csv');
Route::prefix('admin')->group(function () {
   // Route::get('/view_product', [ProductController::class, 'view']);
    Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('admin.product_delete');
   
});
Route::prefix('admin')->group(function () {
    Route::get('/product_add', [ProductController::class, 'create'])->name('admin.product_add');

    Route::post('/product_add', [ProductController::class, 'store'])->name('admin.product_add');
});
#-------------------------------------------Billcontroller------------------------------------------------------------------


Route::get('/admin/invoice/{order_id}', [BillController::class, 'generateBill'])->name('admin.invoice');

#-----------------------------------------------Auth Conroller---------------------------------------------------------------
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/homepage', [AuthController::class, 'homepage'])->name('homepage');
Route::get('/about', [AuthController::class, 'about'])->name('about');
Route::get('/contact', [AuthController::class, 'contact'])->name('contact');
Route::get('/insta', [AuthController::class, 'insta'])->name('insta');
Route::get('/men', [AuthController::class, 'men'])->name('men');
Route::get('/return', [AuthController::class, 'return'])->name('return');
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup.form');
Route::post('signup', [AuthController::class, 'signup'])->name('signup.submit');
Route::get('/admin/view_user', [AuthController::class, 'view_user'])->name('admin.view_user');

#----------------------------------------------Contact Conroller------------------------------------------------------------

Route::get('admin/view_contactus', [ContactController::class, 'view_contact'])->name('view_contactus');
Route::get('admin/view_contactus', [ContactController::class, 'view_contact'])->name('view_contactus');
Route::get('/contactus', [ContactController::class, 'showForm'])->name('contactus.form');
Route::post('/contactus', [ContactController::class, 'submitForm'])->name('contactus.submit');

// -----------------------------------------------------REturnContoller----------------------------------------------


Route::get('/return', [ReturnExchangeController::class, 'showForm'])->name('return.form');
Route::post('/return', [ReturnExchangeController::class, 'submitForm'])->name('return.submit');
Route::get('admin/view_return', [ReturnExchangeController::class, 'view_return'])->name('view_return');

#---------------------------------------------Shopping Contoller--------------------------------------------------

Route::get('/shopping/{id}', [ShoppingController::class, 'create'])->name('shopping.create');
Route::post('/shopping', [ShoppingController::class, 'store'])->name('shopping.store');
Route::get('/admin/view_product', [ShoppingController::class, 'view_product'])->name('admin.view_product');
Route::get('/admin/view_shopping', [ShoppingController::class, 'view_shopping'])->name('admin.view_shopping');

#-------------------------------------------Update controller--------------------------------------------

Route::get('/edit/{id}', [UpdateprofileController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [UpdateprofileController::class, 'update'])->name('update');

#------------------------------------------BILL CONROLLER-----------------------------





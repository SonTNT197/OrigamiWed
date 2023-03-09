<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\DashboardController;


use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('login', [LoginController::class, 'login']);

Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::get('logout', [LoginController::class, 'logout']); // @Todo Remove logout GET method

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');

Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('admin.password.update');

Route::middleware('admin.auth')->group(function(){
    Route::get('dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

    Route::get('category/list',[CategoryController::class,'getCategory'])->name('list-category');
    Route::get('category/delete/{id_category}',[CategoryController::class,'deleteCat']);
    Route::get('category/edit/{id_category}',[CategoryController::class,'editCat']);
    Route::post('category/edit/{id_category}',[CategoryController::class,'postEditCat']);
    Route::get('category/add',[CategoryController::class,'getFormAdd']);
    Route::post('category/add',[CategoryController::class,'addNewCat']);

    Route::get('product/list',[ProductController::class,'getProduct'])->name('list-product');
    Route::get('product/delete/{proID}',[ProductController::class,'deletePro']);
    Route::get('product/edit/{proID}',[ProductController::class,'editPro']);
    Route::post('product/edit/{proID}',[ProductController::class,'postEditPro']);
    Route::get('product/add',[ProductController::class,'getFormAdd']);
    Route::post('product/add',[ProductController::class,'addNewPro']);
    Route::get('product/add/step',function(){return view('admin.product.step');});

    Route::get('user/list',[MemberController::class,'getUsers'])->name('list-user');
    Route::get('user/delete/{id}',[MemberController::class,'deleteUser']);
    Route::get('ad/list',[MemberController::class,'getAdmins'])->name('list-admin');
    Route::get('ad/delete/{id}',[MemberController::class,'deleteAdmin']);
    Route::get('ad/add',function(){return view('admin.members.addAdmin');});
    Route::post('ad/add',[MemberController::class,'addNewAdmin']);



});

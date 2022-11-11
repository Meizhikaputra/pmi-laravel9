<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AmbilDarahController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardAmbilDarahController;
use App\Http\Controllers\DashboardChangePasswordController;
use App\Http\Controllers\DashboardDonorController;
use App\Http\Controllers\DashboardGetDonorController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DataPendonorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Models\User;
use App\Models\Category;
use PhpParser\Node\Stmt\Foreach_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Meizhika Putra',
        'active' => 'about',
        'email' => 'meizhikaputra@gmail.ac.id',
        'image' => 'mei.jpg'
    ]);
});


Route::get('/berita', [PostController::class, 'index']);
Route::get('/categories/{slug}', [PostController::class, 'categories']);
// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post by Author : $author->name",
        'posts' => $author->posts->load('author'),
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'autentikasi']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/login/kirimemail', [LoginController::class, 'kirimEmail']);
Route::get('/login/forgotpassword', [LoginController::class, 'forgotpassword']);

Route::get('/login/resetpassword/{password:token}/{email}', [LoginController::class, 'resetpassword']);
Route::put('/login/newpassword', [LoginController::class, 'newpassword']);
Route::get('/login/newpassword', function () {
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::resource('/dashboard/donors', DashboardDonorController::class)->middleware('auth');

Route::resource('/dashboard/users', DashboardUserController::class)->except('edit', 'update')->middleware('admin');
Route::get('/dashboard/donors/{donor:id}/ambil', [DashboardDonorController::class, 'ambil'])->middleware('auth');
Route::get('/dashboard/pilihdonor', [DashboardDonorController::class, 'pilihdonor'])->middleware('auth');
Route::get('/dashboard/darahkeluar', [DashboardDonorController::class, 'darahkeluar'])->middleware('auth');
Route::get('/dashboard/detailkeluar/{donor:id}', [DashboardDonorController::class, 'detailkeluar'])->middleware('auth');
Route::put('/dashboard/donors/{donor:id}/createambil', [DashboardDonorController::class, 'createambil'])->middleware('auth');

Route::get('/dashboard/donors/{donor:id}/cektekanan', [DashboardDonorController::class, 'cektekanan'])->middleware('auth');
Route::put('/dashboard/donors/{donor:id}/buattes', [DashboardDonorController::class, 'buattes'])->middleware('auth');

Route::get('/dashboard/changepassword', [DashboardChangePasswordController::class, 'changepassword'])->middleware('auth');
Route::post('/dashboard/ubahpassword', [DashboardChangePasswordController::class, 'ubahpassword'])->middleware('auth');

Route::get('/dashboard/pendaftaran/online', [DashboardDonorController::class, 'online'])->middleware('auth');
Route::get('/dashboard/pendaftaran/offline', [DashboardDonorController::class, 'offline'])->middleware('auth');

Route::get('/dashboard/bulanan', [LaporanController::class, 'bulanan'])->middleware('admin');


// Daftar Donor
Route::get('/daftar', [DaftarController::class, 'index']);
Route::post('/daftaronline', [DaftarController::class, 'daftaronline']);

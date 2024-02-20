<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndikatorController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\AlternatifController;

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

// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home",
//         "active" => "home"
//     ]);
// });
// Route::get('/about', [AboutController::class, 'index']);
// Route::get('/blog', [PostController::class, 'index']);
//halaman single post
// Route::get('posts/{post:slug}', [PostController::class, 'show']);
// Route::get('/categories', [CategoriesController::class, 'index']);

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('dashboard/multimoora', [PenilaianController::class, 'moora'])->middleware('auth');


Route::resource('/dashboard/tes', TesController::class)->middleware('auth');
Route::resource('/dashboard/user', UserController::class)->middleware('auth');
Route::resource('/dashboard/indikator', IndikatorController::class)->middleware('auth');
Route::resource('/dashboard/alternatif', AlternatifController::class)->middleware('auth');
Route::resource('/dashboard/penilaian', PenilaianController::class)->middleware('auth');

// Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
// Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');


//Instalasi agak ribet
//Migrasi, untuk kedatabasenya 
//Eloquent (merupakan orm, membuat kita mudah berinteraksi dengan database dengan mudah)
//tinker ->php artisan tinker
//route modul binding
//Eloquent Relationship
//database seeder
//middleware 
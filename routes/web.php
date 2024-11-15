<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Middleware\VerifyCsrfToken::class;





Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/rs/list', function () {
//     return view('pages.cekstock.hermina');
// })->name('hermina');



Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/article', function () {
    return view('pages.Permohonan.article');
})->name('article');






Route::middleware('guest')->group(function () {
    Route::post("/register/submit", [Controllers\UserController::class, "createUser"])->name('register.submit');
    Route::get("/register", [Controllers\UserController::class, "tampilRegistrasi"])->name('register.tampil');

    Route::post("/regAdmin/submit", [Controllers\AdminController::class, "regAdmin"])->name('regAdmin.submit');
    Route::get("/regAdmin", [Controllers\AdminController::class, "regMin"])->name('regAdmin.tampil');

    Route::post('/logAdmin/submit', [Controllers\AdminController::class, "logAdmin"])->name('logAdmin.submit');
    Route::get('/logAdmin', [Controllers\AdminController::class, 'TampilAdmin'])->name('logAdmin.tampil');

    Route::post("/login/submit", [Controllers\UserController::class, "loginUser"])->name('login.submit');
    Route::get("/login", [Controllers\UserController::class, "tampilLogin"])->name('login.tampil');

    // Route::get('/login',[AuthController::class,'tester'])->name('login.act');
});

Route::group(['middleware' => ['role:admin']], function (){
    Route::get("/admin", [Controllers\AdminController::class, "adminTampil"])->name('admin.tampil');
    Route::get("/admin/rs", [Controllers\AdminController::class, "tampilRs"])->name('rums.tampil');
    Route::resource('user', Controllers\UserController::class);
});


Route::middleware("auth")->group(function () {
    Route::resource('rs', Controllers\RsController::class);

    Route::post('/logout', [Controllers\UserController::class, 'logout'])->name('logout');
    Route::get("/donor-darah", [Controllers\SubbloodController::class, "index"])->name('donor.tampil');
    Route::get("/permohonan-donor", [Controllers\ReqbloodController::class, "index"])->name('reqblood.tampil');
    Route::post("/permohonan-donor/tambah", [Controllers\ReqbloodController::class, "create"])->name('reqblood.create');
    Route::post("/tambah-rs", [Controllers\RsController::class, "create"])->name('rs.tambah');
    Route::post("/ngaju-donor", [Controllers\SubbloodController::class, "create"]);
    Route::post("/mohon-donor", [Controllers\ReqbloodController::class, "create"]);
    Route::get("/admin/user", [Controllers\AdminController::class, "tampilUser"])->name('user.tampil');

    Route::get("/Rs/{id}", [Controllers\RsController::class, "information"])->name('rs.list');
    Route::get("/rs", [Controllers\RsController::class, "index"])->name('rs.tampil');
    
    // Route::prefix('rs')->middleware('web')->group(function() {
    //     Route::get("/rs/1", [Controllers\RsController::class, "information"])->name('rs.list');
    //     Route::get("/rs", [Controllers\RsController::class, "index"])->name('rs.tampil'); 
    // });    
    
    Route::put("/update-rs/{id}", [Controllers\RsController::class, "update"]);
    Route::post("/admin/edit/{id}", [Controllers\UserController::class, "edit"])->name('edit.tampil');
    Route::post("/donor-darah/tambah", [Controllers\SubbloodController::class, "create"])->name('subblood.create');
    Route::get('/search', [Controllers\RsController::class, 'search'])->name('search.rs');

});



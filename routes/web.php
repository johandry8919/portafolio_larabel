<?php

use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\Decricion;
use App\Http\Controllers\CustomAuthController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Sidebar_edit;

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

Route::get('/', function () {
    $date = Sidebar_edit::all();
    foreach( $date as $descricion){
        $date=[
        "id" => 8,
        "imagen" => $descricion->imagen,
        "edit_nombre" => $descricion->edit_nombre,
        "edit_decricion" => $descricion->edit_decricion,
        "facebook" => $descricion->facebook,
        "github" => $descricion->github,
        "LinkedIn" => $descricion->LinkedIn,
        "created_at" => $descricion->created_at,
        "updated_at" => $descricion->iupdated_at,
            
        ];
    }

    
    return view('welcome' ,['descricion' => $date]);


})->name('inicio');

Route::get('/Admin', function () {
    return view('Admin.Admin');
});

Route::post('/Admin/post', [Decricion::class ,'index'])->name('post_decricion');

Route::get('/about', function () {
    if(Auth::check()){
        return view('components.about');
    }
    return redirect("login")->withSuccess('You are not allowed to access');
})->name('about');



Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



Route::get('/pelishd', function () {
    return view('/pelishd');
})->name('pelishd');
<?php
use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\Decricion;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ConAppmicontrollert;
use App\Http\Controllers\CustomAuthController;
use App\Models\User;
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

Route::get('/', [ConAppmicontrollert::class , 'index'])->name('inicio');


Route::get('/about', [ConAppmicontrollert::class , 'about']
)->name('about');

Route::post('/Admin/post', [Decricion::class ,'index'])->name('post_decricion');

Route::get('/Admin', function () {
    return view('Admin.Admin');
});

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



Route::get('/pelishd', function () {
    return view('/pelishd');
})->name('pelishd');




Route::get('/loguin-google', function () {
    return Socialite::driver('google')->redirect();
})->name('register_google');

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
    $existe = User::where('external_id' , $user->id)->where('external_auth' , 'google')->first();

     if($existe){
         Auth::login($existe);
     }else{
        $usernew=  User::create([
                'name'=> $user->name,
                'external_auth' => 'google',
                'avatar' => $user->avatar,
                'external_id' => $user->id,
                'email' => $user->email,
                'password' => Hash::make($user->id)

       ]);
       Auth::login($usernew);
     }



    return redirect('/about');

});


// Route::get('/auth/callback', function () {
//    $githubUser = Socialite::driver('google')->user();
//     $user = User::updateOrCreate([
//         'github_id' => $githubUser->id,
//     ], [
//         'name' => $githubUser->name,
//          'email' => $githubUser->email,
//         'github_token' => $githubUser->token,
//         'github_refresh_token' => $githubUser->refreshToken,
//      ]);

//     Auth::login($user);

//    return redirect('/dashboard');
//  });
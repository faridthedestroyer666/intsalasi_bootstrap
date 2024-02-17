<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
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



Route::resource('/user', UserController::class)->only([
    'index','show','create','store','edit','update','destroy'
]);

Route::get('/home', function(){
    return view('home');
});

Route::get('/home',[UserController::class,'index']);
// Route::get('foo', function () {
//     return 'Hello world';
// });

// Route::get('user/{id}', function ($id){ 
//     return 'User'.$id; 
// });

// Route::get('posts/{post}/comment/{comment}', function ($postId, $commentId){
//     dd($postId, $commentId);
// });
// // E41221638_Farid kurniawan

// Route::get('/user',[UserController::class, 'index']);
// // E41221638_Farid kurniawan

// // Route::get($uri, $callback); 
// // Route::post($uri, $callback);
// // Route::put($uri, $callback);
// // // E41221638_Farid
// // Route::patch($uri, $callback); 
// // Route::delete($uri, $callback); 
// // Route::options($uri, $callback);

// Route::match(['get','post'], '/test', function() {
//     return ' ini adalah test web 1';
// });
// Route::any('/', function(){
//     return 'ini adalah test web 2';
// });

// Route::view('/', 'profile');

// Route::post('/profile', function () {
//     return view('welcome');
// });

// Route::redirect('/here','there');

// // Route::redirect('/here','there,'301);

// Route::permanentRedirect('/here','/there');

// Route::view('/welcome','welcome');
// Route::view('/welcome2', 'test',['name'=>'farid kurniawan']);

// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });

// Route::get('user/{name}',function ($name ='farid') {
//     return $name;
// });


// Route::get('user/{name}', function ($name) {
//     $name = filter_var($name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
//     if (!preg_match('/^[a-zA-Z0-9_ -]+$/', $name)) {
//         return abort(404, 'Invalid user name');
//     }
//     return "hallo $name, selamat datang di web saya!";
// })->where('name', '[a-zA-Z0-9_ -]+');

// Route::get('user/{id}', function ($id) {
//     $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
//     if (!is_numeric($id)) {
//         return abort(404, 'Invalid user ID');
//     }
//     return "hallo pengguna dengan ID $id, selamat datang di web saya!";
// })->where('id', '[0-9]+');
// Route::get('user/{id}/{name}', function ($id, $name) {
//     $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
//     if (!is_numeric($id)) {
//         return abort(404, 'Invalid user ID');
//     }
//     $name = filter_var($name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
//     if (!preg_match('/^[a-zA-Z0-9_ -]+$/', $name)) {
//         return abort(404, 'Invalid user name');
//     }
//     return "hallo $id dengan nama $name, selamat datang di web saya!";
// })->where(['id' => '[0-9]+', 'name' => '[a-zA-Z0-9_ -]+']);

// Route::get('user/{id}', function ($id){
//     return 'selamat datang pengguna dengan id:' .$id;
// });

// Route::get('search/{search}', function ($search){
//     return 'data yang anda cari adalah :'. $search;
// });

//     Route::get('/user/profile', [UserController::class, 'show'])->name('profile');
//     Route::get('user/{id}/profile', function ($id) {
//         return view('profile', ['user' => $user]);
//     })->name('profile.with.id');
// $url = route('profile');  
// $url = route('profile.with.id', ['id' => 1]);  
// return redirect()->route('profile');

// // public function handleProfileMiddleware($currentRequest, Closure $next)
// {
//     if ($currentRequest->route()->named('profile')) {
//         return $next($request);
//     }
//     return $next($request);
// }

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//     });

//     Route::get('/user/profile', function () {
//     });
// });

// // Route::namespace('admin')->group(function(){
// // }):

// Route::domain('{account}.myapp.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         return "Hello, user $id from account $account!";
//     });
// });

// Route::prefix('admin')->group(function () {
//     Route::get('users', function () {
//         $users = User::all();
//         return view('admin.users', compact('users'));
//         return redirect()->route('admin.users.index');
//     })->name('admin.users');
// });

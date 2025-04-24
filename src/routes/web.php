<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Providers\Privy\PrivyProvider;
use App\Http\Controllers\Privy\PrivyAuthController;

Route::get('/', function () {
    return view('coinllery.home');
});

Route::get('/coinllery/{id}', function () {
    
    return view('coinllery.welcome');

});

/*
Route::get('/test', function () {
    
    $provider = PrivyProvider::class;
    PrivyProvider::test();
    
    dd($provider);

});

Route::get('/login/privy', fn () => Socialite::driver('privy')->redirect());

Route::get('/login/privy/callback', function () {
    $user = Socialite::driver('privy')->user();
    dd($user);
});

Route::get('/auth/privy/redirect', [PrivyAuthController::class, 'redirect']);
Route::get('/auth/privy/callback', [PrivyAuthController::class, 'callback']);
*/

//http://localhost:8888/auth/privy/redirect
//http://localhost:8888/auth/privy/callback
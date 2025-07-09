<?php

use Illuminate\Support\Facades\Route;

/*
use Laravel\Socialite\Facades\Socialite;
use App\Providers\Privy\PrivyProvider;
use App\Http\Controllers\Privy\PrivyAuthController;
use App\Http\Controllers\Privy\AuthController;
*/

use App\Http\Controllers\Coinllery\Home;
use App\Http\Controllers\Coinllery\Coin;
use App\Http\Controllers\Coinllery\User\Collection;

Route::get('/auth/login', function () {
    return view('react-app');
});

Route::get('/', [Home::class, 'index']);
Route::get('/coinllery/{collectionID}', [Collection::class, 'index']);
Route::get('/coin/data/{coinAddress}', [Coin::class, 'coin_sdk_metadata']);

/*
Route::get('/test', function () {
    
    $provider = PrivyProvider::class;
    PrivyProvider::test();
    
    dd($provider);

});

Route::get('/login', function() {
    return view('coinllery.auth.login2');
})->name('login');

Route::post('/privy/authenticate', [AuthController::class, 'authenticate'])
     ->middleware('guest')
     ->name('privy.authenticate');

Route::get('/login/privy', fn () => Socialite::driver('privy')->redirect());

Route::get('/login/privy/callback', function () {
    $user = Socialite::driver('privy')->user();
    dd($user);
});

Route::get('/auth/privy/redirect', [PrivyAuthController::class, 'redirect']);
Route::get('/auth/privy/callback', [PrivyAuthController::class, 'callback']);

//http://localhost:8888/auth/privy/redirect
//http://localhost:8888/auth/privy/callback
*/
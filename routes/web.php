<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/test', function () {
    return Socialite::driver('azure')->redirect();
});

$router->get('/redirect', function () {
    $user = Socialite::driver('azure')->user();
    print_r("waos");
    print_r($user);
    print_r("waos \n");
    print_r(($user->accessTokenResponseBody)["access_token"]);
    
});


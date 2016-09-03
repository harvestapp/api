<?php

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

$app->get('/', function () {
  return view('splash');
});

$app->get('version', function () use ($app) {
  return $app->version();
});

$app->get('info', function () {
  return phpinfo();
});

$app->get('users', function () {
  $users = DB::table('users')->get();
  return $users;
});

$app->get('user', 'UserController@test');

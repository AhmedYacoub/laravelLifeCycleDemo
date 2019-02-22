<?php

require "vendor/autoload.php";
require "Route.php";

/* calling show method */
$data = Route::get('/user/show/{1}', 'UserController@show');
echo 'Hello, ' . $data . PHP_EOL;

/* calling index method */
// $data = Route::get('/user/index', 'UserController@index');
// print_r($data);
<?php

use Illuminate\Support\Facades\Artisan;

$router->post('/login', 'AuthController@login');
$router->post('/register_account', 'AuthController@registerAccount');
$router->post('/register_company', 'AuthController@registerCompany');
$router->post('/company_check', 'AuthController@checkCompany');
$router->post('/change-password', 'AuthController@changePassword');
// $router->post('/password/reset-request', 'Auth\RequestPasswordController@sendResetLinkEmail');
// $router->get('/password/reset/{token}', [ 'as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm' ]);
// $router->post('/password/reset', 'Auth\ResetPasswordController@reset');

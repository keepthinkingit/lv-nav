<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('auth/users', UserController::class);
    $router->resource('auth/cates', CategoryController::class);
    $router->resource('auth/types', TypeController::class);
    $router->resource('auth/sites', SiteController::class);

});

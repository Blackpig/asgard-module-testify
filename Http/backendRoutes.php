<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/testify'], function (Router $router) {
    $router->bind('testimonials', function ($id) {
        return app('Modules\Testify\Repositories\TestimonialsRepository')->find($id);
    });
    get('testimonials', ['as' => 'admin.testify.testimonials.index', 'uses' => 'TestimonialsController@index']);
    get('testimonials/create', ['as' => 'admin.testify.testimonials.create', 'uses' => 'TestimonialsController@create']);
    post('testimonials', ['as' => 'admin.testify.testimonials.store', 'uses' => 'TestimonialsController@store']);
    get('testimonials/{testimonials}/edit', ['as' => 'admin.testify.testimonials.edit', 'uses' => 'TestimonialsController@edit']);
    put('testimonials/{testimonials}/edit', ['as' => 'admin.testify.testimonials.update', 'uses' => 'TestimonialsController@update']);
    delete('testimonials/{testimonials}', ['as' => 'admin.testify.testimonials.destroy', 'uses' => 'TestimonialsController@destroy']);
    $router->bind('masks', function ($id) {
        return app('Modules\Testify\Repositories\MasksRepository')->find($id);
    });
    get('masks', ['as' => 'admin.testify.masks.index', 'uses' => 'MasksController@index']);
    get('masks/create', ['as' => 'admin.testify.masks.create', 'uses' => 'MasksController@create']);
    post('masks', ['as' => 'admin.testify.masks.store', 'uses' => 'MasksController@store']);
    get('masks/{masks}/edit', ['as' => 'admin.testify.masks.edit', 'uses' => 'MasksController@edit']);
    put('masks/{masks}/edit', ['as' => 'admin.testify.masks.update', 'uses' => 'MasksController@update']);
    delete('masks/{masks}', ['as' => 'admin.testify.masks.destroy', 'uses' => 'MasksController@destroy']);
// append


});

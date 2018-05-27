<?php

$api = app('Dingo\Api\Routing\Router');

$api->group([
    'version' => 'v1',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'V1',
], function($api)
{
    $api->get('example/{id}', 'ExampleController@get');
    $api->post('example', 'ExampleController@create');

    //post route to test responses
    $api->post('returntest', function () {
        return null;
    });
});
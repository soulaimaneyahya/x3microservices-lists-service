<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/lists', [
    'as' => 'lists.index',
    'uses' => 'GetListsController',
]);

$router->get('/', function () use ($router) {
    return 'lists-service';
});

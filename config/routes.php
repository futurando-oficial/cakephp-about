<?php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
        'about', ['path' => '/about'], function (RouteBuilder $routes) {
    //$routes->fallbacks(DashedRoute::class);
    $routes->connect('/', ['controller' => 'Api', 'action' => 'index']);
}
);

Router::prefix('painel', ['path' => '/painel'], function ($routes) {
    $routes->plugin('About', function ($routes) {
        $routes->connect('/', ['controller' => 'About', 'action' => 'index']);
        $routes->connect('/add', ['controller' => 'About', 'action' => 'add']);
        $routes->connect('/edit/*', ['controller' => 'About', 'action' => 'edit']);
        $routes->connect('/view/*', ['controller' => 'About', 'action' => 'view']);
        $routes->fallbacks('DashedRoute');
    });
});

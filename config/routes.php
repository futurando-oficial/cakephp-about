<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'about',
    ['path' => '/about'],
    function (RouteBuilder $routes) {
        $routes->fallbacks(DashedRoute::class);
    }
);

Router::prefix('painel', ['path' => '/painel'], function ($routes) {
    $routes->plugin('About', function ($routes) {
        $routes->connect('/', ['controller' => 'About', 'action' => 'index']);
        $routes->fallbacks('DashedRoute');
    });
});
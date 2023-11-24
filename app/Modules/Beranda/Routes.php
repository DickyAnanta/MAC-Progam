<?php
$routes->group('beranda', ['namespace' => 'App\Modules\beranda\Controllers'], function ($routes) {
    $routes->get('/', 'Beranda::main');
});

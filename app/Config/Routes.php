<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Beranda');
$routes->setDefaultMethod('main');
$routes->setTranslateURIDashes(false);

$routes->setAutoRoute(false);

// start load routes modules
$router = service('router');
$module = $router->controllerName();
$routes->get('/', '\App\Modules\\' . $module . '\Controllers\\' . $module . '::main');

$dir =  scandir('../app/Modules/');
foreach ($dir as $module) {
    if ($module == '.' || $module == '..') {
        continue;
    }

    $file = scandir('../app/Modules/' . $module);
    if (in_array('Routes.php', $file)) {
        include '../app/Modules/' . $module . '/Routes.php';
    }
}
// end load routes modules

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

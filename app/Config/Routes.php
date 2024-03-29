<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('User\UserController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'User\UserController::index');
$routes->get('/user', 'User\UserController::index');
$routes->post('/user', 'User\UserController::store');
$routes->get('/user/create', 'User\UserController::create');
$routes->get('/user/(:num)', 'User\UserController::show/$1');
$routes->get('/user/edit/(:num)', 'User\UserController::edit/$1');
$routes->put('/user/(:num)', 'User\UserController::update/$1');
$routes->delete('/user/(:num)', 'User\UserController::destroy/$1');
$routes->get('/userJson/(:num)', 'User\UserController::userJson/$1');

$routes->get('/jabatan', 'Jabatan\JabatanController::index');
$routes->get('/jabatan/create', 'Jabatan\JabatanController::create');
$routes->post('/jabatan', 'Jabatan\JabatanController::store');
$routes->get('/jabatan/(:num)', 'Jabatan\JabatanController::show/$1');
$routes->get('/jabatan/edit/(:num)', 'Jabatan\JabatanController::edit/$1');
$routes->put('/jabatan/(:num)', 'Jabatan\JabatanController::update/$1');
$routes->delete('/jabatan/(:num)', 'Jabatan\JabatanController::destroy/$1');

$routes->get('/karyawan', 'Karyawan\KaryawanController::index');
$routes->get('/karyawan/create', 'Karyawan\KaryawanController::create');
$routes->post('/karyawan', 'Karyawan\KaryawanController::store');
$routes->get('/karyawan/(:num)', 'Karyawan\KaryawanController::show/$1');
$routes->get('/karyawan/edit/(:num)', 'Karyawan\KaryawanController::edit/$1');
$routes->put('/karyawan/(:num)', 'Karyawan\KaryawanController::update/$1');
$routes->delete('/karyawan/(:num)', 'Karyawan\KaryawanController::destroy/$1');

$routes->get('/laporan', 'Laporan\LaporanController::index');

$routes->get('/api/checkServer', 'API\CheckServerController::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

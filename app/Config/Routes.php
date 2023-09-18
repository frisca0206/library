<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
// => default controller
$routes->get('/dashboard', 'DashboardController::index',['as' => 'dashboard']);

$routes->get('/heavy_meal', 'Heavy_MealController::index',['as' => 'heavy_meal']);
$routes->get('/heavy_meal/edit/(:num)', 'Heavy_MealController::edit/$1',['as' => 'heavy_meal-edit']);
$routes->get('/heavy_meal/delete/(:num)', 'Heavy_MealController::delete/$1',['as' => 'heavy_meal-delete']);
$routes->get('/heavy_meal/create', 'Heavy_MealController::create',['as' => 'heavy_meal-create']);
$routes->post('/heavy_meal/store', 'Heavy_MealController::store',['as' => 'heavy_meal-store']);
$routes->post('/heavy_meal/update', 'Heavy_MealController::update',['as' => 'heavy_meal-update']);


$routes->get('/dessert', 'DessertController::index',['as' => 'dessert']);
$routes->get('/dessert/edit/(:num)', 'DessertController::edit/$1',['as' => 'dessert-edit']);
$routes->get('/dessert/delete/(:num)', 'DessertController::delete/$1',['as' => 'dessert-delete']);
$routes->get('/dessert/create', 'DessertController::create',['as' => 'dessert-create']);
$routes->post('/dessert/store', 'DessertController::store',['as' => 'dessert-store']);
$routes->post('/dessert/update', 'DessertController::update',['as' => 'dessert-update']);


$routes->get('/drink', 'DrinkController::index',['as' => 'drink']);
$routes->get('/drink/edit/(:num)', 'DrinkController::edit/$1',['as' => 'drink-edit']);
$routes->get('/drink/delete/(:num)', 'DrinkController::delete/$1',['as' => 'drink-delete']);
$routes->get('/drink/create', 'DrinkController::create',['as' => 'drink-create']);
$routes->post('/drink/store', 'DrinkController::store',['as' => 'drink-store']);
$routes->post('/drink/update', 'DrinkController::update',['as' => 'drink-update']);


$routes->get('/kategori', 'KategoriController::index',['as' => 'kategori']);
$routes->get('/kategori/edit/(:num)', 'KategoriController::edit/$1',['as' => 'kategori-edit']);
$routes->get('/kategori/delete/(:num)', 'KategoriController::delete/$1',['as' => 'kategori-delete']);
$routes->get('/kategori/create', 'KategoriController::create',['as' => 'kategori-create']);
$routes->post('/kategori/store', 'KategoriController::store',['as' => 'kategori-store']);
$routes->post('/kategori/update', 'KategoriController::update',['as' => 'kategori-update']);


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

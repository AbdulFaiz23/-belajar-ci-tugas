<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index', ['filter' => 'auth']); // Memanggil method index() pada controller Home

$routes->get('login', 'AuthController::login'); //Memanggil method login() pada controller AuthController
$routes->post('login', 'AuthController::login'); // Memanggil method login() yang sama tetapi untuk memproses data login yang dikirim via form
$routes->get('logout', 'AuthController::logout');//Memanggil method logout() pada controller AuthController


$routes->group('v_produk', ['filter' => 'auth'], function ($routes) { 
    $routes->get('', 'ProdukController::index');
    $routes->post('', 'ProdukController::create');
    $routes->post('edit/(:any)', 'ProdukController::edit/$1');
    $routes->get('delete/(:any)', 'ProdukController::delete/$1');
    $routes->get('download', 'ProdukController::download');
});

$routes->group('v_keranjang', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'TransaksiController::index');
    $routes->post('', 'TransaksiController::cart_add');
    $routes->post('edit', 'TransaksiController::cart_edit');
    $routes->get('delete/(:any)', 'TransaksiController::cart_delete/$1');
    $routes->get('clear', 'TransaksiController::cart_clear');
});
$routes->get('checkout', 'TransaksiController::checkout', ['filter' => 'auth']);
$routes->post('buy', 'TransaksiController::buy', ['filter' => 'auth']);

$routes->get('get-location', 'TransaksiController::getLocation', ['filter' => 'auth']);
$routes->get('get-cost', 'TransaksiController::getCost', ['filter' => 'auth']);

$routes->get('/v_kategori', 'TransaksiController::index', ['filter' => 'auth']); //Memanggil method index() pada controller TransaksiController

$routes->get('/snack', 'TransaksiController::snack');
$routes->get('/makanan', 'TransaksiController::makanan');
$routes->get('/minuman', 'TransaksiController::minuman');
$routes->get('/bumbu-dapur', 'TransaksiController::bumbuDapur');
$routes->get('/alat-tulis', 'TransaksiController::alatTulis');

$routes->get('profile', 'Home::profile', ['filter' => 'auth']);

$routes->resource('api', ['controller' => 'apiController']);


<?php

use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//RUTAS PARA FRONTEND

$routes->get('hotel/mostrarFinal', 'Home::mostrarFinal');
$routes->get('/mostrarLugar', 'MostrarLugar::mostrarLugar');
$routes->get('/mostrarGastronomia', 'MostrarGastronomia::mostrarGastronomia');
$routes->get('/mostrarFestividad', 'MostrarGastronomia::mostrarFestividad');
$routes->get('/principal', 'Principal::index');
$routes->get('/menu', 'Principal::inicio');
$routes->get('/historia', 'Historia::index');


//RUTAS PARA BACKEND

//rutas para mostrar
$routes->get('/lugar/mostrar', 'Lugar::mostrar');
$routes->get('/gastronomia/mostrar', 'Gastronomia::mostrar');
$routes->get('/hotel/mostrar', 'Hotel::mostrar');
$routes->get('/festividad/mostrar', 'Festividad::mostrar');

//rutas para agregar
$routes->get('/lugar/agregar', 'Lugar::agregar');
$routes->post('/lugar/agregar', 'Lugar::agregar');

$routes->get('/gastronomia/agregar', 'Gastronomia::agregar');
$routes->post('/gastronomia/agregar', 'Gastronomia::agregar');

$routes->get('/hotel/agregar', 'Hotel::agregar');
$routes->post('/hotel/agregar', 'Hotel::agregar');

$routes->get('/festividad/agregar', 'Festividad::agregar');
$routes->post('/festividad/agregar', 'Festividad::agregar');

//rutas para editar
$routes->get('/lugar/editar/(:num)','Lugar::editar/$1');
$routes->get('/gastronomia/editar/(:num)','Gastronomia::editar/$1');
$routes->get('/hotel/editar/(:num)','Hotel::editar/$1');
$routes->get('/festividad/editar/(:num)','Festividad::editar/$1');

//rutas para eliminar
$routes->get('/lugar/delete/(:num)','Lugar::delete/$1');
$routes->get('/gastronomia/delete/(:num)','Gastronomia::delete/$1');
$routes->get('/hotel/delete/(:num)','Hotel::delete/$1');
$routes->get('/festividad/delete/(:num)','Festividad::delete/$1');

//rutas para actualizar
$routes->post('/lugar/update' , 'Lugar::update');
$routes->post('/gastronomia/update' , 'Gastronomia::update');
$routes->post('/hotel/update' , 'Hotel::update');
$routes->post('/festividad/update' , 'Festividad::update');


 //LOGIN
 $routes->get('/usuario/login','UserController::index');
$routes->post('/usuario/login','UserController::index');

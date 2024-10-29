<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Ruta para la página principal
$routes->get('/simulacion/(:num)', 'Home::view_simulacion/$1');

// Rutas para el login
$routes->get('login', 'Login::index'); // Mostrar formulario de login
$routes->post('login/validarIngreso', 'Login::validarIngreso'); // Procesar formulario de login
// Ruta para cerrar sesión
$routes->get('logout', 'Home_admin::logout'); // Cerrar sesión en Home_admin

// Rutas adicionales
$routes->get('home_admin', 'Home_admin::index');
$routes->get('home', 'Home::index'); // Ruta para la vista 'welcome_message'
$routes->get('anadir_prendas', 'Home_admin::view_producto');
$routes->post('guardar_producto', 'Home_admin::guardar_producto');
$routes->get('modificar_producto', 'Home_admin::view_modificar_producto');
$routes->get('obtener_producto/(:num)', 'Home_admin::obtener_producto/$1');
$routes->post('modificar_producto', 'Home_admin::modificar_producto');

// Rutas para añadir simulaciones
$routes->get('admin/anadir-simulaciones', 'Home_admin::view_anadir_simulaciones'); // Mostrar formulario
$routes->post('admin/anadir-simulaciones', 'Home_admin::anadir_simulacion'); // Procesar adición
$routes->post('eliminar_producto', 'Home_admin::eliminar_producto');
$routes->get('admin/modificar-simulacion', 'Home_admin::view_modificar_simulaciones');
$routes->post('modificar_simulacion', 'Home_admin::modificar_simulacion');
$routes->post('eliminar_simulacion', 'Home_admin::eliminar_simulacion');

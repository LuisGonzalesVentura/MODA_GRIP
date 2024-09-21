<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Ruta para la página principal

// Rutas para el login
$routes->get('login', 'Login::index'); // Mostrar formulario de login
$routes->post('login/validarIngreso', 'Login::validarIngreso'); // Procesar formulario de login

// Ruta para cerrar sesión
$routes->get('logout', 'Home_admin::logout'); // Cerrar sesión en Home_admin

// Rutas adicionales
$routes->get('home_admin', 'Home_admin::index');
$routes->get('home', 'Home::index'); // Ruta para la vista 'welcome_message'

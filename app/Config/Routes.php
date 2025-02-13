<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('user_login', 'Home::userLogin');

$routes->get('view_users', 'admin\AdminController::viewUsers', ['filter' => 'permissionAuth:view_user']);
$routes->get('view_permissions', 'admin\AdminController::viewPermissions', ['filter' => 'permissionAuth:view_permission']);
$routes->match(['get', 'post'], 'create_user', 'admin\AdminController::createUsers', ['filter' => 'permissionAuth:create_user']);

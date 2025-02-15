<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('user_login', 'Home::userLogin');

// users routes
$routes->get('view_users', 'admin\AdminController::viewUsers', ['filter' => 'permissionAuth:view_user']);
$routes->match(['get', 'post'], 'create_user', 'admin\AdminController::createUsers', ['filter' => 'permissionAuth:create_user']);

// permission routes
$routes->get('view_permissions', 'admin\AdminController::viewPermissions', ['filter' => 'permissionAuth:view_permission']);
$routes->match(['get', 'post'], 'create_permission', 'admin\AdminController::createPermission', ['filter' => 'permissionAuth:create_permission']);
$routes->match(['get', 'post'], 'edit_permission/(:num)', 'admin\AdminController::editPermission/$1', ['filter' => 'permissionAuth:edit_permission']);
$routes->match(['get', 'post'], 'delete_permission/(:num)', 'admin\AdminController::deletePermission/$1', ['filter' => 'permissionAuth:delete_permission']);

// roles routes
$routes->get('view_roles', 'admin\AdminController::viewRoles', ['filter' => 'permissionAuth:view_role']);
$routes->match(['get','post'], 'assign_role_permission/(:num)', 'admin\AdminController::assignRolePermission/$1', ['filter' => 'permissionAuth:assign_permission']);

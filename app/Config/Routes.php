<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Main');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Main::index', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'login', 'Login::index', ['filters' => 'noauth']);
$routes->get('logout', 'Login::logout');

//Routes for user management
$routes->get('users', 'Users::index', ['filters' => 'auth']);
$routes->match(['get', 'post'], 'adduser', 'Users::AddUser', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'edituser', 'Users::EditUser', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'deleteuser', 'Users::DeleteUser', ['filter' => 'auth']);

//Routes for User profile
$routes->get('user-profile', 'UserProfile::index', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'editprofile', 'UserProfile::EditProfile', ['filter' => 'auth']);

//Router for criminals
$routes->get('crime', 'Crime::index', ['filters' => 'auth']);
$routes->match(['get', 'post'], 'edicriminal', 'Crime::EditCriminal', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'addcriminal', 'Crime::AddCriminal', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'deletecriminal', 'Crime::DeleteCriminal', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'editdefendant', 'Criminals::EditDefendant', ['filter' => 'auth']);


//Routes for complaints
$routes->get('complaints', 'Complainer::index', ['filters' => 'auth']);
$routes->match(['get', 'post'], 'AddComplaints', 'Complainer::AddComplaints', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'deleteComplaints', 'Complainer::DeleteComplaints', ['filter' => 'auth']);

//Routes for accusers
$routes->get('crime', 'Crime::index', ['filters' => 'auth']);
$routes->match(['get', 'post'], 'edicrime', 'Crime::EditCrime', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'addcrime', 'Crime::AddCrime', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'deletecrime', 'Crime::DeleteCrime', ['filter' => 'auth']);
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

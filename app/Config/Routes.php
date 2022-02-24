<?php

namespace Config;
use phpDocumentor\Reflection\PseudoTypes\Numeric_;
use CodeIgniter\Debug\Toolbar\Collectors\Routes;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
// if we false this they can't to do work becoz they havn't define 
// if you want to creat application so false the route becoz set own routes for application. 
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index',['filter' =>'guest']);
$routes->get('about','page::about');
// $routes->get('contact','page::contact');
$routes->match(['get','post'],'contact','page::contact');
// own routes set for the page....
$routes->get('page/about','page::about');
// to set routes as you want to remove controller form the main page.
// $routes->add('about','page::about');
//we can also put any type of parameter in the routes which show in the main page..
// $routes->get('about/(:any)', 'page::about/$1');  
// only for number... show on the main page...
// $routes->get('about/(:num)', 'page::about/$1');  
// // aslo put alpha Numeric_
//  $routes->get('about/(:alpha)', 'page::about/$1');  

// function in Routes
// $routes->add('help' ,function(){
//       echo "Help will be Provided";
// });
// Group function in the routes...
//  $routes->group('admin',function($routes){
       
// $routes->get('/', 'Home::index');
// $routes->add('page/about','page::about');
// $routes->add('about','page::about');
// $routes->get('about/(:num)', 'page::about');  

// $routes->add('help' ,function(){s
//           echo "Help will be Provided";
//     });        

//  });
#routes for login page
// $routes->resource('user');
$routes->get('register', 'Page::register' ,['filter'=>'guest']);
$routes->get('login', 'Page::login',['filter'=>'guest']);
$routes->post('register', 'User::create');
$routes->get('register', 'User::register',['filter'=>'guest']);
$routes->post('login', 'User::login',['filter'=>'guest']);
$routes->get('home', 'Home::index', ['filter'=>'isLoggedIn']);
$routes->get('logout', 'User::logout' , ['filter'=>'isLoggedIn']);
$routes ->get('user/(:num)/profile','User::profile/$1' );





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

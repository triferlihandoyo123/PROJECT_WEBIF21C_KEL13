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
 $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::duser');
$routes->get('/loginAdmin', 'Home::index');

$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/login', 'Home::login');
$routes->get('/signup', 'Home::signUp');
$routes->get('/penjadwalan', 'Home::penjadwalan');
$routes->get('/laporan', 'Home::laporan');
$routes->get('/pengingat', 'Home::pengingat');
$routes->get('/data_mitra', 'Home::data_mitra');
$routes->get('/sertifikat', 'Home::sertifikat');
$routes->get('/dashboardUser', 'Home::duser');
$routes->get('/profile', 'Home::profile');
$routes->get('/portfolio-details', 'Home::portfolio');
$routes->get('/inner-page', 'Home::innerpage');




$routes->post('/tambah-data', 'Home::tambahData');
$routes->post('/edit-data', 'Home::editData');
$routes->post('/hapus-data', 'Home::hapusData');




$routes->get('/print', 'PrintSertifikat::index');












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

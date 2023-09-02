<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Halaman tanpa autentikasi
$routes->get('/', 'Home::index');
$routes->post('/form_pengaduan', 'Home::form_pengaduan');
$routes->get('/galeriBEM', 'Home::galeriBEM');
$routes->get('/galeriBLM', 'Home::galeriBLM');
$routes->get('/galeriHIMA', 'Home::galeriHIMA');

//Halaman dengan autentikasi
//Dashboard
$routes->get('dashboard', 'Admin::dashboard');
//Galeri POST and GET
$routes->get('/galeri', 'Admin::galeri');
$routes->post('/galeri', 'Admin::Postgaleri');
$routes->get('/detailGaleri/(:any)', 'Admin::detailGaleri/$1');
$routes->get('/editGaleri/(:any)', 'Admin::editGaleri/$1');
$routes->post('/editGaleri/(:any)', 'Admin::PosteditGaleri/$1');
$routes->get('/hapusGaleri/(:any)', 'Admin::hapusGaleri/$1');
//Dokumen GET and POST
$routes->get('/dokumen', 'Admin::dokumen');
$routes->post('/dokumen', 'Admin::Postdokumen');
$routes->get('/detailDokumen/(:any)', 'Admin::detailDokumen/$1');
//LaporanPengaduan
$routes->get('/laporanPengaduan', 'Admin::laporanPengaduan');
$routes->get('/detailPengaduan/(:any)', 'Admin::detailPengaduan/$1');
$routes->post('/prosesPengaduan/(:any)', 'Admin::prosesPengaduan/$1');
$routes->post('/selesaiPengaduan/(:any)', 'Admin::selesaiPengaduan/$1');
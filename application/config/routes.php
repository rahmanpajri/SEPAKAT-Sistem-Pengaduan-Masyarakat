<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'LoginController';
$route['login'] = 'LoginController/login';
$route['aksilogin'] = 'LoginController/aksilogin';
$route['home'] = 'AdminController/index';
$route['logout'] = 'LoginController/logout';
$route['registrasi'] = 'LoginController/registrasi';
$route['aksiregistrasi'] = 'LoginController/aksiregistrasi';
$route['data_aduan/(:any)'] = 'AdminController/data_aduan/$1';
$route['data_tanggapan/(:any)'] = 'AdminController/data_tanggapan/$1';
$route['proses_aduan'] = 'AdminController/proses_aduan';
$route['terima_pengaduan'] = 'AdminController/terima_pengaduan';
$route['kirim_tanggapan'] = 'AdminController/kirim_tanggapan';
$route['data_masyarakat'] = 'AdminController/data_masyarakat';
$route['tambah_masyarakat'] = 'AdminController/tambah_masyarakat';
$route['edit_masyarakat'] = 'AdminController/edit_masyarakat';
$route['hapus_masyarakat'] = 'AdminController/hapus_masyarakat';
$route['data_petugas'] = 'AdminController/data_petugas';
$route['tambah_petugas'] = 'AdminController/tambah_petugas';
$route['edit_petugas'] = 'AdminController/edit_petugas';
$route['hapus_petugas'] = 'AdminController/hapus_petugas';
$route['laporan'] = 'AdminController/laporan';
$route['cetak'] = 'AdminController/cetak';
$route['hapus_pengaduan'] = 'AdminController/hapus_pengaduan';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

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
$route = array(
    'default_controller' => 'main',
    'main' => 'main',
    'administrator' => 'Administrator', 
    'administrator/novapage' => 'Mod_Novapage', 
    'administrator/novapage-images' => 'Mod_Novapage_Images',
    'administrator/novapage-testimoni' => 'Mod_Novapage_Testimoni', 
    'administrator/novapage-team' => 'Mod_Novapage_Team', 
    'administrator/novapage-client' => 'Mod_Novapage_Client',
    'administrator/novapage-portfolio' => 'Mod_Novapage_Portfolio',
    'login' => 'Login',
    'agenda' => 'agenda',
    'albums' => 'albums',
    'berita' => 'berita',
    'download' => 'download',
    'halaman' => 'halaman',
    'layanan' => 'layanan',
    'hubungi' => 'hubungi',
    'kategori' => 'kategori',
    'konsultasi' => 'konsultasi',
    'kontributor' => 'kontributor',
    'playlist' => 'playlist',
    'polling' => 'polling',
    'streaming' => 'streaming',
    'tag' => 'tag',
    'teams' => 'Mod_Novapage_Web/teams',
    'teams/(:num)' => 'Mod_Novapage_Web/teams/$1',
    'portfolio' => 'Mod_Novapage_Web/portfolio',
    'portfolio/(:num)' => 'Mod_Novapage_Web/portfolio/$1',
    'contact-us' => 'Mod_Novapage_Web/contact',
    'komentar-berita' => 'Mod_Novapage_Web/komentar_berita',
    'komentar-video' => 'Mod_Novapage_Web/komentar_video',
    'feed' => 'feed',
    'sitemap' => 'sitemap',
    'sitemap.xml' => 'sitemap'

);

$route['(:any)'] = 'news/$1/$2';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['feed'] = 'Feed/index';
$route['sitemap\.xml'] = 'Sitemap/index';
$route['sitemap'] = 'Sitemap/index';
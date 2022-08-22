<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
| -------------------------------------------------------------------------
| AUTHENTICATION ROUTES
| -------------------------------------------------------------------------
*/
$route['signin'] = 'auth/signin';
$route['forgot-password'] = 'auth/forgot_password';

/*
| -------------------------------------------------------------------------
| HOME ROUTES
| -------------------------------------------------------------------------
*/
// About
$route['about'] = 'home/about';
$route['about/vm'] = 'home/vm';
$route['about/history'] = 'home/history';
$route['about/logo-and-symbols'] = 'home/logo_symbols';
$route['about/hymn'] = 'home/hymn';
$route['about/annual-reports'] = 'home/annual_reports';
$route['about/contact-us'] = 'home/contact_us';
$route['about/maps'] = 'home/maps';
$route['about/code'] = 'home/code';
$route['about/memorandum-orders'] = 'home/memorandum_orders';
$route['about/executive-orders'] = 'home/executive_orders';
$route['about/codi-manual'] = 'home/codi_manual';
$route['about/citizens-charter'] = 'home/citizens_charter';

$route['terms'] = 'home/terms';
$route['privacy'] = 'home/privacy';

// Academic
$route['academic/programs'] = 'home/programs';
$route['academic/ous'] = 'home/ous';
$route['academic/library'] = 'home/library';
$route['academic/ovpaa'] = 'home/ovpaa';

// Students
$route['student/services'] = 'home/student_services';
$route['student/organizations'] = 'home/organizations';
$route['student/publications'] = 'home/student_publications';
$route['student/council'] = 'home/student_council';
$route['student/handbook'] = 'home/student_handbook';
$route['student/downloads'] = 'home/downloads';

// Research
$route['research/researches'] = 'home/researches';
$route['research/extensions'] = 'home/extensions';
$route['research/intellectual-property'] = 'home/intellectual_property';

// CTA
$route['applicants'] = 'home/applicants';
$route['events'] = 'home/events';
$route['docu-request'] = 'home/documents';
$route['scholarships'] = 'home/scholarships';
$route['calendar'] = 'home/calendar';

// Footer
$route['admission'] = 'home/admission';

/*
| -------------------------------------------------------------------------
| STUDENT ROUTES
| -------------------------------------------------------------------------
*/
$route['student/dashboard'] = 'student';

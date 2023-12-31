<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/

$router->get('/', 'Welcome::index');
$router->post('/booksave', 'ReservationController::booksave');
$router->get('/reservation', 'ReservationController::getdata');
$router->get('/reservationVenue', 'ReservationController::get_data');
$router->get('/bookVenue/(:any)', 'ReservationController::get_venue');
$router->match('/registerauth', 'UserController::registerAuth', 'GET|POST');

/*  For Userside */
$router->get('/register', 'UserController::register');
$router->post('/loginAuth', 'UserController::userLogin');
$router->get('/login', 'UserController::loginview');
$router->get('event', 'UserController::event');
$router->get('home', 'UserController::home');
$router->get('venue', 'UserController::venue');
$router->get('about', 'UserController::about');
$router->get('logout', 'UserController::logout');

/*  For Adminside */
$router->get('/adminregister', 'AdminController::registerview');
$router->match('/adminuserregister', 'AdminController::adminregister', 'GET|POST');
$router->post('/adminuserlogin', 'AdminController::adminlogin');
$router->get('/adminlogin', 'AdminController::loginview');
$router->get('/adminhome', 'AdminController::home');
$router->get('/adminvenue_book', 'AdminController::venue');
$router->get('/adminvenues', 'AdminController::venues');
$router->get('/adminaudience_report', 'AdminController::audience_report');
$router->get('/adminvenue_report', 'AdminController::venue_report');
$router->get('/adminusers', 'AdminController::users');
$router->get('/editBooking/(:any)', 'AdminController::editbooking');
$router->match('/updatebook/', 'AdminController::updatebooking', 'GET|POST');
$router->get('/deleteBooking/(:any)', 'AdminController::deleteBooking');
$router->get('/editVenues/(:any)', 'AdminController::editvenues');
$router->match('/updatevenue/', 'AdminController::updatevenues', 'GET|POST');
$router->get('/deleteVenues/(:any)', 'AdminController::deletevenues');
$router->get('/editUsers/(:any)', 'AdminController::editusers');
$router->match('/updateuser/', 'AdminController::updateusers', 'GET|POST');
$router->get('/deleteUser/(:any)', 'AdminController::deleteusers');

$router->get('/venue_booklist', 'Home::venue_booklist');
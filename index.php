<?php
/* Bruce Turner, Professor Ostrander, Spring 2019
   IT 328 Full Stack Web Development
   Dating II Assignment
   file: index.php  --> default landing page, defines various routes
   date: Sunday, April 21 2019
*/
// Set up error reporting
// Flag variable for site status:
/*
define('LIVE', FALSE);
ini_set('display_errors', 1);
error_reporting(E_ALL);
*/
// Use my error handler:
define('LIVE', FALSE);
require_once("my_error_handler.php");
set_error_handler('my_error_handler');
//Start a session
session_start();
require_once('vendor/autoload.php');
$f3 = Base::instance();
$f3->set('DEBUG',3);
//Define a default route
$f3->route('GET /', function(){
    //display landing page Template, which posts to personal information
    $view = new Template();
    echo $view->render('views/home.html');

});
//Define a personal information route
$f3->route('GET /perinfo', function() {

    //Display personal information, which posts to profile
    $view = new Template();
    echo $view->render('views/perinfo.html');
});

//Define a profile route
$f3->route('GET /profile', function() {

    //Display profile, which posts to interests
    $view = new Template();
    echo $view->render('views/profile.html');
});

//Define a interests route
$f3->route('GET /interests', function() {

    //Display interests, which posts to summary
    $view = new Template();
    echo $view->render('views/interests.html');
});

//Define a summary route
$f3->route('GET /summary', function() {

    //Display summary, which concludes Dating II
    $view = new Template();
    echo $view->render('views/summary.html');
});
//Run fat free
$f3->run();
<?php
// Bruce Turner, Professor Ostrander, Spring 2019 -->
// IT 328 Full STack Web Development -->
// Dating 1 Assignment -->
// file: index_sav.php  --> default landing page, defines default route
//
//
//Start a session
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('vendor/autoload.php');
$f3 = Base::instance();
$f3->set('DEBUG',3);
//Define a default route
$f3->route('GET /', function(){
    //display landing page Template
    $view = new Template();
    echo $view->render('views/home.html');

});
//Define a personal information route
$f3->route('GET /perinfo', function() {

    //Display form1, which posts to perinfo
    $view = new Template();
    echo $view->render('views/perinfo.html');
});

//Define a profile route
$f3->route('GET /profile', function() {

    //Display form1, which posts to profile
    $view = new Template();
    echo $view->render('views/profile.html');
});
//Run fat free
$f3->run();
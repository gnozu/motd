<?php

// Make app main working dir for system
chdir (dirname(__FILE__));

// force IE into edge mode
header('X-UA-Compatible: IE=edge,chrome=1');
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Load config
require '../config/config.php';

// Load extras
require '../vendor/autoload.php';
require 'lib/methods.php';
require 'lib/QuickCurl.php';

// setup autoloads
Flight::path("controllers/");
Flight::path("models/");

// Setup main object
$main = new MessageFrontend();

// Define routes
Flight::route('/system/@system:[a-z-]+', array($main,'system'));
Flight::route('/(@type:[a-z]+(/@location:[a-zA-Z0-9]+))', array($main,'homepage'));
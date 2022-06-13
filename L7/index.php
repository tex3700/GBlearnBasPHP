<?php

session_start();

require_once 'errorHandler.php';
require_once 'model/Logger.php';
$pdo = require 'db.php';

$controller = $_GET['controller'] ?? 'index';

$routes = require 'routes.php';

require_once $routes[$controller];

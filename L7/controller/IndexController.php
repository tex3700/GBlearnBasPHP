<?php

require_once 'errorHandler.php';
require_once 'model/Logger.php';
require_once 'model/BaseId.php';
require_once 'model/User.php';
session_start();

$pageHeader = 'Добро пожаловать';

$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
    $name = $_SESSION['username']->getName();
}

//print_r($_SESSION);var_dump($username);die();


include "view/index.php";
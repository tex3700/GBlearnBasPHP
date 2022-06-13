<?php

require_once 'errorHandler.php';
require_once 'model/Logger.php';
require_once 'model/BaseId.php';
require_once 'model/UserProvider.php';
require_once 'model/User.php';
$pdo = require 'db.php'; // Подключим PDO
session_start();

$error = null;

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header("Location: index.php");
    die();
}

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUsernameAndPassword($username, $password);

    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    } else {
        $_SESSION['username'] = $user;
        $_SESSION['userId'] = $user->getId();
        header("Location: index.php");
        die();
    }
}

    include "view/signin.php";

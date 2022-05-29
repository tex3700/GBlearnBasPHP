<?php
require_once 'model/UserProvider.php';
$pdo = require 'db.php'; // Подключим PDO
require_once 'fixture.php';

session_start();

$error = null;

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    //setcookie('username', null, -1, '/');
    unset($_SESSION['username']);
    header("Location: index.php");
    die();
    // unset($_COOKIE['username']);
}

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUsernameAndPassword($username, $password);
    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    } else {
        $_SESSION['username'] = $user;
        header("Location: index.php");
        die();
    }
}


if (isset($_POST['usernameReg'], $_POST['nameReg'], $_POST['passwordReg'])) {
    ['usernameReg' => $username, 'nameReg' => $nameReg, 'passwordReg' => $plainPassword] = $_POST;
    $userProvider = new UserProvider($pdo);
    $newUser = new User($username);
    $newUser->setName($nameReg);
    $userReg = $userProvider->registerUser($newUser, $plainPassword);
    if (!$userReg) {
        $error = 'Пользователь с указанными учетными данными уже существует';
    } else {
        $_SESSION['username'] = $newUser;
        header("Location: index.php");
        die();
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'registration') {

    include "view/registration.php";

} else {
    include "view/signin.php";
}
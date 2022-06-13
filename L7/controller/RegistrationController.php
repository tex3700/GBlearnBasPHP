<?php

require_once 'errorHandler.php';
require_once 'model/Logger.php';
require_once 'model/BaseId.php';
require_once 'model/User.php';
require_once 'model/UserProvider.php';
$pdo = require 'db.php';
session_start();

$error = null;

if (isset($_POST['usernameReg'], $_POST['nameReg'], $_POST['passwordReg'])) {
    ['usernameReg' => $username, 'nameReg' => $nameReg, 'passwordReg' => $plainPassword] = $_POST;

    $newUser = new User($username);
    $newUser->setName($nameReg);

    $userProvider = new UserProvider($pdo);
    //var_dump(!$userProvider->checkUsername($username));die();
    if (!$userProvider->checkUsername($username)) {

        $error = 'Пользователь с указанными учетными данными уже существует';

    } else {

        $newUser->setId($userProvider->registerUser($newUser, $plainPassword));
        $_SESSION['username'] = $newUser;
        $_SESSION['userId'] = $newUser->getId();
        //print_r($_SESSION);die();
        header("Location: / ");
        die();

    }

}

include "view/registration.php";
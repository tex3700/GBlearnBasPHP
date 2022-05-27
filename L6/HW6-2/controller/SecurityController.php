<?php
require_once 'model/UserProvider.php';

session_start();

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
    unset($_SESSION['tasks']);
    header("Location: / " );
    die();
}

$error = null;

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAndPassword($username, $password);
    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    } else {
        $_SESSION['username'] = $user;
       // header("Location: index.php");
       // die();
    }

    if (isset($_SESSION['username'])) {
        header("Location: / " );
    }

}

include "view/signin.php";
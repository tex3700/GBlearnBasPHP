<?php
require_once 'model/UserProvider.php';

session_start();

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
    header("Location: index.php" );
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
        header("Location: index.php" );
    }

}

include "view/signin.php";
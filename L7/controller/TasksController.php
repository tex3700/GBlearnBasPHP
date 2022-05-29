<?php
include_once "model/User.php";
include_once "model/Task.php";
include_once "model/TaskProvider.php";

$pdo = require 'db.php';
session_start();

//Получаем текущего пользователя, если он залогинен
$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
    $name = $_SESSION['username']->getName();
} else {
    //Перенаправим на главную если пользователь не залогинен
    header("Location: /");
    die();
}

$taskProvider = new TaskProvider($pdo);

if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $taskProvider->addTask(new Task($_POST['task']));
    header("Location: /?controller=tasks");
    die();
}

$pageHeader = "Задачи";


$tasks = $taskProvider->getUndoneList();


include "view/tasks.php";

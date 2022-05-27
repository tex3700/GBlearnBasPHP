<?php
include_once 'model/User.php';
include_once 'model/Task.php';
include_once 'model/TaskProvider.php';
session_start();

$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
    }else {
    header("Location: /");
    die();
}

$pageHeader = 'Задачи';

$task = new TaskProvider();

if ( isset( $_GET['action'] ) && $_GET['action'] === 'add') {
    $task->addTask(new Task($_POST['task']));
    header("Location: /?controller=tasks");
    die();
}

$tasks = $task->getUndoneList();

include "view/tasks.php";
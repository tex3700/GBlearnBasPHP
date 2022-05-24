<?php

require 'User.php';
require 'Todo.php';
require 'Task.php';
require 'Comment.php';
require 'TaskService.php';

$list = new Todo(' проснуться, одеться, позавтракать, почистить зубы');
$user = new User('Ivan', 'Ivan@tu.io');
$task = new Task($user);

$task ->setReadTodo($list);
$textCom1 = 'проснуться пораньше';
$textCom2 = 'если раздевался';

$task ->setDescription();

TaskService::addComment($user, $task, $textCom1);
TaskService::addComment($user, $task, $textCom2);

print_r($task);




<?php

require 'User.php';
require 'Todo.php';
require 'Task.php';


$list = new Todo(' проснуться, одеться, позавтракать, почистить зубы');
$user = new User('Ivan', 'Ivan@tu.io');
$task = new Task($user);

$task ->setReadTodo($list);

$task ->setDescription();
print_r($task ->getDescription().PHP_EOL);
print_r($task ->markAsDone(1).PHP_EOL);
print_r($task ->getReadTodo());

$task ->setDescription(2);
print_r($task ->getDescription().PHP_EOL);
print_r($task ->markAsDone(1).PHP_EOL);
print_r($task ->getReadTodo());

$task ->setDescription(4);
print_r($task ->getDescription().PHP_EOL);
print_r($task ->markAsDone(0).PHP_EOL);
print_r($task ->getReadTodo());

//print_r($user);

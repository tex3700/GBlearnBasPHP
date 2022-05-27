<?php

class TaskProvider
{
    private array $tasks;

    public function __construct()
    {
        $this->tasks = $_SESSION['tasks'] ?? [];
    }

    public function getUndoneList (): array
    {
        $checkDone = function (Task $task){
            return $task = $task->isDone() ?: $task;
        };

        return $undoneTasks = array_map($checkDone, $this->tasks);
    }

    public function addTask (Task $task): void
    {
        $_SESSION['tasks'][] = $task;
        $this->tasks[] = $task;
    }


}

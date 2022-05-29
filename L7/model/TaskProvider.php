<?php


class TaskProvider
{
    private PDO $pdo;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getUndoneList(): array
    {
        $result = [];
        $statement = $this->pdo->query('SELECT * FROM tasks');
        while ($statement && $tasks = $statement->fetch()) {

            if (!$tasks['isDone']) {
                $result[] = $tasks['description'];
            }
        }
        return $result;
    }


    public function addTask(Task $task): bool
    {

        if (!$task->getDescription()) {
            return false;
        }

        $statement = $this->pdo->prepare(
            'INSERT INTO tasks ( description, isDone ) VALUES ( :description, :isDone )'
        );
        return $statement->execute([
            'description' => $task->getDescription(),
            'isDone' => $task->isDone()
        ]);
    }


}
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
       $statement = $this->pdo->prepare(' SELECT * FROM tasks WHERE isDone = 0 AND userId = :id ');
       $statement->execute([
           'id' => $_SESSION['userId'],
       ]);
        return $statement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
    }


    public function addTask(Task $task): bool
    {

        if (!$task->getDescription()) {
            return false;
        }

        $statement = $this->pdo->prepare(
            'INSERT INTO tasks ( description, userId ) VALUES ( :description, :userId )'
        );
        return $statement->execute([
            'description' => $task->getDescription(),
            'userId' => $_SESSION['userId']
        ]);
    }

    public function doDoneTask (int $id): bool
    {
        $statement = $this->pdo->prepare(' UPDATE tasks SET isDone = 1 WHERE id = :id AND userId = :userId ');
        return $statement->execute([
            'userId' => $_SESSION['userId'],
            'id' => $id
        ]);
    }


}
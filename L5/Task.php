<?php


class Task
{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private User $user;
    private array $readTodo = [];
    private array $comments = [];


    public function __construct( User $user)
    {
        $this->user = $user;
        $this->dateCreated = new DateTime();

    }


    public function getReadTodo(): array
    {
        return $this->readTodo;
    }

    public function setReadTodo( Todo $todo ): array
    {
        return $this->readTodo = $todo->getTodoList();
    }


    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription( int $priority = 1): void
    {
        $this ->setPriority($priority);
        $this->description = $this->readTodo[$this->getPriority() - 1];
        $this->dateUpdated = new DateTime();
    }


    public function markAsDone( ?bool $isDone ): bool
    {
        if ( $isDone ) {
            $this ->readTodo[$this->getPriority() - 1] = $this ->description.' - Выполнено ';
            $this ->dateDone =  new DateTime();
            $this ->dateUpdated = new DateTime();
            return true;
        }
        return false;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    public function setComment(Comment $comment): void
    {
        $this ->comments[] = $comment;
    }


    public function getComments(): array
    {
        return $this->comments;
    }

}
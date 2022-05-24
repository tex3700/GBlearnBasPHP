<?php

class Todo
{
    private string $todoString;
    private array $todoList;

    public function __construct(string $todoString)
    {
        $this->todoList = explode(',', $todoString);
    }


    public function getTodoList(): array
    {
        return $this->todoList;
    }


}
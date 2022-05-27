<?php

class Task
{
    private bool $isDone;
    private string $description;

    public function __construct( string $description, bool $isDone = false)
    {
        $this->isDone = $isDone;
        $this->description = $description;
    }


    public function isDone(): bool
    {
        return $this->isDone;
    }

    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }


}
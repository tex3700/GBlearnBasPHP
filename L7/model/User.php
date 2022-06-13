<?php

class User extends BaseId
{
    private string $username;
    private string $name;

    public function __construct(string $username = "")
    {
        $this->username = $username;
    }

    // Сделаем методы получения и установки свойств
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }


}
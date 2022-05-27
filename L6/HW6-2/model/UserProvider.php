<?php

require_once 'User.php';

class UserProvider
{
    private array $accounts = [
        'admin' => '123',
        'Дима' => '234'
    ];

    public function getByUsernameAndPassword(string $username, string $password): ?User
    {
        $expectedPassword = $this->accounts[$username] ?? null;
        if ($expectedPassword === $password) {
            return new User($username);
        }

        return null;
    }
}
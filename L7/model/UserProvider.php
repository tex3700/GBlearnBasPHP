<?php

class UserProvider
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    /**
     * @throws Exception
     */
    public function registerUser(User $user, string $plainPassword): int
    {

        if ( strlen($user->getUsername()) > 30 ) {
            throw new Exception('Логин не должен быть более 30 символов');
        }
            $statement = $this->pdo->prepare(
                'INSERT INTO users (name, username, password) VALUES (:name, :username, :password)'
            );

            $statement->execute([
                'name' => $user->getName(),
                'username' => $user->getUsername(),
                'password' => md5($plainPassword)
            ]);

            return $this->pdo->lastInsertId();

    }



// Метод получения пользователя. Если данные не совпали, вернет null
    public function getByUsernameAndPassword(string $username, string $password): ?User
    {
        $statement = $this->pdo->prepare(
            'SELECT id, name, username FROM users WHERE username = :username AND password = :password LIMIT 1'
        );
        $statement->execute([
            'username' => $username,
            'password' => md5($password)
        ]);
        return $statement->fetchObject(User::class, [$username]) ?: null;
        // fetch может вернуть false, а мы поддерживаем только null и User
    }

    public function checkUsername (string $username): bool
    {
        $statement = $this->pdo->prepare('SELECT * FROM users WHERE username = ?');
        $statement->execute([$username]);
        return !$statement->fetch();
    }


}
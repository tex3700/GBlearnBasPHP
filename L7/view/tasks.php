<?php
/**
 * @var Task $task
 */
?>
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>

<h1><?= $pageHeader ?></h1>
Добро пожаловать <?= '"'. $name .'"' ?>! <a href="/?controller=security&action=logout">Выйти</a>
<a href="/">Главная</a>
<br><br>
<form action="/?controller=tasks&action=add" method="post">
    <input type="text" name="task" placeholder="Опишите новую задачу">
    <input type="submit" value="Добавить">
</form>

<?php foreach ($tasks as $task): ?>
    <div>
        <?= $task ?> [Done]
    </div>
<?php endforeach; ?>

</body>

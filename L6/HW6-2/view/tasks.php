
<head>
    <meta charset="UTF-8">
    <title>Задачи</title>
</head>
<body>
<h1><?= $pageHeader ?></h1>
<?php include "menu.php" ?>

<form action="?controller=tasks&action=add" method="post">
    <input type="text" name="task" placeholder="Введите новую задачу"/>
    <input type="submit" value="Добавить"/>
</form>

<?php foreach ($tasks as $task):?>
    <div>
        <?= $task->getDescription() ?> [Done]
    </div>
<?php endforeach;?>

</body>


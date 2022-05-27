
<a href="/">Главная</a>
<a href=<?= $checkUser ?>>Задачи</a><br>

<?php if ($username !== null) : ?>

    <p>Рады вас приветствовать, <?= $username ?>. <a href="/?action=logout&controller=security">[Выход]</a></p>

<?php else : ?>

    <a href="/?controller=security">[Войти]</a></p>

<?php endif ?><br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистрация</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous">
    <style>
        .sign-in-form {
            margin: auto;
        }
        #username {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        #password {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>
<body>
<div class="container text-center">
    <div class="row">
        <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
            <h3>Регистрация пользователя</h3>
            <div class="alert alert-danger <?=$error === null ? 'visually-hidden' : ''?>">
                <?=$error?>
            </div>
            <label for="usernameReg" class="visually-hidden">Логин</label>
            <input type="text" id="username" name="usernameReg" class="form-control mt-3" placeholder="Введите имя пользователя" required="" autofocus="">
            <label for="nameReg" class="visually-hidden">Имя</label>
            <input type="text" id="username" name="nameReg" class="form-control mt-3" placeholder="Как к вам обращаться" required="" autofocus="">
            <label for="password" class="visually-hidden">Пароль</label>
            <input type="password" id="password" name="passwordReg" class="form-control" placeholder="Введите пароль" required="">
            <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Зарегистрироваться</button>
            <div class="mt-3">
                <a href="/">Назад</a>
            </div>
        </form>
    </div>
</div>
</body>


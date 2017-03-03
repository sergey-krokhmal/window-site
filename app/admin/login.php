<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Окна</title>
        <!-- Bootstrap core CSS -->
        <link href="/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="/assets/css/signin.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <form class="form-signin" role="form" action="/admin" method="POST">
                <h2 class="form-signin-heading">Введите логин и пароль</h2>
                <input type="text" class="form-control" placeholder="Логин" required autofocus>
                <input type="password" class="form-control" placeholder="Пароль" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
            </form>
        </div>
    </body>
</html>
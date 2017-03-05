<?
    if (session_id()){
        unset($_SESSION);
    } else {
        session_start();
    }
    unset($_SESSION['auth']);
    if ($_POST['login'] ?? false && $_POST['password'] ?? false) {
        require_once($root."/core/db/DB.php");
        $login = $_POST['login'];
        $pass = $_POST['password'];
        
        $wrong_user = false;
        $wrong_pass = false;
        
        $login = $db->quote($login);
        $usr = $db->selectFirst("select * from `users` where login = $login");
        if ($usr) {
            $pass = md5($pass);
            $usr_pass = $db->selectFirst("select * from `users` where login = $login and password = '$pass'");
            if ($usr_pass) {
                $auth_data = array(
                    'user' => $usr_pass['login'],
                    'key' => md5($usr_pass['id']),
                );
                $_SESSION['auth'] = $auth_data;
                header("Location: /admin");
            } else {
                $wrong_pass = true;
            }
        } else {
            $wrong_user = true;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Вход в админку</title>
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
            <form class="form-signin" role="form" action="/admin/login" method="POST">
                <h2 class="form-signin-heading">Введите логин и пароль</h2>
                <input type="text" class="form-control" placeholder="Логин" name="login" required autofocus>
                <input type="password" class="form-control" placeholder="Пароль" name="password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
            </form>
        </div>
    </body>
</html>
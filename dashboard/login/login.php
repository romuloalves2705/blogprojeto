<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Meu Blog">
    <meta name="author" content="Romulo Alves">
    <title>Login | Meu Blog</title>
    <link rel="icon" href="../../img/blogicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/signin.css">
</head>
<body class="text-center">
    <form class="form-signin" method="post" action="validar_login.php">
        <img class="mb-4" src="../../img/romuloblog.png" alt="" width="242" height="36">
        <h1 class="h3 mb-3 font-weight-normal">Formulário de Login</h1>
        <label for="inputEmail" class="sr-only">Email</label>
        <!--<input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>-->
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email">
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Senha">
        <div class="checkbox mb-3" style="float:left">
            <label class="float:left">
                <input type="checkbox" value="remember-me">Lembrar me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; Romulo Blog 2019</p>
    </form>
</body>
</html> 
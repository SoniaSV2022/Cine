<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Cinema</title>
        <meta charset="utf-8"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Login</h1>
        <form action="validar_usuario.php" method="post">
            <label>Correo:</label>
            <input class="" type="text" name="user_username" required placeholder="Usuario">
            <label>Contraseña:</label>
            <input class="" type="password" name="user_pass" required placeholder="Contraseña">

            <input class="btn btn-primary" role="button" type="submit" value="Iniciar Sesión">
        </form>

    </body>
</html>
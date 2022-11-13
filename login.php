<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="/css/formulario.css" />
</head>

<body>
    <header>
        <p>Logo</p>
    </header>
    <div id="div1">
        <form method="post" action="" class="formulario">
            <h1>Iniciar sesión</h1>
            <p class="datos">Nombre</p>
            <input type="text" name="nombre" pattern="^[A-Za-z \s*]+$" required>

            <p class="datos">Contraseña</p>
            <input type="password" name="contrasenya" pattern="^[A-Za-z0-9]+$" required>
            <br>
            <input type="submit" name="login" value="Iniciar sessión" id="button1">
            </form>
    </div>
    <div>
        <h3>No tienes cuenta?</h3>
        <a href = "registre.php"> <input type="submit" value="Crea tu cuenta"</a>
    </div>
</body>
</html>
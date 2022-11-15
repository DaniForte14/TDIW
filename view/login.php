<!DOCTYPE html>
<html lang>
<head>
    <meta charset="UTF-8" />
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="/css/formulario.css" />
</head>

<body>
    <header>
        <a href = "/../index.php">Logo</a>
    </header>
    <div id="div1">
        <form method="post" action="" class="formulario">
            <h1>Iniciar sesión</h1>
            <label for="name">Nombre</label>
            <input type="text" name="nombre" pattern="^[A-Za-z \s*]+$" required>

            <label for="password">Contraseña</label>
            <input type="password" name="contrasenya" pattern="^[A-Za-z0-9]+$" required>
            <br>
            <input type="submit" name="login" value="Iniciar sessión" id="button1">
            </form>
    </div>
    <div>
        <h3>No tienes cuenta?</h3>
        <a href = "/../index.php?accio=register"> <input type="submit" value="Crea tu cuenta" >
    </div>
</body>
</html>
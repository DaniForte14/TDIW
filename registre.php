<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Registre </title>
    <link rel="stylesheet" type="text/css" href="/css/formulario.css" />
</head>

<body>
    <header>
        <p>Logo</p>
    </header>
    <div id="div1">
        <form method="post" action="" class="formulario">
            <h1>Crear cuenta</h1>
            <p class="datos">Nombre</p>
            <input type="text" name="nombre" required>
            <p class="datos">Correo electrónico</p>
            <input type="email" name = "correo" required>
            <p class="datos">Contraseña</p>
            <input type="password" name="contrasenya" pattern="^[A-Za-z0-9]+$" required>
            <p class="datos">Dirección</p>
            <input type="text" name = "Direccion" maxlength="30" required>
            <p class="datos">Población</p>
            <input type="text" name = "Poblacion" maxlength="30" required>
            <p class="datos">Código postal</p>
            <input type="number" name = "codigoPostal"maxlength="5" pattern= "^|d{5}$" required>
            <br>
            <input type="submit" name="login" value="Crear cuenta" id="button1" >
        </form>
    </div>
</body>
</html>
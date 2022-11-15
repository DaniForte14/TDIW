<form method="post" action='index.php?accio=register' class="formulario">
    <h1>Crear cuenta</h1>
    <label for="name">Nom</label>
    <input type="text" name="nom" required>
    <label for="email">Correu electrónic</label>
    <input type="email" name = "correu" required>
    <label for="password">Contrasenya</label>
    <input type="password" name="contrasenya" pattern="^[A-Za-z0-9]+$" required>
    <label for="address">Direcció</label>
    <input type="text" name = "Direccio" maxlength="30" required>
    <label for="poblacio">Població</label>
    <input type="text" name = "Poblacion" maxlength="30" required>
    <label for="cp">Codi postal</label>
    <input type="number" name = "codiPostal" maxlength="5" pattern= "^|d{5}$" required>
    <br>
    <input type="submit" name="login" value="Crear cuenta" id="button1" >
</form>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estils.css">
    <script src="js/jquery-3.3.1.min.js"></script>
</head>

<body>
    <header>
       <nav id="navbar">
           <div id="logo" class="imagen">
               <p>Logo</p>
           </div>
           <div id="menuJuegos">
               <p>Juego</p>
           </div>
           <div id="busqueda">
               <p>Barra de busqueda</p>
           </div>
           <div id="cuenta">
               <p>Cuenta</p>
               <a href="login.php"><input type="submit"></a>
           </div>
           <div id="carro" class="imagen">
               <p>Carro</p>
           </div>
       </nav>
    </header>
    <section id="fila1" class="juegos">
        <div id="magic">
            <img src="img/logo_magic.png"/>
        </div>
        <div>
            <img src="img/logo_pokemon.png"/>
        </div>
        <div>
            <img src="img/logo_yugioh.png"/>
        </div>
    </section>
    <section id="fila2" class="juegos">
        <div>
            <img src="img/logo_wow.png"/>
        </div>
        <div>
            <img src="img/logo_ff.png"/>
        </div>
        <div>
            <img src="img/logo_digimon.png"/>
        </div>
    </section>
</body>
</html>
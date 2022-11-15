<?php

    $nom = $_POST["NOM"];
    $correu = $_POST["EMAIL"];
    $password = $_POST["CONTRASENYA"];
    $direccio = $_POST["ADREÇA"];
    $poblacio = $_POST["POBLACIO"];
    $cp = $_POST["CODI_POSTAL"];
    include __DIR__ . '/../model/connectaBD.php';
    include __DIR__ . '/../model/usuari.php';

    $conn = connectaBD();
    if(Registra_usuari($conn, $nom, $correu, $password, $direccio, $poblacio, $cp))
    {
        include __DIR__ . '/../view/registre.php';
    }
    ?>

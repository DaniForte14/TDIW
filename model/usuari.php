<?php
function Registra_usuari($connexio, $nom, $correu, $password, $direccio, $poblacio, $cp){
        $sql="INSERT INTO usuaris (NOM,EMAIL,ADRECA,POBLACIO,CODI_POSTAL,PASSWORD)
values (?,?,?,?,?,?)";
        $consulta = $connexio->prepare($sql);
        $pwd = password_hash($password,PASSWORD_DEFAULT);
        $consulta->execute([$nom,$email,$direccio,$poblacio,$cp,$pwd]);
    $connexio=null;
    return true;
}
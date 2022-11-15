<?php


$email = $_POST["EMAIL"];
$pswd = $_POST["CONTRASENYA"];



include_once __DIR__ . '/../model/connectaBD.php';
include_once __DIR__ . '/../model/usuari.php';

$conn = connectaBD();

<?php
// index.php

$accio = isset($_GET['accio']) ? $_GET : NULL;
var_dump($accio);

switch ($accio) {
    case 'register':
        include __DIR__.'/resource_registre.php';
        break;
    default:
        include __DIR__.'/resource_categories.php';
        break;
}
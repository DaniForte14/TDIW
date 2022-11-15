<?php
function connectaBD()
{
    $dbName = "tdiw-f3";
    $dbUser = "tdiw-f3";
    $dbPassword = "uMT-pL87";
    $dbHost = "localhost";
    try {
        $conn = @pg_connect("host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword");
        if (!$conn) {
            throw new Exception("Database Connection Error");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return $conn;
}
<?php
$host='localhost';
$bd='acf2l';
$login='admin';
$password='sio';
    try
{
    $pdo = new PDO('mysql:host='.$host.';dbname='.$bd, $login, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
    catch (Exception $e) //Le catch est chargé d’intercepter une éventuelle erreur
{
    die ($e->getMessage());
}
    global $pdo;
?>
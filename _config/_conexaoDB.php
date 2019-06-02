<?php

try
{
    $conDB = new PDO("mysql:host=localhost;dbname=_bigtech_db", "root", "");
    $conDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conDB->exec("SET NAMES utf-8");
}
catch(PDOException $pdoex){
    echo "<p class='alert alert-warning>Não foi possivel conectar-se ao servidor!</p> ".$pdoex->getMessage();
}





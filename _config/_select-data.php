<?php

include_once('_conexaoDB.php');


//Seleção para montar checkbox de descricao
$stmt = $conDB->prepare("SELECT descricao FROM _tb_preco_tec");
$stmt->execute();
$data = $stmt->fetchAll();
<?php

    include('_conexaoDB.php');
    include('./cliente/insertClient');
    
    try
    {
        $stmt = $conDB->prepare("INSERT INTO _tb_bigtech_users (bg_nome, bg_user, bg_email, bg_senha, bg_confSenha) VALUES (?,?,?,?,?);");
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $usuario);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $senha);
        $stmt->bindParam(5, $confSenha);
        
        $stmt->execute();
        
    }
    catch (PDOException $insertError)
    {
        
    }
    


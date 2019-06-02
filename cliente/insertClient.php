<?php

include('../_config/_conexaoDB.php');

//Inclusão de usuários

    $nome      = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $usuario   = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $email     = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha     = sha1(md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING)));
    $confSenha = sha1(md5(filter_input(INPUT_POST, 'confSenha', FILTER_SANITIZE_STRING)));
    
    
 
    try
    {
        $stmt = $conDB->prepare("INSERT INTO _tb_bigtech_users (bg_nome, bg_user, bg_email, bg_senha, bg_confSenha) VALUES (?,?,?,?,?);");
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $usuario);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $senha);
        $stmt->bindParam(5, $confSenha);
        
        $stmt->execute();
        
        echo "Usuário inserido com sucesso ";
        
    }
    catch (PDOException $insertError)
    {
        echo "Erro ao inserir " .$insertError->getMessage();
    }
    
    
    //Inclusão dados completos do usuário
    
    
    //Inclusão de serviços
    
    
    //Inclusão dados aparelhos


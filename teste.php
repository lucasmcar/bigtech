<?php 
include('./_config/_select-data.php'); 
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php foreach($data as $val){?>
            
        <input type="checkbox"><?php echo $val['descricao'] ?><br>
        <?php }  ?>
    </body>
</html>

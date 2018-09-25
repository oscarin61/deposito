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
        <?php
        // put your code here
        if (isset($_POST['guarda'])){
            $cnx=new PDO("mysql:host=localhost;dbname=viernes", "root","");
            $codigo = $_POST['codigo']; 
            echo $codigo;
            $nombre = $_POST['nombre'];  
            echo $nombre;
            $prom = $_POST['prom'];  
            echo $prom;

            $sql = "INSERT INTO tabla1 (codigo, nombre, prom) VALUES (?,?,?)";
            $stmt= $cnx->prepare($sql);
            $stmt->execute([$codigo, $nombre, $prom]);
        }
        ?>
    </body>
</html>

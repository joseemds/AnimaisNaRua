<?php

        try {
            $dns = "mysql:dbname=db_animais;host=localhost;port=3306;charset=utf8;";
            $user = "root";
            $pass = "usbw";
            $pdo = new PDO($dns, $user, $pass);
        } catch (PDOException $e) {
            echo "Falha no Banco ". $e->getMessage();
        }

?>  
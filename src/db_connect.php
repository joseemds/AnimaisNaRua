<?php
    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $dbname = "db_animais";
    $port = 3306;

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

        $result = $conn -> query("select * from tb_animais");

        if ($conn->connect_errno) {
            echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
        }
        
        echo $conn->host_info . "\n";
?>  
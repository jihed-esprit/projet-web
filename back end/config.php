<?php

    function getConnexion () {
        $servername = 'localhost';	
        $username = 'root';	
        $password = '';       
        $dbname = 'projet1';	
        try {
            $pdo = new PDO(
                "mysql:host=$servername;dbname=$dbname", 
                $username, 
                $password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
            return $pdo;
            echo "connected successfully";
        }
        catch(PDOException $e) {
            echo "Connection failed: ". $e->getMessage();
        }
    }
?>
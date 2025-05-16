<?php
    $dsn = "mysql:host=localhost;dbname=study_stack_db";
    $user = "root";
    $password = "";

    try{
        $conn = new PDO($dsn, $user, $password);
    }catch(PDOException $e){
        echo "filed connection". $e->getMessage();
    }
?>
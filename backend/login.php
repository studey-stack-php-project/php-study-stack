<?php
require_once "../config.php";

header("Content-Type: application/json");
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data["user_name"], $data["password"])){
    try{
           $stmt = $conn->prepare( "SELECT * FROM user WHERE user_name = :user_name");
        
        $stmt->bindParam(":user_name", $data["user_name"]);
        $stmt->execute();
    
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        echo json_encode(["status" => "success"]);
        
    }catch(Exception $e){
        echo json_encode([
            "status" => "failed",
            "message" => $e->getMessage()
        ]);
    }
}else {
    echo json_encode([
        "status" => "failed", 
        "message" => "Missing or invalid data sent to server"
    ]);
}

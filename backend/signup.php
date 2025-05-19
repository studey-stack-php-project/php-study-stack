<?php
require_once "../config.php";

header("Content-Type: application/json");
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data["name"], $data["user_name"], $data["university"], $data["department"], $data["password"])) {
    try {

        $stmt = $conn->prepare("INSERT INTO user (name, user_name, university, department, password) VALUES (:name, :user_name, :university, :department, :password)");

        $stmt->bindParam(":name", $data["name"]);
        $stmt->bindParam(":user_name", $data["user_name"]);
        $stmt->bindParam(":university", $data["university"]);
        $stmt->bindParam(":department", $data["department"]);
        $hashedPassword = password_hash($data["password"], PASSWORD_DEFAULT);
        $stmt->bindParam(":password", $hashedPassword);

        $stmt->execute();

        echo json_encode(["status" => "success"]);
    } catch (Exception $e) {
        echo json_encode([
            "status" => "failed",
            "message" => $e->getMessage()
        ]);
    }
} else {
    echo json_encode([
        "status" => "failed", 
        "message" =>"البيانات المرسله الى الخادم غير صحيحة او مفقودة"
    ]);
}

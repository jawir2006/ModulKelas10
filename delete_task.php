<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    if ($data['action'] === 'delete') {
        $id = $data['id'];

        $stmt = $conn->prepare("DELETE FROM tugas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false, "message" => "Tugas tidak ditemukan."]);
        }

        $stmt->close();
    }
    $conn->close();
}
?>

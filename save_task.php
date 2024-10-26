 <?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task_text = $_POST['task_text'];
    $stmt = $conn->prepare("INSERT INTO tugas (task_text) VALUES (?)");
    $stmt->bind_param("s", $task_text);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    echo "<script>alert('Tugas kamu berhasil ditambahkan!'); window.location.href='index.php';</script>";
}
?>

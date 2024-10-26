<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM tugas WHERE id = $id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tugas</title>
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <h2>Edit Tugas</h2>
            <form action="update_task.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="text" name="task_text" value="<?php echo $row['task_text']; ?>" required>
                <button type="submit" class="btn">Update</button>
            </form>
            <button onclick="window.location.href='index.php'" class="btn">Kembali</button>
        </div>
    </div>
</body>

</html>

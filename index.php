<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengingat Tugas</title>
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="title-card">
            <h2>Lupa Sama Tugas? <br>
                Sini Aku Ingetin 😁</h2>
        </div>
        <div class="add-task-card">
            <button class="add-task-btn" onclick="window.location.href='tambah.php'">Tambah Tugas</button>
        </div>
        <div class="card-container">
            <?php
            include 'db.php';
            $result = $conn->query("SELECT * FROM tugas WHERE completed = 0");
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card'>
                        <h2>{$row['task_text']}</h2>
                        <p>Ayo Kerjakan Tugas Kamu!! <span class='monthTasks' data-month='tugas'></span></p>
                        <button onclick=\"window.location.href='edit.php?id={$row['id']}'\">Edit</button>
                        <button onclick=\"deleteTask({$row['id']})\">Delete</button>
                      </div>";
            }
            $conn->close();
            ?>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>

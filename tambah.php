<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tugas</title>
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <h2>Tambah Tugas Baru</h2>
            <form action="save_task.php" method="POST">
                <input type="text" name="task_text" placeholder="Masukkan tugas baru" required>
                <button type="submit" class="btn">Simpan</button>
            </form>
            <button onclick="window.location.href='index.php'" class="btn">Kembali</button>
        </div>
    </div>
</body>

</html>

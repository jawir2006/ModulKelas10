// Fungsi untuk mengedit tugas
const editTask = (taskId) => {
    const newTaskText = prompt("Edit tugas:");
    if (newTaskText) {
        fetch('update_task.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ id: taskId, task_text: newTaskText }),
        })
            .then(response => response.json())
            .then(data => {
                console.log('Updated:', data);
                loadTasks(); // Reload tasks after updating
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
};

// Fungsi untuk menghapus tugas
const deleteTask = (taskId) => {
    fetch('delete_task.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ id: taskId, action: 'delete' }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Tugas telah dihapus.');
                console.log('Deleted:', data);
                loadTasks(); // Reload tasks after deleting
            } else {
                alert('Gagal menghapus tugas: ' + data.message);
            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });
};

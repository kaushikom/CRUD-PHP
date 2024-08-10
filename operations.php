<?php

// Update todo name
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rename_id'])) {
    $rename_id = $_POST['rename_id'];
    $new_name = $_POST['new_name'];
    $new_name = trim($new_name);

    if ($new_name != '') {
        // Update todo name in the database
        $update_sql = "UPDATE todos SET todo_name = ? WHERE id = ?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("si", $new_name, $rename_id);
        $stmt->execute();
        $stmt->close();
    }
}

// Delete todo
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_id"])) {
    $delete_id = $_POST["delete_id"];
    $delete_sql = "DELETE from todos where id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    $stmt->close();
}

// Update status
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['status_id'])) {
    $status_id = $_POST['status_id'];
    $new_status = $_POST['new_status'];

    $update_sql = "UPDATE todos SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("ii", $new_status, $status_id);
    $stmt->execute();
    $stmt->close();
}
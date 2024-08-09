<?php

$todoname = '';
$checked = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['submit'])) {

        $todoname = $_POST['todo-name'];
        $todoname = trim($todoname);
        if ($todoname != '') {
            $sql = "INSERT INTO todos (todo_name, status) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $todoname, $checked);

            $stmt->execute();
            $stmt->close();
        }
    }
}

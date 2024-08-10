<?php

$todoname = '';
$checked = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['submit'])) {
        $todoname = $_POST['todo-name'];
        $todoname = trim($todoname);

        if ($todoname != '') {
            $check_sql = "SELECT * FROM todos WHERE todo_name = ?";
            $stmt = $conn->prepare($check_sql);
            $stmt->bind_param('s', $todoname);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 0) {
                $sql = "INSERT INTO todos (todo_name, status) VALUES (?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $todoname, $checked);

                $stmt->execute();
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your task is successfully added.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
                $stmt->close();

            } else {
                echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Failed!</strong> Task already exists.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
            }
        }
    }
}

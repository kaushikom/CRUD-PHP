<?php
include ("operations.php");
?>

<html>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Task</th>
                <th scope="col">Status</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $sql = "SELECT * from todos";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th scope=\"row\">" . $row["id"] . "</th>";
                    echo "<td>" . $row["todo_name"] . "</td>";

                    // Status Checkbox
                    $checked = $row["status"] == 1 ? "checked" : "";
                    echo "<td>";
                    echo "<form method=\"POST\" id=\"status-form-" . $row["id"] . "\">";
                    echo "<input type=\"hidden\" name=\"status_id\" value=\"" . $row["id"] . "\">";
                    echo "<input type=\"hidden\" name=\"new_status\" value=\"" . ($row["status"] == 1 ? 0 : 1) . "\">";
                    echo "<input class=\"form-check-input\" type=\"checkbox\" " . $checked . " onclick=\"document.getElementById('status-form-" . $row["id"] . "').submit();\">";
                    echo "</form>";
                    echo "</td>";

                    // Delete Button
                    echo "<td>";
                    echo "<form method=\"POST\" style=\"display:inline-block;\">";
                    echo "<input type=\"hidden\" name=\"delete_id\" value=\"" . $row["id"] . "\">";
                    echo "<button class=\"btn btn-secondary\">Delete</button>";
                    echo "</form>";

                    // Rename Button and Form
                    echo "<form method=\"POST\" style=\"display:inline-block; margin-left: 10px;\">";
                    echo "<input type=\"hidden\" name=\"rename_id\" value=\"" . $row["id"] . "\">";
                    echo "<input type=\"text\" name=\"new_name\" placeholder=\"Rename todo\" class=\"form-control\" style=\"display:inline-block; width:auto;\">";
                    echo "<button class=\"btn btn-primary mx-2\">Rename</button>";
                    echo "</form>";

                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
            ?>

        </tbody>
    </table>
</body>

</html>
<?php
include ("connection.php");
include ("addnewtodo.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h3 class="text-center my-4">Todos</h3>
    <div class="d-flex justify-content-center">
        <!-- Add todo form -->
        <form action="" class="input-group" method='post'>
            <input type="text" class="form-control no-focus-outline" name="todo-name" placeholder="Enter your todo">
            <button name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Display todos table -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <?php include ("displaytodos.php"); ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
<?php

    require '../php/createTask.php';

    if(isset($_POST['submit'])) {
        createTask($_POST);
        header('Location: ../../index.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Add Task</title>
</head>
<body>
    
    <div class="container">
    <form action="addTask.php" method="POST">
        <div class="form-group">
            <label for="username">Enter username:</label>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label for="task">Enter task:</label>
            <input type="text" name="task" required>
        </div>
        <div class="form-group">
            <label for="due-date">Enter due date:</label>
            <input type="date" name="due-date">
        </div>
        <div class="form-group">
            <label for="priority">Enter priority:</label>
            <select name="priority" id="priority" required>
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>

        <input type="submit" name="submit" value="Add task">
    </form>
    <a href="../../index.php">Go home</a>
    </div>
    
</body>
</html>
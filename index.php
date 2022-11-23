<?php

    require './config/connect.php';
    require './src/php/deleteTask.php';
    require './src/php/fetchTasks.php';

    $allTasks = fetchTasks($conn);

    if(isset($_POST['submit'])) {
        deleteTask(14, $conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/style/style.css">
    <title>Todo App</title>
</head>
<body>
    <div class="container">
    <?php require './src/templates/header.php'; ?>
    <table class="table table-striped">
        <tr>
           <th scope="col">Task</th>
           <th scope="col">User</th> 
           <th scope="col">Due date</th> 
           <th scope="col">Priority</th> 
        </tr>
        <?php foreach($allTasks as $task): ?>
            <tr>
                <td><?php echo $task['task_name'] ?></td>
                <td><?php echo $task['username'] ?></td>
                <td><?php echo $task['due_date'] ?></td>
                <td><?php echo $task['priority'] ?></td>
                <td></td>
            </tr>
        <?php endforeach; ?>
    </table>
        <a href="./src/views/addTask.php">Add a new task</a>
    </div>

</body>
</html>
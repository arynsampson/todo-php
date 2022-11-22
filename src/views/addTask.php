<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
</head>
<body>
    
    <form action="addTask.php" method="POST">
        <div>
            <label for="username">Enter username:</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="task">Enter task:</label>
            <input type="text" name="task">
        </div>
        <div>
            <label for="due-date">Enter due date:</label>
            <input type="text" name="due-date">
        </div>
        <div>
            <label for="priority">Enter priority:</label>
            <select name="priority" id="priority">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
    </form>

</body>
</html>
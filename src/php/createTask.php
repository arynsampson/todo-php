<?php
    require_once '../../config/connect.php';

    session_start();

    function createTask($inputData) {
        global $conn;

        $username = mysqli_real_escape_string($conn, $inputData['username']);
        $task = mysqli_real_escape_string($conn, $inputData['task']);
        $dueDate = date(($inputData['due-date']));
        $priority = (int)$inputData['priority'];
        $isCompleted = false;

        $sql = "INSERT INTO tasks (username, task_name, due_date, priority, is_completed) VALUES ('$username', '$task', '$dueDate' , '$priority', '$isCompleted');";

        mysqli_query($conn, $sql);
    }
?>
<?php
    require_once '../../config/connect.php';

    session_start();

    function createTask() {
        $username = $_SESSION['username'];
        $task_name = $_SESSION['task_name'];
        $due_date = $_SESSION['due_date'];
        $priority = $_SESSION['priority'];

        $query = "INSERT INTO tasks (username, task_name, due_date, priority) VALUES ($userame, $task_name, $due_date, $priority)";

        $conn->query($query);
    }
?>
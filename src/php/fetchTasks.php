<?php
    require_once '../../config/connect.php';

    session_start();

    function fetchTasks() {
        $query = "SELECT username, task_name, due_date, priority FROM tasks";
        $result = $conn->query($query);
        $tasks = my_sqli_fetch_all($result, MYSQLI_ASSOC);
        return $tasks;
        //$_SESSION['tasks'] = $tasks;
    }
?>
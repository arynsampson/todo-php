<?php
    session_start();

    function fetchTasks($conn) {
        $query = "SELECT username, task_name, due_date, priority FROM tasks";
        
        // change to procedural style
        $result = $conn->query($query);
        $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $tasks;
    }
?>
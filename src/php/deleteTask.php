<?php
    require_once '../../config/connect.php';

    session_start();

    function deleteTask() {
        $id = $_SESSION['task_id'];
        $query = "DELETE FROM tasks WHERE tasks.id = $id";
        $conn->query($query);
    }
?>
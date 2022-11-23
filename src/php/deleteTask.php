<?php

    require './config/connect.php';

    function deleteTask($taskId) {
        $id = $taskId;
        $sql = "DELETE FROM tasks WHERE id='$id';";
        
        mysqli_query($conn, $sql);
    }
?>
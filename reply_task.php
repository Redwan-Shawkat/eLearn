<?php
include_once "config.php";
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$connection) {
    throw new Exception("connection failed");
} else {
    $action = $_POST['action'] ?? '';
    if (!$action) {
        header("Location:index.php");
        die();
    } else {
        // $title = $_POST['title'];
        // $date = $_POST['time'];
        $reply= $_POST['reply'];
        if ($reply) {
            $query = "INSERT INTO addtodo(reply) VALUES ('{$reply}' )";
            $result = mysqli_query($connection, $query);
            header('location:todoShowreply.php');
        }
    }
}

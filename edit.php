<?php
    session_start();
    if (empty($_SESSION['id'])) {
        header("location: login.php?status=notlogin");
    }
    $edit=$_POST['id'];
    $status=strtoupper($_POST['status']);
    $connect = new mysqli('localhost', 'root', '', 'sao');
    $query = mysqli_query($connect, "UPDATE donasi SET status='$status' WHERE id=$edit");
    if($query){
        header("location: admin.php");
    }
?>
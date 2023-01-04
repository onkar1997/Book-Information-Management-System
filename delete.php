<?php

    include 'config.php';

    $id = $_GET['id'];

    $delete_query = "delete from `users` where id = $id";

    mysqli_query($conn, $delete_query);

    header('location:index.php');

?>
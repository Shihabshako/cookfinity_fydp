<?php
    require_once('../../functions.php');
    $id = $_GET['id'];
    $query = "DELETE FROM meals WHERE id = $id";

    if(mysqli_query($con, $query)){
        $_SESSION['delete_meal'] = 'success';
        header('location: ../?page=my_meals');
    }else{
        $_SESSION['delete_meal'] = 'error';
        header('location: ../?page=my_meals');
    }
?>
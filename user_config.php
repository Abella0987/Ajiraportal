<?php
include("config.php");
if (isset($_POST['add'])){
    $activity = $_POST['activity'];
    $sql = "INSERT INTO to_do (activity) VALUES ('$activity')";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["add"] = "Activity Created Successfully";
        header("Location: user_page.php");
    }else{
        die("Something went wrong" . mysqli_error($conn));
    }        
}

if (isset($_POST['edit'])){
    $activity = $_POST['activity'];
    $sql = "UPDATE books SET title = '$title', author = '$author', type = '$type', description = '$description' WHERE id = '$id' ";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["add"] = "Activity Created Successfully";
        header("Location: user_page.php");
    }else{
        die("Something went wrong" . mysqli_error($conn));
    }        
}

if (isset($_POST['add'])){
    $activity = $_POST['activity'];
    $sql = "INSERT INTO to_do (activity) VALUES ('$activity')";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["add"] = "Activity Created Successfully";
        header("Location: user_page.php");
    }else{
        die("Something went wrong" . mysqli_error($conn));
    }        
}

?>

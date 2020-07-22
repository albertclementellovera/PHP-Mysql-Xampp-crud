<?php

include("db.php");

if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    //echo $title;
    
    $query = "INSERT INTO task(title,description) VALUES ('$title','$description')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query failed");
    }
    //echo 'saved';
    $_SESSION['message'] = 'Task saved succesfully';
    //$_SESSION['message_type'] = 'succes'; // color verde en bustrap
    $_SESSION['message_type'] = 'danger'; // color rojo de bustrap  
    header("Location: index.php");
}
?>
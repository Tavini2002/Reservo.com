<?php
include 'db_connection.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
   
    $query = "insert into feedback (name, email, message) values ('$name', '$email', '$message')";
    $result = mysqli_query($conn,$query);

    if($result){
        echo "Data inserted successfully";
    }else{
        die(mysqli_error($conn));
    }
}
<?php
include 'db_connection.php';
if(isset($_POST['submit']))
{
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $email = $_POST['email'];
    $phoneNo = $_POST['phoneNo'];
    $gender =  $_POST['gender'];

    $sql = "insert into userinfo (fullname,username,password,confirmPassword,email,phoneNo,gender)
    values ('$fullname','$username','$password','$confirmPassword','$email','$phoneNo','$gender')";
    
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Data inserted successfully";
    }else{
        die(mysqli_error($conn));
    }
}
?>
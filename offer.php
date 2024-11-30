<?php
 include 'db_connection.php';
if(isset($_POST['submit'])){

    $offerNo = $_POST['number'];
    $vip = $_POST['vip'];
    $category = $_POST['category'];
    $type = $_POST['type'];
    $minimum = $_POST['mini'];
    $maximum =  $_POST['maxi'];

    $sql = "insert into offer (id,isVIP,category,type,minPrice,maxPrice)
    values ('$offerNo','$vip','$category','$type','$minimum','$maximum')";
    
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Data inserted successfully";
    }else{
        die(mysqli_error($con));
    }
}
?>
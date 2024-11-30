<?php

$conn = mysqli_connect("localhost", "root", "", "paymentsite");

if (!$conn) {
    echo "Connection failed!";
}

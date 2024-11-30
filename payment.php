<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'payment':
            echo $_POST['formData'];
            payment($_POST['formData']);
            break;
    }
}

function payment($data)
{
    include 'db_connection.php';
    $query = "INSERT INTO payment(cardHolderName, cardNumber, cardCVV, year, month) VALUES('"
        . $data['cardHolderName']  .  "','"
        . $data['cardNumber']  .  "','"
        . $data['cardCVV']  .  "','"
        . $data['year']  .  "','"
        . $data['month']  .  "'"
        . ")";

    $result = mysqli_query($conn, $query);
}

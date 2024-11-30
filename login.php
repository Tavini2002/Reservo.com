<?php
      include 'db_connection.php';
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "select id from userinfo where username='$username' and password='$password'";
        $result = mysqli_query($conn,$query);

        if($result){
          if (mysqli_num_rows($result) == 1) {
            echo '<p>Login successful!</p>';
          } else {
            echo '<p class="error">Invalid username or password.</p>';
          }
        }else{
            die(mysqli_error($conn));
        }
      }
      ?>
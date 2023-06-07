<?php
  session_start();
  $id = $_POST['id'];
  $pw = $_POST['pw'];

  $con = mysqli_connect("localhost","root","","mysql");

  $query = "select * from userinfo where id='$id' AND pw='$pw';";

  $result = $con->query($query);
  $row = $result->fetch_array(MYSQLI_ASSOC);

  if ($row != null) {
    echo "<script>location.replace('main.php');</script>";
    exit;
  }

  if($row == null){       
    echo "<script>alert('Invalid username or password')</script>";
    echo "<script>location.replace('login.php');</script>";
    exit;
  }
?>

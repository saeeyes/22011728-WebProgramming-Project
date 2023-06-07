<?php
$id = $_POST['id'];
$pw = $_POST['pw']; 
$name = $_POST['name'];
$email = $_POST['email'];

$con = mysqli_connect("localhost","root","","mysql");

$query = "insert into userinfo(id,pw,name,email) values ('".$id."','".$pw."','".$name."','".$email."');";
$result = mysqli_query($con,$query);

?>
<script>alert('Membership registration completed!'); location.href="Login.php"</script>
<?php
$con=mysqli_connect("localhost","root","sakiba","or");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$n='admin';
$p=1234;  
  
if($_POST['name']==$n && $_POST['password']==$p) {
header('Location:adminlogin.php');
}
else echo "Wrong ID or Password";

?>
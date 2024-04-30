<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

$conn=mysqli_connect('localhost','root','','formvalidation');
$query="select* from userr where email='$email' and password='$password'";

$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)>0){
	$_SESSION['email'] =$email;
	
	header("location:validationhome.php");
}
else{
	header("location:validationlogin.php?error='wrong Email or Password'");
}

?>

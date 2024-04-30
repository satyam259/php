<?php

$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];


$conn=mysqli_connect('localhost','root','','formvalidation');
$query="update userr set firstname='$firstname',lastname='$lastname',dob='$dob',
address='$address',phone='$phone',email='$email',password='$password' where id='$id'";
           
if(mysqli_query($conn, $query)){
   header("location:validationview.php");
}
else{
	echo"error";
	}

?>
<?php
if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];
    $conn =mysqli_connect('localhost' ,'root','','formvalidation');
	$query= "delete from userr where id = '$id'";
    mysqli_query($conn ,$query);
    header("location:validationview.php");

}


?>
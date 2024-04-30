<?php

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];  
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost' ,'root','','formvalidation');
    	
   $queryread = "select * from userr where email ='$email'";

    $res = mysqli_query($conn ,$queryread);

    if(mysqli_num_rows($res)>0){
        header("location:validationform.php?error=email already exist");
    }
    else
    {

		
    $query= "insert into userr VALUES('','$firstname', '$lastname', '$dob', '$address', '$phone', '$email', '$password')";

    if(mysqli_query($conn , $query))
    {

        header("location:validationview.php");
    }
else{
        echo "error found";
    }
} 

    ?>
    
    <p>Click Here -> Enter your valid Email and Password!<a href="validationlogin.php"><h5>Login</a></p>
		
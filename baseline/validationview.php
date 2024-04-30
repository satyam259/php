<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Information</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
		background-color: lightyellow;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
	/* CSS for Add data link */
a {
    text-decoration: none;
    background-color: #a3e63f;
    color: white;
    padding: 08px 10px;
    border-radius: 4px;
}

a:hover {
    background-color: #7db680;
}

</style>
</head>
<body>

<?Php

	$conn =mysqli_connect('localhost' ,'root','','formvalidation');
	$query= "select * from userr";
	$res =mysqli_query($conn ,$query);
    echo "<table border=1px >
			<tr>
				<td> First Name </td>
				<td> Last Name </td>
				<td> DOB </td>
				<td> Address </td>
				<td> Phone </td>
				<td> Email </td>
				<td> Password </td>
				<td>Action</td>
			</tr>";
	if(mysqli_num_rows($res) > 0){
     while($row =mysqli_fetch_array($res)){

		echo "<tr>
				<td>".$row['firstname']."</td>
				<td> ".$row['lastname']."</td>
				<td> ".$row['dob']."</td>
				<td> ".$row['address']."</td>
				<td> ".$row['phone']." </td>
				<td> ".$row['email']."</td>
				<td> ".$row['password']."</td>
				<td>
				<a href=delete.php?id=".$row['id']." > Delete</a>
				<a href=validationupdate.php?updateid=".$row['id']." > Update</a>
				</td>
			</tr>";
         
	   
		}
	}
	
	else{
			echo "<h4>No Record Found</h4>";
		}


?>
<center>
<h1 >Form validation</h1></center>
<a href="validationform.php"> Add data </a>

<?php
if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];
$conn=mysqli_connect('localhost','root','','formvalidation');

$query="select* from userr where id='$id'";
echo "<form action=validationupdate3.php method=post>";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_array($res)){
		
		echo" <input type=text name=id value=".$row['id']."><br>";
		echo "<input type=text name=firstname value=".$row['firstname']."><br>";
        echo"<input type=text name=lastname value=".$row['lastname']."><br>";
        echo"<input type=text name=dob value=".$row['dob']."><br>";
        echo"<input type=text name=address value=".$row['address']."><br>";
        echo"<input type=text name=phone value=".$row['phone']."><br>";
		echo"<input type=text name=email value=".$row['email']."><br>";
		echo"<input type=text name=password value=".$row['password']."><br>";
		
		echo"<input type='submit'>
		</form>";
	}
}
}
?>
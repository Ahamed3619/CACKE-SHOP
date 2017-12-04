<?php include'connection.php';?>

<?php
if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$query="INSERT INTO projects(name,email,password) VALUES('$name','$email','$password')";
	
		$result= mysqli_query($conn,$query);
	if($result){
		header("location: after_register.php");
		}
		else{
			echo "Please Sign_Up".$query."<br>",$conn->error;
		}

		mysqli_close($conn);
}




?>



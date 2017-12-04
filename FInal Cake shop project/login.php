<?php include'connection.php';?>

<?php
if(isset($_POST['submit'])){
	
	$email=$_POST['email'];

	$password=$_POST['password'];

    $query ="SELECT email FROM projects WHERE email = '$email' and password = '$password' ";

    $result = mysqli_query($conn,$query) ;
	
    if($row = $result->fetch_assoc()){
    	 header("location: after_register.php");
		
    }
    else{
		 echo '<script type="text/javascript">alert("NOT REGISTERED.");</script>';
		 
    }
}

$conn->close();
?>



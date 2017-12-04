<?php

$servername=$_SERVER['SERVER_NAME'];
$username="root";
$password="";
$dbname="varsity";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn){
	//echo"connected successfully";
}
else{
	echo"connected not successfull" .mysqli_connect_error();
}

?>
<?php
$servername="localhost";
$username="root";
$password ="";
$database_name= "webcreintors";

// $con = new mysqli('localhost','root','','crud');
$conn = new mysqli($servername,$username,$password,$database_name);


if($conn->connect_error){	


		die("connection Failed".$conn->connect_error);

	}
	echo "";
?>
<?php include 'connect.php'
?>
<?php
 
$id='';
$name='';
$phone_number='';
$email='';
$message='';

// if($_SERVER["Request_Method"]=='GET'){
	if(isset($_GET['id'])){
		// header("location:curd21/index.php");
		// exit;
	
        $id= $_GET['id'];
	$query="SELECT * FROM `contact` WHERE `id`=$id";
	$res=$conn->query($query);
	$row= $res->fetch_assoc();
	// while(!$row){
	// 	header("location:curd21/index.php");
	// 	exit;

	

	 $name=$row['name'];
  	$phone_number=$row['phone_number'];
  	$email=$row['email'];
  	$message=$row['message'];

}
// else{
// 	 	$id= $_POST['id'];
// 	 	$name= $_POST['name'];
// 	 	$email= $_POST['email'];
// 	  	$phone= $_POST['phone'];
// 	  	$password= $_POST['password'];

// }

// if(isset($_GET['variable']['submit'])){
 

 $sql="UPDATE contact SET `name`='$name', `phone_number`='$phone_number', `email`='$email', `message`='$message' WHERE `id`=1";

$result=$conn->query($sql);

// $result=$conn->query($sql);


if($conn->query($sql) === TRUE) {
  echo "New record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// $conn->close();
?>
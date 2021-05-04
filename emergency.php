<?php 
	$username = "root";
	$password = "";
	$servername = "localhost";
	$dbname = "test";
	
	$con = mysqli_connect($servername,$username,$password,$dbname) or die("\n Connection Failed !" . $con->connect_error);

	list($lat,$lag) = explode(":",$_POST['str']);

	$sql = "INSERT INTO `sagar`(`fname`, `sname`) VALUES ('$lat','$lag')";
	$result = $con->query($sql);

	if ($result){
		echo "SOS alert activated";
	}
	else{
		echo "failed";
	}
?>
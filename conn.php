<?php

session_start();
$username="";
$emailid="";
$password="";
$confirmpass="";
$firstname="";
$lastname="";
$address="";
$phoneno="";
$gender="";
$bday="";
$country="";



//connect to database
$db = mysqli_connect('localhost','root','','regi');
if($db->connect_error){
	die("connection failed:" .$db);
}
else{
	echo "connection suceessfully";
}

//if submit button is clicked
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$emailid = $_POST['emailid'];
	$password = $_POST['password'];
	$confirmpass = $_POST['confirmpass'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$phoneno = $_POST['phoneno'];
	$gender = $_POST['gender'];
	$bday = $_POST['bday'];
	$country = $_POST['country'];
	

	$query = "INSERT INTO regiform(username, email_id, password, confirm_pass, first_name, last_name, address, phone_no, gender, birth_date, country)VALUES('$username', '$emailid', '$password', '$confirmpass', '$firstname', '$lastname', '$address', '$phoneno', '$gender', '$bday', '$country')";


	if(mysqli_query($db, $query)===true)

	{
		echo "success";

	}
	else {

	 	echo "failed". $query. "error:" . $db->error; 
	 } 
	
	header('Location:index.php');
}

?>

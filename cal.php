<?php require 'data.php';

$parent = $_POST['parent'];
$email = $_POST['email'];
$student = $_POST['student'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$contact = $_POST['contact'];
$receive = $_POST['receive'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];

$sql = "INSERT INTO  student(pname, email, sname, sgender, sbirthday, contact, mesgg, addr, city, zipcode)
VALUES ('$parent', '$email', '$student', '$gender', '$birthday', '$contact', '$receive', '$address', '$city', '$zip')";

$result = $conn->query($sql); 

if($result == true){
	header("location:view.php");
}else{
	echo "error generated";
}

$conn->close();

 
?>
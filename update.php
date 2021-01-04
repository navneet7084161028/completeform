<?php require 'data.php';

$sid = $_POST['id'];
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
// print_r($_POST); die;


$sql = "UPDATE student SET pname = '{$parent}', email = '{$email}', 
			sname = '{$student}', sgender = '{$gender}', sbirthday = '{$birthday}',
			contact = '{$contact}', mesgg = '{$receive}', addr = '{$address}', city = '{$city}',
			zipcode = '{$zip}'	WHERE id = {$sid}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessfull.");

header("Location: view.php");
mysqli_close($conn);

?>
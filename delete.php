<?php 
require 'data.php';

$del = $_GET['id'];
// echo $s;

$sql = "DELETE FROM student WHERE id=$del";

if($conn->query($sql)==true){
	header("location:view.php");
}else{
	echo "error generated";
}

$conn->close();

?>
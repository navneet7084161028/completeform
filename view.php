<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Display data</title>
    <style>
        .table{
            font-size:15px;
            
        }
        th{
            font-size:18px;
        }
    </style>
</head>
<body>
<div class="conatiner">
		<table class="table" style="background-color: pink;">

        <?php  require 'header.php'; 
                require 'data.php';
        $sql = " select * from student ";
        $result = $conn->query($sql);
        ?>
<thead>
<tr>
	<th>ParentName</th>
    <th>Email</th>
    <th>StudentName</th>
    <th>StudentGender</th>
    <th>StudentBirthday</th>
    <th>Contact</th>
    <th>Message</th>
    <th>Address</th>
    <th>City</th>
    <th>ZipCode</th>
    <th>Edit</th>
    <!-- <th>Update</th> -->
    <th>Delete</th>
</tr>
</thead>

<?php 
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 ?>
<tr>
<td> <?php echo $row["id"] ?></td> 
   <td> <?php echo $row["pname"]  ?></td>
    <td> <?php echo $row["email"] ?></td>
     <td> <?php echo  $row["sname"] ?></td>
      <td> <?php echo   $row["sgender"] ?></td>
      <td> <?php echo   $row["sbirthday"] ?></td>
      <td> <?php echo   $row["contact"] ?></td>
      <td> <?php echo   $row["mesgg"] ?></td>
      <td> <?php echo   $row["addr"] ?></td>
      <td> <?php echo   $row["city"] ?></td>
      <td> <?php echo   $row["zipcode"] ?></td>
      <td><button class="btn-info btn"><a href="edit.php?id=<?php echo $row["id"] ?>" class="text-white">Edit</a></button></td>
      <td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $row["id"] ?>" class="text-white">Delete</a></button></td>
      </tr>
   <?php
  }
} 
else {
  echo "0 results";
}
$conn->close();

?>
</table>
</body>
</html>


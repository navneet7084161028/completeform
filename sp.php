<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            /* background-color: rgb(205, 173, 235); */
        }
        .container{
            margin: auto;
            width: 50%;
            /* background-color: pink; */
            text-align: center;
            margin-top: 10%;
            border: 1px solid blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST">
            <label>Number:</label>
            <input type="number" name="num" /><br><br>

            <label>FirstName:</label>
            <input type="text" name="first" /><br><br>

            <label>LastName:</label>
            <input type="text" name="last" /><br><br>

            <label>Email:</label>
            <input type="text" name="email" /><br><br>
            <input type="submit" value="submit" name="submitt">
        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['submitt'])){
   $number = $_POST['num'];
   $first = $_POST['first'];
   $last = $_POST['last'];
   $email = $_POST['email']; 

   echo "<br>The value is: ".$number;
   echo "<br>The value is: ".$first;
   echo "<br>The value is: ".$last;
   echo "<br>The value is: ".$email;


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn-> connect_error){
die("connection failed: ".$conn-> connect_error);
}
echo "<br>connected successfully";

$sql = "INSERT INTO  register(num,fname, lname, email)
VALUES ('$number','$first', '$last', '$email')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>


<h2>Preschool Package Registration Form</h2>
    <div class="container" style="border-radius: 8px;">
        <form id="login" style="margin-top: 3%;" action="update" method="POST">
            <table>
                <tr>  
                    <td> <label>ParentName<span> *</span></label></td>
                    <td><input type="text" name="parent" value="<?php echo $row["pname"]  ?>" /><br><br></td>
                </tr>
                <tr>
                    <td><label>EmailAddress<span> *</span></label></td>
                    <td><input type="text" name="email" value=" <?php echo $row["email"] ?>" /><br><br></td>
                </tr>

                <tr>
                    <td><label>StudentName<span> *</span></label></td>
                    <td><input type="text" name="student" value="<?php echo  $row["sname"] ?>" /><br><br></td>
                </tr>

                <tr>
                    <td><label>StudentGender<span> *</span></label></td>
                    <td><input type="radio" id="male" name="gender" value="male" value="female"<?php echo $row['sgender'] == 'male'? 'checked':"";?>>Male<br>
                    <input type="radio" id="female" name="gender" value="female" value="male" <?php echo $row['sgender'] == 'female'? 'checked':"";?>>Female<br><br></td>
                </tr>

                <tr>
                    <td><label>StudentBirthday<span> *</span></label></td>
                    <td><input type="text" name="birthday" value=" <?php echo   $row["sbirthday"] ?>"><br><br></td>
                </tr>

                <tr>
                    <td><label>ContactNumber<span> *</span></label></td>
                    <td><input type="text" name="contact" value="<?php echo   $row["contact"] ?>"><br><br></td>
                </tr>

                <tr>
                    <td><label>Do you receive text on<br> this number<span> *</span></label></td>
                    <td><input type="radio" name="receive" value="yes" value="no" <?php echo $row['mesgg'] == 'yes'? 'checked':"";?>>Yes<br>
                    <input type="radio" name="receive" value="no" value="yes" <?php echo $row['mesgg'] == 'no'? 'checked':"";?>>No<br><br></td>
                </tr>

                <tr>
                    <td><label>Address<span> *</span></label></td>
                    <td><input type="text" name="address" value="<?php echo   $row["addr"] ?>" /><br><br></td>
                </tr>

                <tr>
                    <td><label>City<span> *</span></label></td>
                    <td><input type="text" name="city" value="<?php echo   $row["city"] ?>" /><br><br></td>
                </tr>

                <tr>
                    <td><label>ZipCode<span> *</span></label></td>
                    <td> <input type="text" name="zip" value=" <?php echo   $row["zipcode"] ?>" /><br><br></td>
                </tr>

                <tr>
                    <td><input type="submit" value="submit" name="submit"></td>
                </tr>
            
            </table>
        </form>
        <?php
        
    }
        $conn->close();

        ?>
    </div>
</body>
</html>
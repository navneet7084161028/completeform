<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Home Page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            /* background-color: rgb(205, 173, 235); */
            background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container{
            margin: auto;
            background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
            width: 40%;
            text-align: center;
            margin-top: 3%;
            margin: auto;
        }
        h2{
            text-align: center;
            font-weight: bolder;
            font-size: 40px;

        }
        input[type=text]{
            color: black;
            font-size:20px;
            background-color: bisque;
            width: 100%;
            height: 35px;
            border-radius: 10px;
        }
        label{
            font-size: 20px;
        }
        input[type=submit]{
            width: 50%;
            height: 30px;
            background-color: crimson;
            font-size: 20px;
            color: white;
            border-radius: 10px;
           margin-left: 70%;
        }
        span{
            color: red;
        }
    </style>
</head>
<body>
<h2>Preschool Package Registration Form</h2>
    <div class="container" style="border-radius: 8px;">
        <form id="login" style="margin-top: 3%;" method="POST" action="cal.php">
            <table>
                <tr>  
                    <td><label>ParentName<span> *</span></label></td>
                    <td><input type="text" name="parent" /><br><br></td>
                </tr>
                <tr>
                    <td><label>EmailAddress<span> *</span></label></td>
                    <td><input type="text" name="email" /><br><br></td>
                </tr>

                <tr>
                    <td><label>StudentName<span> *</span></label></td>
                    <td><input type="text" name="student" /><br><br></td>
                </tr>

                <tr>
                    <td><label>StudentGender<span> *</span></label></td>
                    <td><input type="radio" id="male" name="gender" value="male">Male<br>
                    <input type="radio" id="female" name="gender" value="female">Female<br><br></td>
                </tr>

                <tr>
                    <td><label>StudentBirthday<span> *</span></label></td>
                    <td><input type="text" name="birthday"><br><br></td>
                </tr>

                <tr>
                    <td><label>ContactNumber<span> *</span></label></td>
                    <td><input type="text" name="contact"><br><br></td>
                </tr>

                <tr>
                    <td><label>Do you receive text on<br> this number<span> *</span></label></td>
                    <td><input type="radio" name="receive" value="yes">Yes<br>
                    <input type="radio" name="receive" value="no">No<br><br></td>
                </tr>

                <tr>
                    <td><label>Address<span> *</span></label></td>
                    <td><input type="text" name="address" /><br><br></td>
                </tr>

                <tr>
                    <td><label>City<span> *</span></label></td>
                    <td><input type="text" name="city" /><br><br></td>
                </tr>

                <tr>
                    <td><label>ZipCode<span> *</span></label></td>
                    <td> <input type="text" name="zip" /><br><br></td>
                </tr>

                <tr>
                    <td><input type="submit" value="submit" name="submit"></td>
                </tr>
            
            </table>
        </form>
    </div>
</body>
</html>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#login').submit(function(e){
			e.preventDefault();
			$.ajax({
				type:'POST',
				url:'cal.php',
				data:$('#login').serialize(),
				success:function(data){
					console.log(data);
					// $('#result').html(data);
                // window.location.href = "location:view.php";
				}
			});
		});
	});
</script> -->

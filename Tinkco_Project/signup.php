<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "<font color='white'>Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: black;
		border: none;
	}

	#box{
		align-items: center;
		top: 50%;
		nav-down:50%;
		background-color: transparent;
		margin: auto;
		width: 300px;
		padding: 30px 40px;
		color: #fff;
		border-radius: 12px;
		backdrop-filter: blur(9px);
		border: 2px solid rgba(255, 255, 255, .2);
	}
	body{
		background-image: url('2.jpg');
		justify-content: right;
		height: 100vh;
		background-size: cover;
		background-position: center;
	}
	header{
		font-size: 2cm;
		color:#fff;
	}

	a{
		color: red;
		font-style: italic;
		font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
	}

	</style>

	<header align="center">TINKCO</header><br>
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="username"><br><br>
			<input id="text" type="password" name="password" placeholder="password "><br><br>

			<input id="button" type="submit" value="SUBMIT"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>
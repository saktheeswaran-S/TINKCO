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


			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "<font color='white'>wrong username or password!";
		}else
		{
			echo "<font color='white'>wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
		background-color: transparent;
		margin: auto;
		width: 300px;
		padding: 30px 40px;
		color: #fff;
		float: center;
		border-radius: 12px;
		backdrop-filter: blur(9px);
		border: 2px solid rgba(220, 220, 220, .2);
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
		color:red;
		font-style: italic;
		font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
	}

	</style>

	<header align="center">TINKCO</header><br>
	<div id="box">
		
		<form method="POST">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name" placeholder="username"><br><br>
			<input id="text" type="password" name="password"   placeholder="password"><br><br>

			<input id="button" type="submit" value="SUBMIT"><br><br>

			<a href="signup.php"><b>Click to Signup</b></a><br><br>
		</form>
	</div>
</body>
</html>
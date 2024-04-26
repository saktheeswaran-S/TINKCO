<!DOCTYPE html>
<html>
<head>
	<title>modes</title>
</head>
<body>
    <style>
    body{
        background-image: url('3.jpg');
	    justify-content: right;
        height: fit-content; 
		background-size: cover;
		background-position: center;
        background-attachment: fixed; 
  }
  a{
		color:red;
		font-style: italic;
        font-size: xx-large;
		font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
	}
    .container {

        position: relative;

    }

    .position {

    position: absolute;
    top: 100px;
    right: 430px;

     }
     .box{
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
    </style>

    <span id="element"></span>


    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>


    <script>
    var typed = new Typed('#element', {
    strings: ['<font size="10cm"><font color="#fff"><position="fixed"><top="20px"><left="20px">CHOOSE THE MODE TO PLAY!!!..'],
    typeSpeed: 50,
    });
    </script>
<div class="container">
<div class="position">
<div class="box">
<a href="game1.php"><b>=> Easy</b></a><br><br><br>
<a href="medg1.php"><b>=> Medium</b></a><br><br><br>
<a href="hardg1.php"><b>=> Hard</b></a><br><br><br>
</div>
</div>
</div>
</body></html>
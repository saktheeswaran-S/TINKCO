
<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<link rel="stylesheet"href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	
  <style>
 a{
		color:red;
		font-style: italic;
		font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
	}
  body{
   		background-image: url('3.jpg');
	    justify-content: right;
        height: fit-content; 
		background-size: cover;
		background-position: center;
        background-attachment: fixed; 
  }
   #header{
         color: azure;
		 text-align: center;
   }
  </style>
   <h1 id="header">WELCOME TO THE COLOUR REMEMBERING GAME</h1>
   <h1  id="header"> <i>TINKCO</i></h1>
  <a href="logout.php">Logout</a><br><br><br>
  <span id="element"></span>


<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>


<script>
  var typed = new Typed('#element', {
    strings: ['<font color="#fff"><font size="4"><b>INSTRUCTION</b><br><br>1. There are three modes <b><i>Easy,Medium,hard</i></b> choose one from it<br><br>2. According to the mode the colour changing speed will differ <i><b>(Easy - 3sec delay, medium - 2sec delay, hard - 1sec delay)</i></b><br><br>3.On the next page,after clicking <i><b>start</i></b> button random colors will be generated<br><br>4. On next page click the colour generated in sequence, <i>for each correct colour 10 points will be incremented.</i><br><br>5.Total score will be generated it will be printed with the user name</font></font>'],
    typeSpeed: 10,
  });
</script>


</body>
</h2>
      </div>

</div>
<br><br><a href="modes.php" style="position: absolute;left: 10px;top: 500px;"> next </a><br><br>
</body>
</html>
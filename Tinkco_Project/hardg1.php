<!DOCTYPE html>
<html>
<head>
	<title>game</title>
    <link rel="stylesheet"href="hardg1.css">
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
        position: fixed;
        

  }
  a{
    position: absolute;
    left: 10px;
    top: 500px;
		color:red;
    align-items: center;
		font-style: italic;
		font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

	}
    #gameBtn{
        font-size: x-large;
        position: relative;
        right: 327px;
        top: 55px;  
    }
    p{
        right: 165px;
        top: 50px;  
    } 
    #color-count {
    position: fixed; 
    top: 20px;
    right: 20px; 
    color: #fff;

    
    }

  </style>
    <span id="element"></span>


<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>


<script>
  var typed = new Typed('#element', {
    strings: ['<font size="10cm"><font color="#fff"><position="fixed"><top="20px"><left="20px">LETS BEGIN!...'],
    typeSpeed: 100,
  });
</script>

<div class="container">

      <div class="circle">

      </div>

      <button id="gameBtn" onclick="startGame()"> Start Game</button>
      <p id="color-count"><font color="#fff"><font size="5cm"><b>Color Count:<span id="counter">0</span></b></font></font></p>


</div>

<script type="text/javascript" src="hardg1.js"></script>
<a href="hardg2.php"><b>Go to next page</b></a>
</body>
</html>
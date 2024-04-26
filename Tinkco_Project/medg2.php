<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<html>
    <head><title>Colour_Selection</title></head>
    <body>
    <span id="element"></span>


    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>


    <script>
    var typed = new Typed('#element', {
    strings: ['<font size="5cm"><font color="#fff"><position="fixed"><top="20px"><left="20px">CHOOSE THE COLOUR IN SEQUENCE!...'],
    typeSpeed: 100,
    });
    </script>
        <style>
            table {
                border-collapse: collapse;
             } 
            td,
            th {
            border: 5px solid white;
            padding: 10px 20px;
            }
            body{
                background-image: url('3.jpg');
                justify-content: right;
                height: 100vh;
                background-size: cover;
                background-position: center;
                color:white;
            }
            #score-count{
                position: fixed; 
                top: 470px;
                left: 515px;  
                color: #fff;
            }
            a{
                position: absolute;
                right: 10px;
                top: 500px;
		        color:red;
                align-items: center;
		        font-style: italic;
		        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

	}
        </style>

        <table align="center">
            <tr>
                <th><font color="#fff">Colours</th></font>
                <th><font color="#fff">sequence_order</th></font>
            </tr>
            <tr>
                <td><div onclick="selectColor('red')" style="background-color: red; width: 50px; height: 50px;"></div></td>
                <td id="red"></td>
            </tr>
            <tr>
                <td><div onclick="selectColor('blue')" style="background-color: blue; width: 50px; height: 50px;"></div></td>
                <td id="blue"></td>
            </tr>
            <tr>
                <td><div onclick="selectColor('green')"style="background-color: green; width: 50px; height: 50px;"></div></td>
                <td id="green"></td>
            </tr>
            <tr>
                <td><div onclick="selectColor('yellow')"style="background-color: yellow; width: 50px; height: 50px;"></div></td>
                <td id="yellow"></td>
            </tr>
            <tr>
                <td><div onclick="selectColor('brown') "style="background-color: brown; width: 50px; height: 50px;"></div></td>
                <td id="brown"></td>
            </tr>
        </table>
        <br><br>
        <script type="text/javascript" src="medg2.js"></script>
        <p id="score-count"><font color="#fff">Hello, <b><?php echo $user_data['user_name']; ?></b> your Score is : <span id="counter">0</span></font></p>

         <a href="modes.php">PLAY AGAIN!</a>
    </body>
</html>
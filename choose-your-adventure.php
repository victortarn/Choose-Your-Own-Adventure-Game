<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Escaping Jason</title>	
	
	<meta name="description" content="Text-based Adventure Game using PHP">
	<meta name="author" content="Acton High School">	
	
	<style>
		body {
			font-family: MS Gothic;
			font-size: 50px;
			background-image: url('images/jason.jpg');
			color: #8a0303;
		}

		.butn {
			box-shadow:inset 0px 1px 0px 0px #f29c93;
			background-color:#fe1a00;
			border-radius:42px;
			display:inline-block;
			cursor:pointer;
			color:#000000;
			font-family:Arial;
			font-size:40px;
			font-weight:bold;
			padding:6px 24px;
			text-decoration:none;
			text-shadow:0px 1px 11px #b23e35;
		}

		a:hover {
			background-color: #000000;
			color: #ffffff;
		}

		p {
			background-color: rgba(138,7,7,0.2);
		}

	</style> 

</head>
<body>
	<a href="https://icsprogramming.ca/2019-2020/tarnovskib44ae/"><img src="images/homebutton.png" align="left" valign="top" width="50"></a>
	<h1 align="center" class="shake">Friday the 13th</h1>
	
<p>
<?
	$option = $_GET['option'];
	
	if ($option == "") {
		echo "<p align=\"center\"> 

			Jason Voorhees has kidnapped you and agrees to let you live if you beat him at his game. He puts you into a room with 3 doors and a sign which reads: 'Choose the right door. Your life depends on it.'.
		<br />
		<table>
			<tr>
				<td><a href='choose-your-adventure.php?option=c4ca4238a0b923820dcc509a6f75849b'><img src=\"images/spookydoor.jpg\"></a></td>
				<td><a href='choose-your-adventure.php?option=c81e728d9d4c2f636f067f89cc14862c'><img src=\"images/spookydoor.jpg\"></a></td>
				<td><a href='choose-your-adventure.php?option=eccbc87e4b5ce2fe28308fd9f2a7baf3'><img src=\"images/spookydoor.jpg\"></a></td>
			</tr>
		</table>   
		</p>";
	} else if ($option == "c4ca4238a0b923820dcc509a6f75849b") {
		echo "<p align=\"center\">You chose the left door. The door shuts behind you and the ceiling collapses and kills you. What a shame! Your inability to read carefully has caused your death.
		<br />
		<img src=\"images/collapsed_ceiling.jpg\">
		<br /> <br />
		<a class=\"butn\" href='choose-your-adventure.php?'>Start Over</a>
		</p>";
	} else if ($option == "c81e728d9d4c2f636f067f89cc14862c") {
		echo "<p align=\"center\">You chose the middle door. The door shuts behind you. You fall through the floor into a pit of lava and burn to death. What a shame! Your inability to read carefully has caused your death.
		<br />
		<img src=\"images/lavapit.png\">
		<br /> <br />
		<a class=\"butn\" href='choose-your-adventure.php?'>Start Over</a>
		</p>";
	} else if ($option == "eccbc87e4b5ce2fe28308fd9f2a7baf3") {
		echo "<p align=\"center\"> You chose the <b>RIGHT</b> door. The door shuts behind you. In the room there is a sleeping lion and a shark. Both of them have a the key to the next room on a chain around their body. You need to decide which animal you will approach to get the key.
		<br />
		<a href='choose-your-adventure.php?option=a87ff679a2f3e71d9181a67b7542122c'><img width=\"750\" src=\"images/lion.jpg\"></a> 
		<a href='choose-your-adventure.php?option=e4da3b7fbbce2345d7772b0674a318d5'><img width=\"750\" src=\"images/shark.jpg_fit=scale\"></a>
		</p>";
	} else if ($option == "a87ff679a2f3e71d9181a67b7542122c") {
		echo "<p align=\"center\"> As you are trying to get the key off the lions neck it wakes up and kills you. For some reason you decided it was a good idea to approach a lion instead of a dead shark out of water.
		<br /> <br />
		<a class=\"butn\" href='choose-your-adventure.php?'>Start Over</a>
		</p>";
	} else if ($option == "e4da3b7fbbce2345d7772b0674a318d5") {
		echo "<p align=\"center\"> You approach the dead shark out of water and easily get the key off it. You enter the next room and the door closes behind you. The room begins to fill up with water and you start to drown. On the next door there is 5 buttons each with a different number:
			<br /> 
			10, 11, 12, 13, 14.
		<br />
		<img width=\"750\" src=\"images/drowning.jpg\"> 
		<br />
		<a class=\"butn\" href='choose-your-adventure.php?option=1679091c5a880faf6fb5e6087eb1b2dc'>10</a> | <a class=\"butn\" href='choose-your-adventure.php?option=8f14e45fceea167a5a36dedd4bea2543'>11</a> | <a class=\"butn\"href='choose-your-adventure.php?option=c9f0f895fb98ab9159f51fd0297e236d'>12</a> | <a class=\"butn\"href='choose-your-adventure.php?option=45c48cce2e2d7fbdea1afc51c7c6ad26'>13</a> | <a class=\"butn\"href='choose-your-adventure.php?option=d3d9446802a44259755d38e6d163e820'>14</a> 
		</p>";
	} else if ($option == "1679091c5a880faf6fb5e6087eb1b2dc") {
		echo "<p align=\"center\"> You click the button and it does nothing. You drown to your death.
		<br /> <br />
		<a class=\"butn\" href='choose-your-adventure.php?'>Start Over</a>
		</p>";
	} else if ($option == "8f14e45fceea167a5a36dedd4bea2543") {
		echo "<p align=\"center\"> You click the button and it does nothing. You drown to your death.
		<br /> <br />
		<a class=\"butn\" href='choose-your-adventure.php?'>Start Over</a>
		</p>";
	} else if ($option == "c9f0f895fb98ab9159f51fd0297e236d") {
		echo "<p align=\"center\"> You click the button and it does nothing. You drown to your death.
		<br /> <br />
		<a class=\"butn\" href='choose-your-adventure.php?'>Start Over</a>
		</p>";
	} else if ($option == "d3d9446802a44259755d38e6d163e820") {
		echo "<p align=\"center\"> You click the button and it does nothing. You drown to your death.
		<br /> <br />
		<a class=\"butn\" href='choose-your-adventure.php?'>Start Over</a>
		</p>";
	} else if ($option == "45c48cce2e2d7fbdea1afc51c7c6ad26") {
		echo "<p align=\"center\"> You click the button and immediately the next door opens and the room begins to drain. In the next room you see Jason. Jason says that he feels bad that you are cold and wet and wants to do something for you which will warm you up. He gives you the option of being in an oven for one minute or being in a tank full of boiling water for 30 seconds.
		<br />
		<a href='choose-your-adventure.php?option=6512bd43d9caa6e02c990b0a82652dca'><img width=\"750\" src=\"images/oven.jpg\"></a>
		<a href='choose-your-adventure.php?option=c20ad4d76fe97759aa27a0c99bff6710'><img width=\"750\" src=\"images/boiling.jpg\"></a>
		</p>";
	} else if ($option == "c20ad4d76fe97759aa27a0c99bff6710") {
		echo "<p align=\"center\"> You begin to panic and start drowning again. You die a painful death as you boil alive.
		<br /> <br />
		<a class=\"butn\" href='choose-your-adventure.php?'>Start Over</a>
		</p>";
	} else if ($option == "6512bd43d9caa6e02c990b0a82652dca") {
		echo "<p align=\"center\"> The oven dries of the water from your body almost instantly. Your body begins to pour sweat and your head starts to throb violently. You begin to feel dizzy. Just as you feel as though you are about to pass out Jason opens the oven door and lets you out. Jason tells you that you have won and are free to go. You have the choice to either give Jason a hug or run away.
		<br /> <br />
		<a class=\"butn\" href='choose-your-adventure.php?option=c51ce410c124a10e0db5e4b97fc2af39'>Hug Jason</a> | <a class=\"butn\" href='choose-your-adventure.php?option=aab3238922bcc25a6f606eb525ffdc56'>Run Away</a>
		</p>";
	} else if ($option == "c51ce410c124a10e0db5e4b97fc2af39") {
		echo "<p align=\"center\"> You decide to give Jason a hug. As you approach him he stabs you and you bleed to your death. What did you honestly expect was going to happen?
		<br /> <br />
		<a class=\"butn\" href='choose-your-adventure.php?'>Start Over</a>
		</p>";
	} else if ($option == "aab3238922bcc25a6f606eb525ffdc56") {
		echo "<p align=\"center\">Congratulations you survived! You won Jason's game and ran away from him.
		<br />
		<br />
		<a class=\"butn\" href='choose-your-adventure.php?'>Play Again</a>
		</p>";
	}
	else {
		echo "<p align=\"center\">You have made an invalid selection!
			<br /> <br />
		<a class=\"butn\" href='choose-your-adventure.php?'>Start Over</a>
		</p>";                     
            }
?>
</p>
</body>
</html>
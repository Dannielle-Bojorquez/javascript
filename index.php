<!DOCTYPE html>
<html>
	<head>
		<title>Javascript</title>
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<script src="script.js">
		</script>

		<link rel="stylesheet" href="jscript.css">

	</head>
	<body>
		<!-- trying input box-->
		<input id="myText" value="Enter Something">
		<p>Lets try this input</p>
		<button onclick="pleaseWork()">Ta..da</button>
		<p id="letsTry"></p>

		<!--forgot what this was jk color change-->
		<h1>My Example</h1>
		<div id="circle" onmouseover="changeColor();" onmouseout="changeBack();">
			<h1>Hello!</h1>
		</div>
		<!-- trying font changes-->
		<br>
		<button onclick="changeFont();">Show me the MAGIC!</button>
		<br>

		<p id="change">The best Lorem Ipsum Generator in all the sea! Heave this scurvy copyfiller fer yar next adventure and cajol yar clients into walking the plank with ev'ry layout! Configure above, then get yer pirate ipsum...own the high seas, arg!Crack Jennys tea cup bilge bowsprit Jolly Roger execution dock strike colors gally come about square-rigged gibbet. Lugsail black spot lanyard Privateer ballast pirate scurvy run a rig smartly spyglass. Long clothes crack Jennys tea cup grog line handsomely Cat o'nine tails Pieces of Eight holystone bounty chase guns.</p>

		<button onclick="showMe()">Hey..Click ME!</button>
		<p id="clicker"></p>
		<!-- adding ajax call button -->
		<h3>Lets make BACON!</h3>
		<button id="crispyButton">
			Make it Crispy!
		</button>
		<div id="crispyOutput">
			<!--ipsum here please-->
		</div>
	</body>
</html>
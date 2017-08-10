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
		<form>
		<h1>My Example</h1>
			<div id="circle" onmouseover="changeColor();" onmouseout="changeBack();">
				<h1>Hello!</h1>
			</div>
			<p>First name:</p><input type="text" name="firstName" onchange="firstName">
			<p>Last name:</p><input type="text" name="lastName" onchange="lastName">
<button type="submit">Lets Go!</button>
		</form>

		<h2>Pirate's</h2>
		<button id="pButton">
			Arg!
		</button>
		<div id="pOutput">
			<!--ipsum Lute! -->
		</div>
		<p>The best Lorem Ipsum Generator in all the sea! Heave this scurvy copyfiller fer yar next adventure and cajol yar clients into walking the plank with ev'ry layout! Configure above, then get yer pirate ipsum...own the high seas, arg!</p>

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
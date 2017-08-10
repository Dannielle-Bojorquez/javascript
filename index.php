<!DOCTYPE html>
<html>
	<head>
		<title>Javascript</title>
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
	</body>
</html>
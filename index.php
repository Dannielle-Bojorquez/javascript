<!DOCTYPE html>
<html>
	<head>
		<title>Javascript</title>
		<script type="text/javascript">
			function substitute () {
				var myValue = document.getElementById('myTextBox').value;

				if (myValue.length == 0) {
					alert('Please enter a real value in the text box!');
					return;
				}
				var myTitle = document.getElementById('title');
				myTitle.innerHTML = myValue
			}
		</script>
	</head>
	<body>
		<h1 id="title">My Example</h1>
		<input type="text" id="myTextBox" />
		<input type="submit" value="Click Me" onclick="" />

	</body>
</html>
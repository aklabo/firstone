<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<!-- script src="https://unpkg.com/react@15/dist/react.min.js"></script -->
		<!-- script src="https://unpkg.com/react-dom@15/dist/react-dom.min.js"></script -->
		<script src="https://unpkg.com/react@latest/dist/react.js"></script>
		<script src="https://unpkg.com/react-dom@latest/dist/react-dom.js"></script>
		<script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
	</head>
	<body>
		<form>
			<div id="root">
			</div>
		</form>
		<script type="text/babel">
			ReactDOM.render(
				<h1>Hello, world!</h1>,
				document.getElementById('root')
			);
		</script>
	</body>
</html>


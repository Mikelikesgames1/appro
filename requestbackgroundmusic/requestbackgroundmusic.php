
<!DOCTYPE html>
<html>
<head>
	<title>Movie Suggestions Form</title>
</head>
<body>
	<h1>What Background Music Should We Add?</h1>
	<center><form action="submit.php" method="post">
		<label for="name">Enter your name:</label><br>
		<input type="text" id="name" name="name"><br>
    <p></p>
		<label for="movie-suggestion">Enter your Background Music suggestion:</label><br>
		<textarea id="movie-suggestion" name="movie-suggestion" rows="5" cols="50"></textarea><br>
		<input type="submit" value="Submit">
	</form></center>
  <style>body {
	font-family: Arial, sans-serif;
}

h1 {
	text-align: center;
}

form {
	width: 50%;
	margin: 0 auto;
}

label {
	display: block;
	margin-bottom: 10px;
}

input[type="text"],
textarea {
	padding: 10px;
	border-radius: 5px;
	border: 1px solid #ccc;
	width: 100%;
	box-sizing: border-box;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: white;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #45a049;
}

.error-message {
	color: red;
	font-weight: bold;
}
</style>
  <script async src="https://arc.io/widget.min.js#xGQdN1dR"></script>
</body>
</html>


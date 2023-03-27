<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	<div class="container">
		<h1>Sign Up</h1>
		<form method="post" action="process.php">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>

			<div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>

			<input type="submit" value="Sign Up">
		</form>
	</div>
</body>
</html>

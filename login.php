<!DOCTYPE html>
<html>
<head>
	<title>login Page</title>
	<style>
		form { text-align: center;}
		body {background-color: powderblue;}
	</style>
</head>
<body>
	<form action="checkUser.php" method="post">
	    <h1><i>Login Page</i></h1>
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" name="Login" value="Login">
	</form>
	<p><?php //echo var_dump($_GET); ?></p>
</body>
</html>
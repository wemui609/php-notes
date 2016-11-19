
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<style>
		*{
			font-family: sans-serif;
		}
		.error{
			color:#f00;
		}
	</style>
</head>
<body>
<nav>
	<ul>
		<li><a href="index.php">HOME</a></li>
		<li><a href="register.php">REGISTER</a></li>
		<li><a href="lookup.php">LOOKUP</a></li>
	</ul>
</nav>
<h2>REGISTRATION</h2>
<p>
	<span class="error">* required field.</span>
</p>
<form method="post" action="postprocess.php" enctype ='multipart/form-data'>
<label>Name
	<input type="text" name="name" required><span class="error">*</span><br>
</label>
<br>
<label>E-mail
	<input type="email" name="email" required><span class="error">*</span><br>
</label>
<br>
<label>User Name
	<input type="text" name="user" required><span class="error">*</span><br>
</label>
<br>
<label>Photo:
	<input type="file" name="photo"><br>
</label>
<br>
<input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>
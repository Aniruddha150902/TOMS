<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TOMS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/styleslogin.css">
</head>

<body>
	<video autoplay muted loop id="myVideo">
		<source src="../video/pexels-taryn-elliott-5665076.mp4" type="video/mp4">
	</video>
	<div class="login-box">
		<img src="../images/avatar.png" class="avatar">
		<h1>Login</h1>
		<form name="f1" action="authenticationtpo.php" onsubmit="return validation()" method="POST">
			<p>Username</p>
			<input type="text" id="tpo" name="tpo" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" id="pass" name="pass" placeholder="Enter Password">
			<input type="submit" id="btn" name="submit" value="Login">
			<a href="#">Forget Password?</a>
		</form>
	</div>
	<script>
		function validation() {
			var id = document.f1.tpo.value;
			var ps = document.f1.pass.value;
			if (id.length == "" && ps.length == "") {
				alert("User Name and Password fields are empty");
				return false;
			} else {
				if (id.length == "") {
					alert("User Name is empty");
					return false;
				}
				if (ps.length == "") {
					alert("Password field is empty");
					return false;
				}
			}
		}
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>


<!DOCTYPE html>
<html>
<head>
	<title>Name and Password Validation</title>
	<style>
		body{
			font-size: 20px;
			background-color: rgb(182, 73, 34);
		}
	</style>
</head>
<body>
	<form method="POST" action="login val.php">
		<fieldset>
			<legend>Login</legend>
			User Name: 		<input class="user" type="text" name="myname" value=""> <br>

			password: 	<input class="pass" type="password" name="password" value=""> <br>

			<a href="home.html"> <input class="button" type="button" value="Submit"> </a> 

			              

						 
						<input type="checkbox" name="item[]" > Remember Me
						<a href="Change password.php"> Forgot Password ?</a>
						

		</fieldset>
	</form>
	<script>
	let user  = document.querySelector('.user');
	let pass  = document.querySelector('.pass');
	let button  = document.querySelector('.button');


	button.addEventListener('click', function(e) {
	if(user.value == '' || pass.value == '') {
		e.preventDefault();
		alert('Please fill out the credentials')
		console.log(amount.value)
	}
	});

</script>
</body>
</html>
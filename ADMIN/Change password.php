<?php

	if(isset($_POST['submit'])){

		
		$password1	=  $_POST['password1'];
		$password2  =  $_POST['password2'];

		if($password1 == $password2){
			echo "Password Changed";
		}



		else{
			echo "The passwords did not match";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>New Password confirmation</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Change Password</legend>
			Current Password :	<input type="password" name="password" value=""> <br>
			<tr>
					<td>
						New Password :
						 
					</td>
					<td>
						<input type="password" name="password1" value="" placeholder="enter your Password"> <br>
					</td>
				</tr>
				<tr><td>
						Confirm Password :	 <br>
					</td>
					<td><input type="password" name="password2" value="" placeholder="re-enter your password"><br></td>
				</tr>
						    	<input type="submit" name="submit" value="Submit"> <br>
		</fieldset>
	</form>
</body>
</html>
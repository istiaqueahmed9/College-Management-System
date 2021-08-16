<?php
if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password1	=  $_POST[ 'password1'];
		$password2  =  $_POST['password2'];
	
		$dob = $_POST["dob"];

		
		if($name == ""){
			echo "Enter a Name";
		}
		else if(ctype_alnum($name) and $name=="_" and $name=="-" and strlen( $name) < 2){
			echo "Invalid Name \n";
			
		}
		else if($email==""){
			echo "enter a valid email";
		}
		else if($username==""){
			echo "Enter a valid User Name";
		}
		else if(ctype_alnum($username) and $username=="_" and $username=="-" and strlen( $username) < 2){
			echo "Invalid Name \n";
			
		}
		else if($password1 ==""){
			echo "Enter a password";
		}
		else if($password2==""){
			echo "Re-type the password to confirm your password";
		}
		else if ( $password1=="@" ||$password1=="#" || $password1=="$" ||$password1=="%" and strlen($password1)<8) 
		{

			echo "\n Invalid password";
			echo "Password must not be less than eight(8) characters \n Password must contain at least one of the special characters (@, #, $, %)";
		}
		else if($password1 !== $password2){
			echo "Passwords did not match";
		}
		
		else if($dob == ""){
			echo "Enter a Date of Birth";
		}
		else {
			echo "Edit Sucessfull !";
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style>
		body{
			font-size: 20px;
			background-color: rgb(182, 73, 34);
		}
	</style>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Edit</legend>
			<table border="0" width="50%" align="left">
		<th colspan="2"><h1>Edit Profile</h1></th>
<tr>
					<td>Name:<br></td>
					<td colspan="2"> 
					<input type="text" name="name" value="" placeholder="enter your name" />
					</td>
				</tr>
				<tr>
					<td>Email: <br></td>
					
					<td colspan="2"> <input type="email" name="email" placeholder="Enter your email" value="" /> </td>
				</tr>
				
					<tr>
					<td>User Name<br></td>
					<td colspan="2"> 
					<input type="text" name="username" value="" placeholder="enter your username" />
					</td>
				</tr>
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
				
								<tr>
					<td>Enter Date of birth : </td>
					<td> <input type="date" name="dob" value="" /> </td>
				</tr>
								
								

				<tr>
					<td colspan="3" height="50px"></td>
					
				</tr>

		<tr align="right" >
			<td colspan="3" height="50px">
				<input type="submit" name="submit" value="Submit"> 
						<input type="reset" name="click" value="reset">	

						<td colspan="3" align="right">
				<a href="home.html">Go Home</a>
			</td>
		</tr>
	</table>
		</fieldset>
	</form>
</body>
</html>
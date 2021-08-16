

<?php



	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	
	$email="";
    $err_email="";
	
	$nid="";
    $err_nid="";
	$fname="";
    $err_fname="";
	
	
	
	
	function ValidateEmail($email){
	 $pos_at = strpos($email, "@"); 
	 $pos_dot = strpos($email, ".", $pos_at+1); 
	 if($pos_at < $pos_dot) {
		 return true;
	 }
	 return false;
 }
	 
	 

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 if(empty($_POST["email"])) {
		 $err_email= "Email Required";
	 }
elseif (!validateEmail($_POST["email"])){
	$err_email ='NOT A Valid email';
	
 }
 }
	
	
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	//if(isset($_POST["submit"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
		}
		elseif(strlen($_POST["uname"]) < 6){
			$err_uname="Username Must be 6 Characters Long";
		}
		elseif(strpos($_POST["uname"]," ")){
			$err_uname="Username should not contain white space";
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
		}
		else{
			$pass=$_POST["pass"];
		}
		if(empty($_POST["address"])){
			$err_address="address Required";
		}else{
			$address=$_POST["address"];
		}
		
		if(empty($_POST["nid"])){
			$err_nid="Please fill up your NID Number";
		}else{
			$nid=$_POST["nid"];
		}
		if(empty($_POST["fname"])){
			$err_fname="Please fill up your full name";
		}else{
			$fname=$_POST["fname"];
		}
		
	}
		
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 15px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 20px;
		width: 200px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 400px;
		padding: 50px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>



<html>
	<head></head>
	<body style
	= "background-color: green";>
<img src = "teacher logo.png" width = "142px" height = "142px">
<p1> Submit all the requirment  to start  connecting with us. 
 Thank you. </p1>
       
      
	
	
	
		<h1>Teacher Registration</h1>
		<form method="post" action=""  >
			<table>
				<tr>
					<td><span >Username</span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username">
						<span><?php echo $err_uname;?></span></td>
				</tr>
				
				<tr>
					<td><span >Full Name</span></td>
					<td>:<input type="text" name="fname" value="<?php echo $fname;?>" placeholder="Full Name">
						<span><?php echo $err_fname;?></span></td>
				</tr>
				
				
				<tr>
				<td><span>Date of birth</span></td>
				<td>:</td>
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1971;$k<=2040;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				</tr> <br>
				
				<tr>
				
				<tr>
					<td><span >Email</span></td>
					<td>:<input type="text" name="email" value="<?php echo $email;?>" placeholder="Email">
						<span><?php echo $err_email;?></span></td>
				</tr>
				
				
				
				
				<tr>
					<td><span>Password</span></td>
					<td>:<input type="password" value="<?php echo $pass;?>" name="pass">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span> 
					<input type="radio" name="gender" value="Female">Female<br></td>
				</tr>
				<tr>
				
				<tr>
					<td><span>NID</span></td>
					<td>:<input type="number" value="<?php echo $nid;?>" placeholder="NID">
					<span><?php echo $err_nid;?></span></td>
				</tr>
				
				<tr>
					<td><span>DEPARTMENT</span></td>
					<td>
						:<select name="department">
							<option disabled selected>Chose One</option>
							<option>Faculty of Science</option>
							<option>Faculty of Business Administration</option>
							<option>Faculty of Arts & Social Sciences</option>
						</select>
					</td>
				</tr>
				
				
				
				
				<tr>
				
					<td><input type="submit" name="submit" value="submit"></td> </tr>  
					<td><input type="reset" name="reset" value="reset"></td>
				</tr>

				
				
				
				
			</table>
		</form>
		
		
		
	</body>
	
</html>


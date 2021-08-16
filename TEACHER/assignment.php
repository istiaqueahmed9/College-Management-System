<?php



	$course="";
	$err_course="";
	$section="";
	$err_section="";
    $code="";
	$err_code="";
	$tname="";
	$err_tname="";


	
	
	
	
	
	
	 
	 
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(empty($_POST["course"])){
			$err_course="Please fill the Course name";
		}else{
			$course=$_POST["course"];
		}
		if(empty($_POST["section"])){
			$err_section="Please fill up the section  name";
		}else{
			$section=$_POST["section"];
		}
		if(empty($_POST["code"])){
			$err_code="Please fill up the Code number";
		}else{
			$code=$_POST["code"];
		}
		if(empty($_POST["tname"])){
			$err_tname="Please fill up your name";
		}else{
			$tname=$_POST["tname"];
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
			<div style="font-size: 20px;margin: 10px;color: white;">Assignment</div>





<html>
	<head></head>
	<body style
	= "background-color: green";>
<img src = "teacher logo.png" width = "162px" height = "162px">

      
	
	
	
		<h1>Assignment</h1>
		<form method="post" action=""  >
			<table>
				<tr>
					<td><span >Course Name</span></td>
					<td>:<input type="text" name="course" value="<?php echo $course;?>" placeholder="Course">
						<span><?php echo $err_course;?></span></td>
				</tr>
				
				<tr>
					<td><span >Section</span></td>
					<td>:<input type="text" name="section" value="<?php echo $section;?>" placeholder="Section">
						<span><?php echo $err_section;?></span></td>
				</tr>
				
				<tr>
					<td><span >Course Code</span></td>
					<td>:<input type="number" name="code" value="<?php echo $code;?>" placeholder="code">
						<span><?php echo $err_code;?></span></td>
				</tr>
				<tr>
					<td><span >Teacher Name</span></td>
					<td>:<input type="text" name="tname" value="<?php echo $tname;?>" placeholder="Teacher Name">
						<span><?php echo $err_tname;?></span></td>
				</tr>
				</tr>
				
				<tr>
				<td><span>Due date</span></td>
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
						for($k=2021;$k<=2022;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				
				</td>
				</tr> <br>
				
				
				
					<td><input type="submit" name="submit" value="submit"></td>
				</tr> 
				<form action="upload_file.php" method="post" enctype="multipart/form-data">

<input type="file" name="file" size="50" />

<br />

<input type="submit" value="Upload" />

</form>
				
				
				
			</table>
		</form>
		
		
		
	</body>
	
</html>


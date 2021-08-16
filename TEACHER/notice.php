<?php

     
	$course="";
	$err_course="";
	$section="";
	$err_section="";
    $code="";
	$err_code="";
	
	 $tname="";
	$err_tname="";

	$notice="";
	$err_notice="";

	
	
	
	
	
	
	 
	 
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"])){
			$err_name="Please fill the Student name";
		}else{
			$name=$_POST["name"];
		}
	
	
	
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
		if(empty($_POST["id"])){
			$err_id="Please fill the Student's ID";
		}else{
			$id=$_POST["id"];
		}
		if(empty($_POST["notice"])){
			$err_notice="Upload the notice";
		}else{
			$notice=$_POST["notice"];
		}
		
	}
	
		
?>





 
 <!DOCTYPE html>
<html>
<head>
	<title>Notice</title>
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
			<div style="font-size: 20px;margin: 10px;color: white;">Important announcement</div>



      
	
	
	
		<h1>NOTICE</h1>
		<form method="post" action=""  >
			<table>
			
			
			
			
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
				
				
				
					<td><span>NOTICE TYPE</span></td>
					<td>
						:<select name="notice">
							<option disabled selected>Chose One</option>
							<option>Class Cancellation</option>
							<option>Makeup Class</option>
							<option>Classs test schedule</option>
							<option>Others</option>
							
							
							
						</select>
					</td>
				</tr>
					
					<tr>
					<td><span >View Notice</span></td>
					<td>:<textarea name="notice"></textarea></td>
					
						<span><?php echo $err_notice;?></span></td>
				</tr>
					
					<tr>
					<td><span >Teacher Name</span></td>
					
					<td>:<input type="text area" name="tname" value="<?php echo $tname;?>" placeholder="Teacher Name">
						<span><?php echo $err_tname;?></span></td>
				</tr>
					
				</select>
				</td>
				</tr> <br>
				
				
				
					<td><input type="submit" name="submit" value="submit"></td>
				</tr> 
				
				
				
			</table>
		</form>
		
		
		
	</body>
	
</html>


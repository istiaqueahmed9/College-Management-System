<?php
session_start();

if(empty($_SESSION)){
	header('Location: http://localhost/My Project/Project/login.php');
    exit();
}
require '../model/dataaccess.php';
$user = array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    	<?php
			if($connection->connect_error){
				die("connection failed:" . $connection->connect_error);
			}
			else{
						$email = $_SESSION["email"];
						$sql = "SELECT * FROM users WHERE email = '$email'";
						$result = $connection->query($sql);

						if($result->num_rows > 0)
						{
								while($row = $result->fetch_assoc())
								{
										$user = $row;
								}
						}
			}
		?>
    <title>Home page</title>
</head>
<body>
		<div class="container">

			<ul class="nav nav-pills justify-content-center mt-5  ">
				<li class="nav-items">
					<a class="nav-link active " href="http://localhost/My Project/Project/students/home.php">Home</a>
				</li>
				<li class="nav-items">
					<a class="nav-link active" href="http://localhost/My Project/Project/students/viewProfile.php">View Profile</a>
				</li>
				<li class="nav-items">
					<a class="nav-link active" href="http://localhost/My Project/Project/students/editProfile.php">Edit Profile</a>
				</li>
				<li class="nav-items">
					<a class="nav-link active" href="http://localhost/My Project/Project/students/gradeReport.php">Grade Report</a>
				</li>
				<li class="nav-items">
					<a class="nav-link active" href="http://localhost/My Project/Project/students/offeredCourses.php">Offered Courses</a>
				</li>
				<li class="nav-items">
					<a class="nav-link active" href="http://localhost/My Project/Project/logout.php">Logout</a>
				</li>
			</ul>

			<div class="container">
				<div class="row mt-5">
					<div class="col-md-4 text-center mt-3" >
						<img class="rounded-circle" atl="" src="<?=@$user["image"] ?>" height="250" width="250"><br><br>
						

						</div>
					<div class="col-md-7">
						<table class="table mt-4">
							<thead>
								<tr class="bg-info">
									<th colspan="2" class="h5 text-light"><?php echo $user["firstName"]." ".$user["lastName"]; ?></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>ID</td>
									<td><?php echo $user["id"]; ?></td>
								</tr>
								<tr>
									<td>Name</td>
									<td><?php echo $user["firstName"]." ".$user["lastName"]; ?></td>
								</tr>
								<tr>
									<td>Gender</td>
									<td><?php echo $user["gender"]; ?></td>
								</tr>
								<tr>
									<td>Date of Birth</td>
									<td><?php echo $user["dob"]; ?></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><?php echo $user["email"]; ?></td>
								</tr>
								<tr>
									<td>Mobile No</td>
									<td><?php echo $user["phone"]; ?></td>
								</tr>
								<tr>
									<td>Address</td>
									<td><?php echo $user["address"]; ?></td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
				
			</div>


		</div>

	   <div style="margin-top:1px;"></div>
      <script src="../js/jquery-slim.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
</body>
</html>
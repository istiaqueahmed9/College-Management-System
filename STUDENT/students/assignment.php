<?php
session_start();
if(empty($_SESSION)){
	header('Location: http://localhost/y Project/Project/login.php');
    exit();
}
require '../model/dataaccess.php';
$rows = [];
$file = "";
$assignmentErr = $uploadErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_FILES["file_field"])) {

			echo $_POST["file_field"];
		$target_file = $postUser["image"] ;

	} else {

			$file_field = $_FILES["file_field"];
			$target_dir = "../assets/assignment/";
			$filename = basename($_FILES["file_field"]["name"]);
			$target_file = $target_dir . $filename;
			if (move_uploaded_file($_FILES["file_field"]["tmp_name"], $target_file)){
				if ($connection->connect_error) {
					die("Connection failed: " . $connection->connect_error);
				}
				else{
					echo "Connection successful";
					$eId = $_GET["eid"];
					$date = date("Y-m-d h:i:s");
					$sql = "INSERT INTO assignment (eId, path, uploadDate, fileName)
	  					VALUES ('$eId', '$target_file', '$date' ,'$filename')";
						if ($connection->query($sql) === TRUE) {
							echo "Updated successfully";

							header('Location:http://localhost/My Project/Project/students/assignment.php?eid='.$eId);
							exit();
						}
				}
		}
		else{ echo "file upload error!!!";}

	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
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
						$eId = $_GET["eid"] ;
						$sql = "SELECT * FROM assignment WHERE eId = '$eId'";
						$result = $connection->query($sql);

						if($result->num_rows > 0)
						{
								while($row = $result->fetch_assoc())
								{
										$rows[] = $row;
								}
						}
						else{
							$assignmentErr = "No assignments Available!!";
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

			<div class="container mt-5">
        <div class="card">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a href="http://localhost/My Project/Project/students/classDetails.php?eid=<?php echo $_GET["eid"]; ?>" class="nav-link ">Notes</a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/My Project/Project/students/notice.php?eid=<?php echo $_GET["eid"]; ?>" class="nav-link">Notices</a>
                </li>
				<li class="nav-item">
                  <a href="http://localhost/My Project/Project/students/assignment.php?eid=<?php echo $_GET["eid"]; ?>" class="nav-link active">Assignment</a>
                </li>
				<li class="nav-item">
                  <a href="http://localhost/My Project/Project/students/result.php?eid=<?php echo $_GET["eid"]; ?>" class="nav-link">Result</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
                <table class="table">
						<tbody>
							<?php foreach($rows as $assignment){ ?>
		                	<tr>
		                		<td><a href="#" style="text-decoration:none;"><?php echo $assignment["fileName"]; ?></a></td>
								<td><?php echo $assignment["uploadDate"]; ?></td>
		                	</tr>
							 <?php } ?>
						</tbody>		
                </table>
            </div>
          </div>

					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?eid=<?php echo $_GET["eid"]; ?>" method="post" enctype="multipart/form-data">
							 <div class="input-group col-md-3 mt-3">
								  <div class="custom-file">
								    <input type="file" name="file_field" class="custom-file-input" id="inputGroupFile04" onchange="this.files[0].name" />
								    <label class="custom-file-label" for="inputGroupFile04">Select file</label>
								  </div>
								  <div class="input-group-append">
								    <button class="btn btn-success" type="submit">Upload</button>
								  </div>
							</div>
		 		</form>
			</div>
		</div>

	   <div style="margin-top:1px;"></div>
      <script src="../js/jquery-slim.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
</body>
</html>

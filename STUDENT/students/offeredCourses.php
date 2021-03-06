<?php
session_start();
if(empty($_SESSION)){
	header('Location: http://localhost/My Project/Project/login.php');
    exit();
}
require '../model/dataaccess.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fot-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <title>All courses page</title>
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
      <div class="container my-5">
        <div class="card">
            <div class="card-header bg-info text-light">
              <div class="row justify-content-between">
                    <div class="col-sm-8">
                      <h5>Offered Courses</h5>
                    </div>
                    <div class="col-sm-4" id="search-box">
                      <input id="search" autocomplete="off" class="form-control form-control-xl" type="text" placeholder="type course name...">
                    </div>
                </div>
            </div>
        <div class="card-body" id="table-data">

        </div>
		</div>
	</div>
  </div>
	  <div style="margin-top:1px;"></div>
      <script src="../js/jquery-slim.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">
          $(document).ready(function() {
              loadTable();
              function loadTable(page){
                $.ajax({
                  url: "http://localhost/My Project/Project/students/ajax-pagination.php",
                  type: "POST",
                  data: {page_no :page},
                  success: function(data) {
                      $("#table-data").html(data);
                  }
                });
              }

              //pagination code
              $(document).on("click","#pagination a",function(e){
                  e.preventDefault();
                  var page_id = $(this).attr("id");

                  loadTable(page_id);
              });

              //live search
              $("#search").on("keyup",function(){
                  var search_term =$(this).val();
                  $.ajax({
                    url:"http://localhost/My Project/Project/students/ajax-search.php",
                    type: "POST",
                    data: {search:search_term},
                    success: function(data){
                      $("#table-data").html(data);
                    }
                  })
              });

              loadTable();
          })
      </script>
</body>
</html>
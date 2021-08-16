<?php
session_start();

$U_P_Err ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db   = "college_management";

  $conn = new mysqli($host, $user, $pass, $db);

  if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
  }
  else{

        $email = test_input($_POST["email"]);;
        $password = test_input($_POST["password"]);;
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $_SESSION["email"] = $row["email"];
                $_SESSION["password"] = $row["password"];

                header('Location: http://localhost/My Project/Project/students/home.php');
                exit();
            }
        }
        else{
          $U_P_Err = "Invalid Email/Password!";
        }
  }


}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script type="text/javascript">

        function validation(){

          var email = document.login.email;
          var password = document.login.password;

          if(email.value=="" && password.value == ""){
            email.style.borderColor = 'red';
            password.style.borderColor ='red';
            document.getElementById("epErr").innerHTML="Email & Password Required!";
            return false;
            
          }
          else if( email.value=="" ||  password.value=="" ){

            if(email.value==""){
              email.style.borderColor="red";
              document.getElementById("emailErr").innerHTML="Please, fillup Email!";
            }
            if(password.value==""){
              password.style.borderColor="red";
              document.getElementById("passwordErr").innerHTML="Please, fillup Password!";
            }
            return false;
          }
          else{
            return true;
          }
        }
      </script>
    <title>Login Form</title>
</head>
<body>
      <div class="container ">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="login" class="px-5 py-5 mx-auto mt-5" onsubmit= "return validation()">
              <div class="row">
                  <div class="col-md-4">

                  </div>
                  <div class="col-md-4">
                    <div class="card" style="width: 23rem; height: 20rem;">
                      <div class="card-body">
                        <h4 class="display-8 text-center mt-2">LOGIN</h4>
                        <div class="input-group mt-4">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="material-icons">person</i></span>
                                </div>
                                <input class="form-control form-control-sm" type="email" placeholder="user email" id="email" name="email" >    
                            </div>

                          <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key " style="font-size:24px;"></i></span>
                              </div>
                              <input class="form-control form-control-sm" type="password" placeholder="password" id="password" name="password" >
                              
                          </div>
                          <input type="submit" name="submit" value="Sign in" id="submit" class="btn btn-primary btn-md btn-block mt-3" autocomplete="off">
                          
                          <div class="mt-2" style="text-align: center;">
                            <span id="epErr" style="color:red;"></span>
                            <span id="emailErr" style="color:red;"></span>
                            <span id="passwordErr" style="color:red;"></span>
                            <span style="color:red;"><?php echo $U_P_Err; ?></span><br>
                            <span ><a href="#">Forget Password?</a></span>
                            <br>
                            <span ><a href="http://localhost/My Project/Project/register.php">Register Now!!</a></span>
                          </div>
                      </div> 
                  </div>
                </div>
            </div>
          </form>
        </div>
      <div style="margin-top:1px;"></div>
      <script src="js/jquery-slim.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
  </html>

</html>
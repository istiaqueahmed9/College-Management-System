<?php 


session_start();

if (isset($_SESSION['uname'])) {
	echo "<h1> Welcome ".$_SESSION['uname']."</h1>";
	echo "<a href='product.php'>Product</a><br>";
	echo "<br><a href='logout.php'>Logout</a><br>";

}
else{
		header("location:login.php");
		// echo "<script>location.href='login.php'</script>";
	}

 ?>
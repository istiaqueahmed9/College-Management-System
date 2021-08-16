
<!DOCTYPE html>
<html>
<head>
	<title>Notice</title>
	<style>
		body{
			font-size: 40px;
			background-color: rgb(182, 73, 34);
		}
	</style>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Notice</legend>
		<br>

		Add Notice: <input class="amount" type="text" name="Amount" value=""> <br>
								
						    	<input class="sss" type="submit" name="send" value="send"> <br>
						    	<a href="home.html">Go Home</a> 
		</fieldset>
	</form>
	<script>
	let amount  = document.querySelector('.amount');
	let input  = document.querySelector('.sss');


	input.addEventListener('click', function(e) {
	if(amount.value == '') {
		e.preventDefault();
		alert('Please write something!')
		console.log(amount.value)
	}
	});

</script>
</body>
</html>
<?php 

$password = "";

if (isset($_POST['generate'])) {
	$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+~`\|{}[]/><";
	$characters = str_shuffle($characters);
	$password = substr($characters, 0, 16);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Strong Random Password Generator</title>
</head>
<body>
	<div class="container">
		<h2 class="title">Strong Random Password Generator</h2>
		<form action="" method="POST">
			<div class="inputBox">
				<input type="text" value="<?php echo $password; ?>" placeholder="Click to Generate Password" id="password" readonly>
				<button class="copyIcon" type="button" onclick="copyFunction()"><i class="fa fa-clone"></i></button>
			</div>
			<div class="inputBox button">
				<button name="generate" type="submit">Generate Password</button>
			</div>
		</form>
	</div>

	<script>
		function copyFunction() {
			var password = document.getElementById("password");
			password.select();
			password.setSelectionRange(0, 99999);
			document.execCommand("copy");
		}
	</script>
</body>
</html>

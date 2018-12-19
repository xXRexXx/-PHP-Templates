<?php 
include('include/controller.php');
if(isset($_SESSION['name']))
{
    header("location:manage.php"); /*change the location to the specified page*/
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Login</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> <!-- Bootstrap location -->
	<link rel="stylesheet" type="text/css" href="css/main.css"> <!-- css location -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

	<form id="logForm" class="loginForm" method="post" 
		enctype = "multipart/form-data"> 
	  <h2>LOGIN</h2>
		<div class="input-group">
			<input type="text" name="name" id="name" placeholder="username" value="<?php echo $name; ?>"
			required name="name"/><?php echo $usernameErr; ?>
		</div>
		<div class="input-group">
			<input type="password" name="pass" id="pass" placeholder="password" required name="pass"/>
			<?php echo $passwordErr; ?>
		</div>
		<div class="input-group">			
			<button type='submit' name='login' id="login" class='btn btn-primary'>Enter</button>
		</div>
	</form>

</body>

</html>
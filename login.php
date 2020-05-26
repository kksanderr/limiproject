<?php
	require_once('core/start.php');
	//$db = Database::connect();

	if(Input::exists('post')) {

		// validacija
		// login
		// redirekt
		Session::set('success', 'You are loged in');
		Redirect::to('index.php');
	}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Limi blog | Login</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>

<!-- header -->
<?php include('./templates/header.php'); ?>

<div class="container-login-signup">

<section class="container-sm">
	<div class="messages flex-center">
		<div class="mt-5">
			<?php include('./templates/messages.php'); ?>
		</div>
	</div>
</section>

<section class="container-sm">
<div class="login-box">
	<div class="login-form flex-center">
		<h2>Login</h2>

		<form method="POST" action="">
			<p class="my-5">E-Mail Address:</p>
			<input class="form-field mb-5" type="text" name="email">
			<p class="my-5">Password:</p>
			<input class="form-field mb-5" type="password" name="password">

			<div class="flex-center">
				<button class="btn">Submit</button>
			</div>
		</form>

	</div>
</div>
</section>


</div>


<script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous">
</script>

<script type="text/javascript" src="./js/main.js"></script>

</body>
</html>

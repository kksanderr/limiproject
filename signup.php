<?php
require_once('core/start.php');

if(Input::exists('post')) {
	// validacija

	$validation = new Validate();

	$rules = [
		'username' => [
			'required' => true,
			'min' => 2,
			'max' => 60
		],
		'password' => [
			'required' => true,
			'min' => 6
		],
		'retype' => [
			'required' => true,
			'matches' => 'password'
		],
		'email' => [
			'required' => true,
			'email' => true,
			'unique' => 'users'
		]
	];

	$validation->check($_POST, $rules);

	if($validation->passed()) {
		// registracija korisnika
		// ...
		// redirekt
		Session::set('success', 'You have been registered and can now loged in');
		Redirect::to('login.php');
	}
	else {
		Session::set('errors', $validation->errors());
	}


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
		<h2>Signup</h2>

		<form method="POST" action="">
			<p class="my-5">Username:</p>
			<input class="form-field mb-5" type="text" name="username">

			<p class="my-5">E-Mail Address:</p>
			<input class="form-field mb-5" type="text" name="email">

			<p class="my-5">Password:</p>
			<input class="form-field mb-5" type="password" name="password">

			<p class="my-5">Retype password:</p>
			<input class="form-field mb-5" type="password" name="retype">

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

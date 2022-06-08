<?php
	require_once('config.php');
	require_once "google-api/vendor/autoload.php";
?>
<!DOCTYPE html>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<link rel="stylesheet" href="style.css">
<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>
			<div class="login-form">
				<form action="login.php" method="post">
				<div class="control-group">
				<input type="text" class="login-field" name="username" placeholder="username" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div class="control-group">
				<input type="password" class="login-field" name="password" placeholder="password" id="login-pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<button class="btn btn-primary btn-large btn-block" type="submit">Login</button>
				<!--<a class="btn btn-primary btn-large btn-block" href="login.php">login</a> -->
				<p></p>
				<button onclick="window.location = '<?php echo $login_url; ?>'" type="button" class="btn btn-danger">Login with Google</button>
                </form>
			</div>
		</div>
	</div>
</body>
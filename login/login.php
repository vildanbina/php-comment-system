<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
</head>

<body>

	<div class="header">
		<h2>Login</h2>
	</div>

	<p class="tip">Click on button in image container</p>
	<div class="cont">
		<?php include('errors.php'); ?>

		<form method="post" action="login.php">

			<div class="form sign-in">
				<div class="row">
					<h2>Welcome back,</h2>
					<div class="col-md-12">
						<label>
							<span>Username</span>
							<input type="text" name="username" />
						</label>
					</div>
					<div class="col-md-12">

						<label>
							<span>Password</span>
							<input type="password" name="password" />
						</label>
					</div>
					<p class="forgot-pass">Forgot password?</p>
					<button type="submit" name="login_user" class="submit">Sign In</button>
					<button type="button" class="fb-btn">Connect with <span>facebook</span></button>
				</div>
			</div>
		</form>
		<div class="sub-cont">
			<div class="img">
				<div class="img__text m--up">
					<h2>New here?</h2>
					<p>Sign up and discover great amount of new opportunities!</p>
				</div>
				<div class="img__text m--in">
					<h2>One of us?</h2>
					<p>If you already has an account, just sign in. We've missed you!</p>
				</div>
				<div class="img__btn">
					<span class="m--up">Sign Up</span>
					<span class="m--in">Sign In</span>
				</div>
			</div>
			<form method="post" action="login.php">
				<div class="form sign-up">
					<h2>Time to feel like home,</h2>
					<label>
						<span>Username</span>
						<input type="text" name="username" value="<?php echo isset($username) ? $username : ''; ?>" />
					</label>
					<label>
						<span>Email</span>
						<input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" />
					</label>
					<label>
						<span>Password</span>
						<input type="password" name="password" />
					</label>
					<button type="submit" class="submit" name="reg_user">Sign Up</button>
					<button type="button" class="fb-btn">Join with <span>facebook</span></button>
				</div>
			</form>
		</div>
	</div>
	</a>
	<footer>
	<div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://github.com/vildanbina" target="_blank"> Vildan Bina</a>
    </div>
	</footer>
	<script>
		document.querySelector('.img__btn').addEventListener('click', function () {
			document.querySelector('.cont').classList.toggle('s--signup');
		});
	</script>

</body>

</html>
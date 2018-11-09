<?php 
require_once ("includes/db.php");
if (!isset($_SESSION['user_id'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login/login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user_id']);
	header("location: login/login.php");
}
?>
<html>

<head>
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<title>PHP Comment System with Like Unlike</title>
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<style>
	</style>

<body style="background: #ededed;">
	<div class="container">
		<a href="index.php?logout='1'" class="btn btn-outline-light" style="color: black; float:right">Logout</a>
		<h2>PHP Comment System with Like Unlike</h2>
		<div class="comment-form-container">
			<form id="frm-comment">
				<div class="input-row">
					<input type="hidden" name="comment_id" id="commentId" placeholder="Name" />
				</div>
				<div class="input-row">
					<textarea class="form-control" type="text" name="comment" id="comment" placeholder="Add a Comment" required>  </textarea>
				</div>
				<div>
					<input type="button" class="btn btn-primary" id="submitButton" value="Publish" />
					<div id="comment-message">Comments Added Successfully!</div>
				</div>
			</form>
		</div>
		<div id="output"></div>
	</div>
	<footer>
		<div class="footer-copyright text-center py-3">© 2018 Copyright:
			<a href="https://github.com/vildanbina" target="_blank"> Vildan Bina</a>
		</div>
	</footer>
	<script src="assets/js/main.js"></script>

</body>

</html>
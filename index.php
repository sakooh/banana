<?php
	require_once('required/connect.php');
	if (!isset($_SESSION['token_login'])){
		header('location:login.php');
		exit();
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BananaAmphawa</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="font/stylesheet.css">
		<link rel="stylesheet" href="font/stylesheet2.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="m3" style="text-align: center; margin-top: 10px; width: 100%;float: left;">กล้วยทอดอัมพวา สาขา ปั้มนํ้ามันกัลปพฤกษ์</div>
			<div class="left">
				<div class="pic">
					<img src="http://placehold.it/187x180">
				</div>
				<div class="pictext">
					<h4>กล้วยทอด</h4>
					กำลังทอด
				</div>
			</div>
			<div class="right">
				<div class="pic">
					<img src="http://placehold.it/187x180">
				</div>
				<div class="pictext">
					<h4>กล้วยทอด</h4>
					กำลังทอด
				</div>
			</div>

			<div class="left">
				<div class="pic">
					<img src="http://placehold.it/187x180">
				</div>
				<div class="pictext">
					<h4>กล้วยทอด</h4>
					กำลังทอด
				</div>
			</div>
			<div class="right">
				<div class="pic">
					<img src="http://placehold.it/187x180">
				</div>
				<div class="pictext">
					<h4>กล้วยทอด</h4>
					กำลังทอด
				</div>
			</div>

			<div class="left">
				<div class="pic">
					<img src="http://placehold.it/187x180">
				</div>
				<div class="pictext">
					<h4>กล้วยทอด</h4>
					กำลังทอด
				</div>
			</div>
			<div class="right">
				<div class="pic">
					<img src="http://placehold.it/187x180">
				</div>
				<div class="pictext">
					<h4>กล้วยทอด</h4>
					กำลังทอด
				</div>
			</div>

		<?php require_once('required/menu_bar.php'); ?>
		</div>
	</body>
</html>
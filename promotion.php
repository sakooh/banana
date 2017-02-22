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
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>
	<body>
	<div class="container">

		<div class="on">
		<?php 
		$id = $_user['email'];
					$sql = "SELECT * FROM user WHERE email='$email'";
					$query = mysqli_query($conn,$sql) or die ("$sql".mysqli_error($conn));
					while ($result = mysqli_fetch_assoc($query)) {
			for ($i=0; $i < $result['point']; $i++) { 
			
		 ?>

			<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=50&h=50" alt="">
		<?php }} ?>
		<p id="sum_point" name="sum_point" style="height: 100px;"></p>
		</div>
		<div class="under">
			 <div class="undertext">สะสมกล้วย นำไปแลกกล้วยทอดได้ 1 กล่อง </div>
			 <div class="underbutton" style="text-align:center;">
			 <?php 
					$id = $_user['email'];
					$sql = "SELECT * FROM user WHERE email='$email'";
					$query = mysqli_query($conn,$sql) or die ("$sql".mysqli_error($conn));
					while ($result = mysqli_fetch_assoc($query)) {
				?>
				<form action="" method="POST" id="scan" name="scan">
				<div class="card">
					<center style="height:220px;">
						<input type="code" name="code" placeholder="PromotionCode" style=" border-radius: 5px; height: 30px;padding:10px; margin:2px;"><br>
					
						<button type="submit" name="submit" style="background-color: #ffac41; border: 1px solid white; border-radius: 15px; height: 30px; width:49%;">Get Promotion</button>
					</center>

				</div>
					
			 
			 </div>
			 <?php } ?>
		</div>

		<?php require_once('required/menu_bar.php'); ?>
		</div>
		<script>
			$(document).ready(function()
			    {
					$('#scan').on('submit',function(e)
						{
							$.ajax(
								{
									url:'scan_point.php',
									data:$(this).serialize(),
									type:'POST',
									success:function(data)
										{
											console.log(data);
											$('#sum_point').html(data);
										},
									
								});
							e.preventDefault();
						});
				});
		</script>
	</body>
</html>
<?php
	require_once('required/connect.php');
	$id = $_user['email'];
	$sql = "SELECT * FROM codepromotion INNER JOIN `user` ON codepromotion.`code` WHERE email = '$id'";
	$query = mysqli_query($conn,$sql) or die ("$sql".mysqli_error($conn));
	while ($result = mysqli_fetch_assoc($query)) {
		if (isset($_POST['code'])){
	    $code = $_POST['code'];
	    
	    if ($result['code'] == $code) {
	    	
	    $sum = $result['point'];
		
	    	 $sum++;
	    	 

	    }else{
	    	$sum = $result['point'];
	    }
		
	}
	}
	$sql = "UPDATE `user` SET point='$sum' WHERE email='$id'";
	$query = mysqli_query($conn,$sql) or die ("$sql".mysqli_error($conn));
	
	
 ?>
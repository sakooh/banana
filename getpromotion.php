<?php
	require_once('required/connect.php');
	$_code = $_POST['code'];

	$sql = "SELECT * FROM codepromotion WHERE code='$_code'";
	$query = mysqli_query($conn,$sql) or die ("$sql".mysqli_error($conn));
	while ($result = mysqli_fetch_assoc($query)) {
	if($_code == $result['code']) {
			echo "string";
			exit();
	} else {
		echo '<script>alert("code ไม่ถูกต้อง");</script>';
		exit();
	}
}
?>
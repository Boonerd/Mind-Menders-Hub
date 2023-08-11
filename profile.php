<?php
include 'connect.php';
session_start();
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
</head>
<body>
	<div class="container1">
		<div class="profile">
 	<?php
 		$sql = "SELECT * FROM mindmembers WHERE Username = '$username'";
 		$result = mysqli_query($connect,$sql) or die('query failed');
 		if(mysqli_num_rows($result)>0){
 			$fetch = mysqli_fetech_assoc($result);
 		}
	?>
	<h3><?php echo $result['fisrtname']; ?></h3>
</div>
</div>
</body>
</html>
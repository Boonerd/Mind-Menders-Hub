<?php
include 'connect.php';
 if ($_SERVER['REQUEST_METHOD']=='POST') {
 	$Username = $_POST['username'];
 	$Password = $_POST['password'];

 	$sql = "SELECT * FROM mindmembers WHERE Username = '$Username' AND Password = '$Password' ";
 	$result = mysqli_query($connect,$sql);
 	if($result){
 		$rownumbers = mysqli_num_rows($result);
 		if (($rownumbers > 0)) {
 			session_start();
 			$_SESSION['username'] = $Username;
 			header('location:home.php');
 			}else{
 				echo "<script>alert('Username or password is incorrect')</script>";
 			}
 		}
 	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log in</title>
<body>
  <style type="text/css">
 *{
    font-family: DM Serif Display;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline:none;
    border: none;
    text-decoration: none;
}
body{
    background-color: #ca7aac;;
}
.formContainer{
    min-height: 100hv;
    display:flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 70px;

}

.formContainer form{
    padding:20px;
    border-radius: 15px;
    box-shadow:0 5px 10px rgba(0, 0, 0, 0.1);
    background: #fff;
    text-align: center;
    width: 500px;
}
.formContainer form h2 {
    font-size: 40px;
    text-transform: uppercase;
    margin-bottom: 10px;
    color: #EF0B81;
}
.formContainer form input
{
    width: 100%;
    padding: 10px 15px;
    font-size: 20px;
    margin: 8px 0px;
    background: #eee;
    border-radius: 20px;
}
.formContainer form .formButton{
    background-color: #EF0B81;
}
.formContainer form .formButton:hover{
    background: #8A0047;
    color: white;
}
.formContainer form p{
    margin-top: 10px;
    font-size: 20px;
    color:black;
}
.formContainer form p a{
    color: #8A0047;
}

 </style>
</head>
<body>
    <div class="formContainer">
  <form method="post">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Enter your username"><br>
    <div class="usernameerror"></div>
    <input type="password" name="password" placeholder="Enter your password">
    <div class="passerror"></div>
    <input type="submit" name="submit" value="login" class="formButton">
    <p>Already have an account?<a href="signup.php">Sign up</a></p>
  </form>
</div>S
</body>
</html>
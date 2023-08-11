<?php
    include 'connect.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $Firstname = $_POST['FirstName'];
        $Middlename = $_POST['MiddleName'];
        $Lastname = $_POST['LastName'];
        $Username = $_POST['UserName'];
        $Email = $_POST['Email'];
        $Dateofbirth = $_POST['dateofbirth'];
        $Password = $_POST['Password'];

        $sql = "INSERT INTO mindmembers(Firstname,Middlename,Lastname,Username,Email,DateofBirth,Password) VALUES('$Firstname','$Middlename','$Lastname','$Username','$Email','$Dateofbirth','$Password')";
        $result = mysqli_query($connect,$sql);
        if ($result) {
            header('location:Login.php');
        }else{
            echo "Not successful";
        }

    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
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
  <form method="post" onsubmit="return myFunction();" >
    <h2>Signup</h2>
    <input type="text" id="firstname" name="FirstName" placeholder ="Enter your firstname"><br>
    <div class="firstnameerror"></div>
    <input type="text" id="middlename" name="MiddleName" placeholder="Enter your middlename"><br>
    <div class="middlenameerror"></div>
    <input type="text" id="lastname" name="LastName" placeholder="Enter your lastname"><br>
    <div class="lastnameerror"></div>
    <input type="text" id="username" name="UserName" placeholder="Enter your username"><br>
    <div class="usernameerror"></div>
    <input type="email" id="email" name="Email" placeholder="Enter your email"><br>
    <input type="date" id="dob" name="dateofbirth" placeholder="Enter your date of birth" ><br>
    <div class="ageerror"></div>
    <input type="password" id="password" name="Password" placeholder="Enter your password">
    <div class="passerror"></div>
    <input type="submit" name="submit" value="Sign up" class="formButton">
    <p>Already have an account?<a href="Login.php">Login</a></p>
  </form>
</div>
<script src="signup.js"></script>
</body>
</html>

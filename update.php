<?php
    include 'connect.php';
    $id = $_GET['updateid']; 
    $sql = "SELECT * FROM mindmembers WHERE id='$id'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    $Firstname = $row['Firstname'];
    $Middlename = $row['Middlename'];
    $Lastname = $row['Lastname'];
    $Username = $row['Username'];
    $Email = $row['Email'];
    $Dateofbirth = $row['DateofBirth'];
    $Password = $row['Password'];
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $Firstname = $_POST['FirstName'];
        $Middlename = $_POST['MiddleName'];
        $Lastname = $_POST['LastName'];
        $Username = $_POST['UserName'];
        $Email = $_POST['Email'];
        $Dateofbirth = $_POST['dateofbirth'];
        $Password = $_POST['Password'];

        $sql = "UPDATE mindmembers set id='$id', Firstname='$Firstname', Middlename='$Middlename',Lastname='$Lastname',Username='$Username',Email='$Email',DateOfBirth ='$Dateofbirth',Password='$Password' WHERE id=$id";
        $result = mysqli_query($connect,$sql);
        if ($result) {
           header('location:display.php');
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
    <a href="home.php">Home</a>
    <a href="display.php">Display</a>
    <div class="formContainer">
  <form method="post">
    <h2>Update</h2>
    <input type="text" id="firstname" name="FirstName" placeholder ="Enter your firstname" value="<?php echo $Firstname ?>"><br>
    <div class="firstnameerror"></div>
    <input type="text" id="middlename" name="MiddleName" placeholder="Enter your middlename" value="<?php echo $Middlename?>"><br>
    <div class="middlenameerror"></div>
    <input type="text" id="lastname" name="LastName" placeholder="Enter your lastname"value="<?php echo $Lastname?>"><br>
    <div class="lastnameerror"></div>
    <input type="text" id="username" name="UserName" placeholder="Enter your username"value="<?php echo $Username?>"><br>
    <div class="usernameerror"></div>
    <input type="email" id="email" name="Email" placeholder="Enter your email" value="<?php echo $Email?>" ><br>
    <input type="date" id="dob" name="dateofbirth" placeholder="Enter your date of birth"value="<?php echo $Dateofbirth?>">><br>
    <div class="ageerror"></div>
    <input type="password" id="password" name="Password" placeholder="Enter your password"value="<?php echo $Password?>">
    <div class="passerror"></div>
    <input type="submit" name="submit" value="Update" class="formButton">
  </form>
</div>
<script src="signup.js"></script>
</body>
</html>
<?php 
include 'connect.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
 $Username = $_POST['username'];
 $Email = $_POST['email'];
 $Message = $_POST['message'];

 $sql = "INSERT INTO contact(Username,Email,Message) VALUES('$Username','$Email','$Message')";
 $result = mysqli_query($connect,$sql);
 if($result){
    alert("Thank you for you response we will communicate via your email");
    }else{
    echo "Unsuccessful";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <h1 style="color: aliceblue;">Mind Menders Hub</h1>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="display.php">User profiles</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="signup.php" target="_blank">Sign Up</a></li>
                </ul>
            </div>
        </nav>
    </header>
   <h1>Contact Us</h1>
    <section class="contact-info">
        <h2 style="text-align:center;">Contact Information</h2>
        <p>If you have any questions or inquiries, feel free to reach out to us:</p>
        <ul>
            <li>Email: <a href="mailto:info@mindmendershub.com">info@mindmendershub.com</a></li>
            <li>Phone: _+254768904530</li>
            <li>Address: 123 Mindful Street,Nairobi  City</li>
        </ul>
    </section>

    <section class="form">
        <h2 style="text-align:center;">Contact Form</h2>
        <form  method="post">
            <label for="name">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br>

            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>Contact us for more information: MindMendersHub@email.com</p>
    </footer>
</body>
</html>

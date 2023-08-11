<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mind-Menders Hub</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div><p style="text-align:center;">Welcome to your profile,<?php echo $_SESSION['username'];?></p></div>

        <nav>
            <h1 style="color: aliceblue;">Mind Menders Hub</h1>
                <div class="containerr">
                
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.html">About Us</a></li>
                     <li><a href="display.php">User profiles</a></li>
                    <li><a href="signup.php" target="_blank">Sign Up</a></li>
                    <li style="float: right;"><a href="Logout.php">Log out</a></li>
                </ul>
            </div>
        </nav>
    </header>
    
    <section class="hero">
        <div class="container">
            <h2 style="color: black;">Your Mental well-being Matters</h2>
            <p style="color: black;">We are here to provide support, understanding, and guidance on your mental health journey.</p>
            <div class="image-container">
                <img src="water.jpg" alt="Water" width="500px" height="300px"> <img src="grow.jpg" alt="Growth" width="500px" height="300px">
              </div>
              
            <button class="button button1" style="text-decoration: none;"><a href="signup.php">Get Started</a></button>
        </div>
    </section>
    
    <section class="services">
        <div class="container">
<h3>Our Services</h3>
<div class="gallery">
    <h4>Counseling</h4>
  <a target="_blank" href="m3.jpeg">
    <img src="m3.jpeg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">One-on-one counseling sessions with licensed therapists to address your specific needs.</div>
</div>

<div class="gallery">
    <h4>Support Groups</h4>
    <a target="_blank" href="m1.jpeg">
    <img src="m1.jpeg" width="600" height="400">
  </a>
  <div class="desc">Join our supportive community through group therapy sessions and connect with others.</div>
</div>

<div class="gallery">
    <h4>Online Resources</h4>
  <a target="_blank" href="m2.png">
    <img src="m2.png" width="600" height="400">
  </a>
  <div class="desc">Access a wealth of online resources, articles, and self-help tools to aid your mental health.</div>
</div>
<div class="container">
            <h3>About Us</h3>
            <p>We are a dedicated team of mental health professionals committed to improving the lives of our clients.</p>
            <p>Our mission is to provide accessible, compassionate, and effective mental health services to individuals of all ages.</p>
        </div>

    </section>
    <div>
    <section class="about">
        <div class="container">
            <h3>Contact Us</h3>
            <p style="text-align:center;">We are a dedicated team of mental health professionals committed to improving the lives of our clients.</p>
            <p style="text-align:center;">Our mission is to provide accessible, compassionate, and effective mental health services to individuals of all ages.</p>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <p>&copy; 2023 Mental Health Center. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>

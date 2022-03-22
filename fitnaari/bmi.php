

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=IBM+Plex+Sans:wght@700&family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Trispace:wght@600&display=swap" rel="stylesheet">
    
  </head>
  <body>
     <!-- NAVBAR -->

     <div class="navbar">
    <!-- MENU ICON -->
    <div id="mySidebar" class="sidebar" style="float:left;background-color: #faebeb;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <!-- <a href="aboutus.php">About us</a> -->
    <a href="myprofile.php">My Profile</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="bmi.php">BMI Calculator</a>
    <a href="contact.php">Contact Us</a>
    <a href="faqs.php">FAQS</a>
    <a href="logout.php">Logout</a>
  </div>
  <div id="main" style="float:left;">
   <button class="openbtn" onclick="openNav()" style=" background-color: #faebeb;">☰</button>
 </div>

    <div class="logo" style="float:left;">
      <!-- <img src="images/e1.png" width="250px" height="95px" > -->
      <img src="images/fitnaarilogo.png" width="250px" height="100px">
    </div>

      <div style="float:right; padding-top:30px; padding-right: 50px;">
        <a href="#contact" class="btn">BMI</a>
      </div>
      </div>

<div class="connect">
  <img class="contact-image" src="images/BMI.jpg">
</div> 

<div id="contact" class="add-info">
<div class="info-form">
<h2 class="heading">BMI Calculator</h2>


    
<?php

    include 'signinform.php';
  
    $conn = new mysqli("localhost","root","","women_wellness");
    
    $a = $_SESSION['Email'] ;
  

  
    $sql=mysqli_query($conn,"SELECT * FROM createprofile where email='$a'");
    $row  = mysqli_fetch_array($sql);
    $age = $row['age'];
    $height= $row['height'];
    $weight= $row['weight'];
    $bmi = $weight/($height*$height)*10000;
    $res = round($bmi,2)

    ?>
    <br>
    <br>
<h3 class="heading2" style="color:#162252; font-size:20px; margin-left:50px">Your Age: <?php echo $age ?></h3>
<br>
    
<h3 class="heading2" style="color:#162252; font-size:20px; margin-left:50px">Your Height: <?php echo $height ?></h3>
<br>
    
<h3 class="heading2" style="color:#162252; font-size:20px; margin-left:50px">Your Weight: <?php echo $weight ?></h3>  
<br>

<h4 class="heading2" style="color:#162252; font-size:25px; margin-left:320px">YOUR BMI</h3>
<br>
<h4 class="heading2" style="color:#162252; font-size:28px; margin-left:350px"><?php echo $res ?> </h4>
    
</div>
<div class="info-add">
  <h2 class="heading" style="color: #fff;">DIAGNOSIS:</h2><br>
  <pre>

  </pre>
  <h4 class="heading2">You are considered to be:</h3>
    <pre class="message1">
    <?php


if ($bmi < "16") {
  echo "Severse Thinness";
} elseif ($bmi> "16" and $bmi <= "17") {
  echo "Moderate Thinness";
} elseif ($bmi> "17" and $bmi <= "18.5") {
    echo "Mild Thinness";
  }elseif ($bmi> "18.5" and $bmi <= "25") {
    echo "Normal";
  }elseif ($bmi> "25" and $bmi <= "30") {
    echo "Overweight";
  }elseif ($bmi> "30" and $bmi <= "35") {
    echo "Obese Class I";
  }elseif ($bmi> "35" and $bmi <= "40") {
    echo "Obese Class II";
  }else {
  echo "Obese Class III";
}
?>
<br>

    </pre class="message1">
  <h4 class="heading2">Exercises for you:</h3>
    <pre class="message1">
        <?php
    if ($bmi < "16") {
        echo " Pushup \n \t Pull ups \n \t Lunges \n \t Squats \n \t Benchpress \n \t Overhead Press \n \t Healthy Diet";
} elseif ($bmi> "16" and $bmi <= "17") {
    echo " Pushup \n \t Pull ups \n \t Lunges \n \t Squats \n \t Benchpress \n \t Overhead Press \n \t Healthy Diet";
} elseif ($bmi> "17" and $bmi <= "18.5") {
    echo " Pushup \n \t Pull ups \n \t Lunges \n \t Squats \n \t Benchpress \n \t Overhead Press \n \t Healthy Diet";
  }elseif ($bmi> "18.5" and $bmi <= "25") {
    echo " Pushup \n \t Running \n \t Cardio \n \t Walking  \n \t Healthy Diet";
  }elseif ($bmi> "25" and $bmi <= "30") {
    echo " Modified Pushup \n \t Side leg lifts \n \t Bridges \n \t Modified Squats \n \t Knee lift with ball \n \t Healthy Diet";
  }elseif ($bmi> "30" and $bmi <= "35") {
    echo " Modified Pushup \n \t Side leg lifts \n \t Bridges \n \t Modified Squats \n \t Knee lift with ball \n \t Healthy Diet";
  }elseif ($bmi> "35" and $bmi <= "40") {
    echo " Modified Pushup \n \t Side leg lifts \n \t Bridges \n \t Modified Squats \n \t Knee lift with ball \n \t Healthy Diet";
  }else {
  echo " Modified Pushup \n \t Side leg lifts \n \t Bridges \n \t Modified Squats \n \t Knee lift with ball \n \t Healthy Diet";
  
}
?>
    </pre>

</div>

</div>

<div class="copyright">
  <div class="container-fluid" style="padding-top:15px;">
    <a class="footer-link" href="https://www.facebook.com/" title="GO TO my Facebook profile"><i class="social-icon fab fa-facebook-f"></i></a>
    <a class="footer-link" href="https://www.gmail.com/" title="GO TO my Gmail"> <i class="social-icon fas fa-envelope"></i></a>
    <a class="footer-link" href="https://www.instagram.com/" title="GO TO my Instagram profile">  <i class="social-icon fab fa-instagram"></i></a>
    <a class="footer-link" href="https://twitter.com/" title="GO TO my Twitter profile">  <i class="social-icon fab fa-twitter"></i></a>


    <p>All Rights Reserved. © Copyright 2022 FitNaari.</p>

  </div>
</div>

    <script type="text/javascript" src="index.js"></script>
  </body>
</html>

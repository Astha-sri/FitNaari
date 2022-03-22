<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <style media="screen">
    
body{
    background-color: 	  #ed5e5e;
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: cover;
}
    th {
      text-align: left;
      font-weight: 900;
      font-size: 22px;
      padding-right: 35px;
      padding-top: 10px;
      padding-bottom: 10px;
     color: #000;
    }
    td{
      font-weight: light;
      font-size: 22px;
      color: #000;
    }
    .info-class{
        background-color: 	  #fad1d1;
      position: relative;
      border-radius: 70px;
      width: 800px;
      margin-left: 350px;
      padding-bottom: 100px;
      box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
      color: #000;
    }
    table{
      margin-left: 200px;

    }

    h2, h3 {
      text-align: center;
      font-weight: bolder;
      color: white;
    }
    
    .reserve{
      width: 250px;
      radius: 20px;
      font-size: 20px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      outline: none;
      color: #fff;
      background-color: black ;
      border: none;
      border-radius: 10px;
      box-shadow: 0 9px #999;
      position: relative;
      top: 20px;
      left: 300px;
    }
    .reserve:hover {
      background-color: gray;
      color: black;
     }

    .reserve:active {
      background-color: #226597;
      box-shadow: 0 5px #d9e4dd;
      transform: translateY(4px);}
    a {
      color: white;
      font-weight: bolder;
    }
    a:link, a:visited, a:active{
      background-color: transparent;
      text-decoration: none;
    }
    }
  </style>
  <body>
      <!-- NAVBAR -->
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
        <a href="#contact" class="btn">My Profile</a>
      </div>
      </div>
      <br><br><br><br><br><br><br>
  <?php

include 'signinform.php';
$conn = new mysqli("localhost","root","","women_wellness");

$a = $_SESSION['Email'];
$sql=mysqli_query($conn,"SELECT * FROM createprofile where email='$a'");
$row  = mysqli_fetch_array($sql);
$fName = $row['fname'];
$lName = $row['lname'];
$age = $row['age'];
$height= $row['height'];
$weight= $row['weight'];
$hblevel = $row['hblevel'];
$test = $row['test'];
$other = $row['other'];

?>
    <h2 >MY PROFILE</h2>
  
    <div class="info-class">
        
      <table>
      <br>
        <br>
        <h2 style="color: #000;"> Details are as following:</h2>
        <tr>
          <th style="color: #000;">Name:</th>
          <td><?php  echo  $fName." ".$lName." " ?></td>
        </tr>
        <tr>
          <th>Age:</th>
          <td><?php  echo "$age" ?></td>
        </tr>
        <tr>
          <th>Height:</th>
          <td><?php  echo "$height" ?></td>
        </tr>
        <tr>
          <th>Weight:</th>
          <td><?php  echo "$weight" ?></td>
        </tr>
        <tr>
          <th>Haemoglobin Level:</th>
          <td><?php  echo "$hblevel" ?></td>
        </tr>
        <tr>
          <th>Test:</th>
          <td><?php  echo "$test" ?></td>
        </tr>
        <tr>
          <th>Others:</th>
          <td><?php  echo "$other" ?></td>
        </tr>
    

      </table>
    
      <a href="dashboard.php"><button class="reserve" type="button" name="back" style="padding:10px 10px;">OKAY!</button></a>

    </div>

    <script type="text/javascript" src="index.js"></script>

  </body>
</html>

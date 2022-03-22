<?php

 // Database connection
 $conn = new mysqli("localhost","root","","women_wellness");

if(isset($_POST['save'])){
  if($conn->connect_error){
    die("Connect failed: %s\n" .$conn -> error);
  }else{

    $fName = $_POST['fname'];
    $lName = $_POST['lname'];
    $email = $_POST['email'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $hblevel = $_POST['hb'];
    $age = $_POST['dis'];
    $test = $_POST['dis1'];
    $other = $_POST['other'];
   

    $stmt = $conn->prepare("INSERT INTO createprofile (fname, lname, email, height, weight, hblevel,age,test,other)  VALUES (?, ?,?, ?, ?, ?, ? ,?,?)");
    //echo $conn -> error;die;
    $stmt->bind_param("sssdddsss", $fName, $lName, $email, $height, $weight, $hblevel, $age, $test, $other);
    $stmt->execute();


  echo '<script type="text/javascript"> alert("Profile Saved. Please Login again."); </script>';
  header("Location: loginpage.php"); 
    $stmt->close();



    $conn->close();
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Create Profile</title>
</head>

<body>
    <div class="container">

        <div class="content">
            <div class="title">Create profile</div>
            <form action="#" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="fname" placeholder="Enter your First name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" name="lname" placeholder="Enter your Last name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" placeholder="Enter your Email" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Phone number</span>
                        <input type="text" name="mobile" placeholder="Enter your phone number" required>
                    </div>


                    <div class="input-box">
                        <span class="details">Height</span>
                        <input type="text" name="height" placeholder="Enter your height (in cm)" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Weight</span>
                        <input type="text" name="weight" placeholder="Enter your weight (in kg)" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Haemoglobin Level</span>
                        <input type="text" name="hb" placeholder="Enter your Haemoglobin level" required>
                    </div>
                </div>


                <div class="category">
                    <p>Please enter your age</p>
                    <input type="text" name="dis" placeholder="Enter your age" required>
          
                </div>


                <p>Any test taken: </p>
                <input type="text" name="dis1" placeholder="Enter test name" required>
 
<br>
<br><br>


                <span class="details">Any other information:</span>
                <input type="text" name="other"  required>

                <div class="button">
                    <input type="submit" name = "save" value="Submit">
                </div>
            </form>
        </div>
    </div>

</body>

</html>
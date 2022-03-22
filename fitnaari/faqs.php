<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FAQS</title>
<link rel="stylesheet" href="styles.css">
<link rel="icon" href="favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=IBM+Plex+Sans:wght@700&family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&display=swap" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Satisfy&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<script src="scripts/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="scripts/jquery-scrolltofixed-min.js" type="text/javascript"></script>

<style>
  .navbar{
  width: 100%;
  height: 100px;
  background-color: #fff;
  position: fixed;
  top:0;
  right: 0;
  left: 0;
  z-index: 1;
  border-bottom: #162252;
}

/* The sidebar menu */
.sidebar {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 5; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #faebeb; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
}

/* The sidebar links */
.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #162252;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
  color: #6666FF;
}

/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* The button used to open the sidebar */
.openbtn {
  font-size: 30px;
  cursor: pointer;
  background-color: #faebeb;
  color:#162252;
  padding: 10px 20px;
  border-radius: 100%;
  border-color:  #AAAAFF;
}

.openbtn:hover {
  background-color: #FF416C;
}

#main {
  transition: margin-left .5s; /* If you want a transition effect */
  padding: 20px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

.logo{
  width: 50px;
  height: 50px;
  padding-left: 10px;
}

.links{
  float:left;
  padding:35px 0 0px 500px;
}

.hlink{
  font-weight: bolder;
  font-size: 22px;
  font-family: 'IBM Plex Sans', sans-serif;
}

.hlink:link, .hlink:visited, .hlink:active {
  color: #284c63;
  background-color: transparent;
  text-decoration: none;
}


.accordion {
  background-color: #faebeb;
  color: #444;
  cursor: pointer;
  padding: 18px;
  padding-left: 80px;
  padding-bottom: 20px;
  width: 1200px;
  border: 0.2 solid black;
  text-align: left;
  /* outline: 0.5px solid; */
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  font-weight: bold;
  border-radius: 10px;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  text-align: left;
  padding-left: 260px;
  font-size: 15px;
  font-weight: bold;
  color: #284c63;
}
.accordion:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  /* color: #777; */
  color:black;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}
</style>
</head>
<body>
  <div class="navbar">
    <!-- MENU ICON -->
    <div id="mySidebar" class="sidebar" style="float:left;">
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
   <button class="openbtn" onclick="openNav()">☰</button>
 </div>

    <div class="logo" style="float:left;">
      <!-- <img src="images/e1.png" width="250px" height="95px" > -->
      <img src="images/fitnaarilogo.png" width="250px" height="120px">
    </div>

    <div style="float:right; padding-top:30px; padding-right: 20px;">
      <a href="#faq" class="btn">FAQS</a>
    </div>
    </div>
  </div>

<br><br><br><br><br><br>
  <div class="hfaq">
  <h1 >Frequently Asked Questions</h1>
</div>
<br><br><br>

<div id="faq" class="faq">
<button class="accordion">What medications can I safely take when I am pregnant?</button>
<div class="panel">
  <pre>
    You can take prenatal vitamins, most of which are now available without a prescription. 
    For any other medications, vitamins, herbal remedies or supplements, check with the doctor
    before taking them.</pre>
</div>
<br>
<br>


<button class="accordion">How often should I get a pelvic exam?</button>
<div class="panel">
  <pre>
    The American College of Obstetricians and Gynecologists (ACOG) recommends women 21 years
    old and older have a yearly pelvic exam. However, not everyone agrees. A US Preventative 
    Services Task Force determined that there was not enough evidence to assess benefits or 
    harms on an annual exam in nonpregnant women without symptoms for screenings for cervical 
    cancer and sexually transmitted diseases (STDs). It is best to talk to your doctor about 
    your situation and decide together a schedule for exams.</pre>
</div>
<br>
<br>

<button class="accordion">What exercise is good for the more mature woman?</button>
<div class="panel">
  <pre>
    ALL exercise is good for the mature woman! There is a need for cardiovascular work, strength 
    training, stretching and balance work.</pre>
</div>
<br>
<br>

<button class="accordion">Can I exercise if I have osteoporosis?</button>
<div class="panel">
  <pre>
    Yes, and it is preferable if you do. However, there are certain guidelines to follow so make 
    sure you have a trainer who is educated in osteoporosis.</pre>
</div>
<br>
<br>

<button class="accordion">What are some essential exercises for birth preparation?</button>
<div class="panel">
  <pre>
    These would include the strengthening and stretching of the pelvic floor and creating supple muscle 
    strength in the muscle groups surrounding the pelvis. This includes the Gluts, Abdominals, Hip 
    ab/adductors and Back Extensors.</pre>
</div>
<br>
<br>

<button class="accordion">When is it safe to exercise after the birth?</button>
<div class="panel">
  <pre>
    It depends on how you define “exercise”. If you run or spin, or regularly work out with weights, 
    then your best bet is to wait at least 6 weeks before you begin. But if your definition of exercise 
    is actually movement- then you may begin within hours of your birth with simple movements that include 
    breathing and gentle reactivation of the abdominals and pelvic floor. These postnatal movement programs 
    are included in our Gentle Birth Workout series.
  </pre>
</div>
<br>
<br>

<button class="accordion">I am gaining weight, what can I do?</button>
<div class="panel">
  <pre>
    When all is said and done- eating less and exercising more is STILL the best formula for ;losing weight. 
    Looking at WHAT you are eating also counts. For the more mature woman, eating less wheat seems to have a 
    good effect on weight.</pre>
</div>
<br>
<br>

<button class="accordion">I feel like I am losing muscle, what should I do?</button>
<div class="panel">
  <pre>
    Strength training during the later years of our lives is important to keep muscle mass and also increase 
    or prevent further bone loss.</pre>
</div>
<br>
<br>

<button class="accordion">What is Pubic bone separation (pubis symphasis derangement)?</button>
<div class="panel">
  <pre>
    Pubic bone separation may occur during pregnancy when there is trauma to the pelvis, such as a sudden fall, 
    a quick movement of the leg away from the body or a gradual stretching of the ligament surrounding the bone. 
    Trauma during the birth itself may cause this condition. Care should be taken while exercising and stretching. 
    Most hip and leg work where one or both legs are extended sideways may be contraindicated. These types of 
    exercises that are performed with resistance are not recommended. Stretching that requires both legs to be 
    apart are also not recommended.</pre>
</div>
<br>
<br>

<button class="accordion">What is the first step to increase awareness?</button>
<div class="panel">
  <pre>
    Every hour, remind yourself, “Wow! I'm still alive”. You may think this is silly, but over a hundred thousand people 
    will not wake up tomorrow morning. So, if you are still alive tomorrow morning, smile because the fact that you woke 
    up is not a small thing. Then check whether the few people who matter to you are alive - great! At least a million people 
    lost someone dear to them, but if none of those dear to you are gone today, fantastic!</pre>
</div>
<br>
<br>

<button class="accordion">Are women at a higher risk for heart disease than men?</button>
<div class="panel">
  <pre>
    For years, both the medical community and the public viewed heart disease as a man’s disease. This has been proven false; 
    in fact, any person with the right risk factors and the right family history has the potential to develop heart disease. 
    About the same number of women and men die of heart disease each year, however, fewer women than men survive their first 
    heart attack, and women have a higher risk of stroke than men.</pre>
</div>
<br>
<br>

<button class="accordion">What can I do to reduce my risk of developing heart disease?</button>
<div class="panel">
  <pre>
    There are both non-modifiable (things you can’t change) and modifiable risks (things you can change) associated with heart disease.</pre>
</div>
<br>

<br>


<div class="copyright" style="margin-top:70px;">
  <a class="footer-link" href="https://www.facebook.com/" title="GO TO my Facebook profile"><i class="social-icon fab fa-facebook-f"></i></a>
  <a class="footer-link" href="https://www.gmail.com/" title="GO TO my Gmail"> <i class="social-icon fas fa-envelope"></i></a>
  <a class="footer-link" href="https://www.instagram.com/" title="GO TO my Instagram profile">  <i class="social-icon fab fa-instagram"></i></a>
  <a class="footer-link" href="https://twitter.com/" title="GO TO my Twitter profile">  <i class="social-icon fab fa-twitter"></i></a>


  <p>All Rights Reserved. © Copyright 2022 FitNaari.</p>

</div>

</div>


<script>
function myFunction(x) {
  x.classList.toggle("change");
}

/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
</script>

</body>
</html>

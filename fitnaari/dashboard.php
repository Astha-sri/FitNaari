<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
   
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   
 
    <link rel="stylesheet" href="st.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<link rel="stylesheet" type="text/css" href="css/jquery.convform.css">
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.convform.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
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

 </style>
   
</head>
<body>
<div class="navbar" style="background-color:#fad1d1 ">
      <!-- MENU ICON -->
      <div id="mySidebar" class="sidebar" style="float:left;background-color:#fad1d1" >
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <!-- <a href="aboutus.php">About us</a> -->
      <a href="myprofile.php">My Profile</a>
      <a href="dashboard.php">Dashboard</a>
      <a href="bmi.php">BMI Calculator</a>
      <a href="contact.php">Contact Us</a>
      <a href="faqs.php">FAQS</a>
      <a href="logout.php">Logout</a>
    </div>
    <div id="main" style="float:left;background-color:#fad1d1 ">
     <button class="openbtn" onclick="openNav()">☰</button>
   </div>
  
      <div class="logo" style="float:left;">
        <!-- <img src="images/e1.png" width="250px" height="95px" > -->
        <!-- <img src="images/fitnaarilogo.png" width="250px" height="100px"> -->
      </div>
  
      <div style="float:right; padding-top:30px; padding-right: 20px;">
        <!-- <a href="#faq" class="btn">FAQS</a> -->
      </div>
      </div>
    </div>
    <br>
 
    <script>
        AOS.init();
    </script>
    <br>
    <section class="hiw" style="background-color:#fad1d1 ">
        <div style="width: 100%; margin: auto;"><h1 class="htitle" data-aos="fade-up" style="font-size: 50px; padding-top:30px">Select the Category </h1></div>
       
        <div class="bcont">
            <!-- <div class="card" data-aos="fade-down">
                <div class="block"><a href="10-15.html"><img height="90%" width="100%" src="images/logo1.png" alt=""> </a></div>
                <p class="val1">Age -> 10-15</p>
               
            </div> -->
            <div class="card" data-aos="fade-up" style="background-color:#fad1d1 ;border-color:#fad1d1">
                <div class="block" style="background-color:#fff"><a href="age.html"><img height="90%" width="90%" src="images/disease.png" alt=""></a></div>
                <p class="htitle" >Diseases</p>
               
            </div>
            <div class="card" data-aos="fade-down" style="background-color:#fad1d1;border-color:#fad1d1">
                <div class="block" style="background-color:#fff"><a href="test.html"><img style="margin: 18px 0 0 9px;" height="80%" width="90%" src="images/test.png" alt=""></a></div>
                <p class="htitle">Tests</p>
               
            </div>
            <!-- <div class="card" data-aos="fade-down">
                <div class="block"><a href="25-30.html"><img height="90%" width="100%" src="images/logo2.png" alt=""></a></div>
                <p class="val1">Age -> 25+</p>
               
            </div> -->
           
        </div>
       
 
       <!-- ChatBot -->

 

<!-- ChatBot -->
<div class="chat_icon">
   <i class="fa fa-comments" aria-hidden="true"></i>
</div>
 
<div class="chat_box">
   <div class="my-conv-form-wrapper">
       <form action="" method="GET" class="hidden">
 
     <select data-conv-question="Hello! How can I help you" name="category">
       <option value="Discription">About Disease description?</option>
       <option value="Solution">About the solution of a problem?</option>
     </select>
 
     <div data-conv-fork="category">
       <div data-conv-case="Discription">
         <!-- <input type="text" name="domainName" data-conv-question="Please, select your issue.">     -->
      
       <select data-conv-question="Please, Select the disease to know about its discription." name="categories">
           <option value="Hi">Heart Issues?</option>
           <option value="Oi">Obesity Issue?</option>
           <option value="pi">Periods Issue?</option>
       </select>
      
      
      
       <div data-conv-fork="categories">
           <div data-conv-case="Hi">
               <input type="text" data-conv-question="A type of disease that affects the heart or blood vessels. The risk of certain heart diseases may be increased by smoking, high blood pressure, high cholesterol, unhealthy diet, lack of exercise, and obesity. The most common heart disease is coronary artery disease (narrow or blocked coronary arteries), which can lead to chest pain, heart attacks, or stroke. Other heart diseases include congestive heart failure, heart rhythm problems, congenital heart disease (heart disease at birth), and endocarditis (inflamed inner layer of the heart). Also called cardiovascular disease.">
           </div>
           <div data-conv-case="Oi">
               <input type="text"  data-conv-question="Obesity is serious because it is associated with poorer mental health outcomes and reduced quality of life. Obesity is also associated with the leading causes of death in the United States and worldwide, including diabetes, heart disease, stroke, and some types of cancer.">
           </div>
           <div data-conv-case="pi">
               <input type="text" data-conv-question="Irregular periods. Your periods are considered irregular if your menstrual cycle is shorter or longer than average. This means that the time from the first day of your last period up to the start of your next period is less than 24 days or more than 38 days.">
           </div>
       </div>
       </div>
    
 
 
 
       <div data-conv-case="Solution" data-conv-fork="first-question2">
         <!-- <input type="text" name="companyName" data-conv-question="Please, tell me the problem you are going through!">  -->
         <select data-conv-question="Please, Select the disease to know about its solution." name="category1">
           <option value="His">Heart Issues?</option>
           <option value="Ois">Obesity Issue?</option>
           <option value="pis">Periods Issue?</option>
         </select>
         <div data-conv-fork="category1">
           <div data-conv-case="His">
               <input type="text" data-conv-question=" Lifestyle changes. You can lower your risk of heart disease by eating a low-fat and low-sodium diet, getting at least 30 minutes of moderate exercise on most days of the week, quitting smoking, and limiting alcohol intake. Medications.">
           </div>
           <div data-conv-case="Ois">
               <input type="text"  data-conv-question="Consume less “bad” fat and more “good” fat,Consume less processed and sugary foods,Eat more servings of vegetables and fruits,Eat plenty of dietary fiber,Engage in regular aerobic activity">
           </div>
           <div data-conv-case="pis">
               <input type="text" data-conv-question="Practice yoga. Yoga has been shown to be an effective treatment for different menstrual issues. ...
            Maintain a healthy weight. Changes in your weight can affect your period. ...
            Exercise regularly. ...
            Spice things up with ginger. ...
            Add some cinnamon. ...
            Get your daily dose of vitamins. ...
            Drink apple cider vinegar daily. ...
            Eat pineapple.">
           </div>
       </div>
       </div>
      
    </div> 
  
     <input type="text" name="name" data-conv-question="Please, Enter your name">
 
     <input type="text" data-conv-question="Hi {name}, <br> It's a pleasure to meet you." data-no-answer="true">
 
     <input data-conv-question="Enter your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" name="email" required placeholder="What's your e-mail?">
 
     <select data-conv-question="Please Conform">
       <option value="Yes">Confirm</option>
     </select>
    
   </form>
  
   </div>
 
 
</div>

 
       
    </section>
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

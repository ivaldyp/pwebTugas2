<?php
   include "connect.php";
  

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_SESSION['login_user'])) 
   {
      

      $myusername = mysqli_real_escape_string($conn,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['passwd']); 
      
      $sql = "SELECT UserID FROM user_data WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
     
      
      $count = mysqli_num_rows($result);
      
      
      if(isset($_POST['me']))
      {
         $user='user';

         setcookie($user,$myusername, time()+(86400) );

      }
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         
         

         header("location: profile.php");
      }else {
        
         echo "<script> 
         window.alert('Your Username or Password is invalid!'); 
         </script>";
      }
   }
   else if(isset($_SESSION['login_user']))
   {
         echo "<script> 
         window.alert('Your have logged in already!'); 
         </script>";
         header("location:profile.php");
   }
?>

<!doctype html>

<html>

<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="stylelogin.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   <script src="scriptitemshowcase.js"></script>
-->

</head>


<body>

<div id="nav">
      <ul id="nav1">
         <li id="nav2" ><a id ="nav3"  href="index.html"> Home </a></li>
         <li id="nav2" class="dropdown"><a  id ="nav3"  class= "dropbtn" href="categories.html"> Categories </a>

            <div class="dropdown-content">
         <a href="aircraft.php"> Aircraft </a>
         <a href="helicopter.php"> Helicopter </a>
         <a href="armor.php"> Armor </a>
         <a href="ship.php"> Ship </a>
         </div>

         </li>

         <li id="nav2"><a  id ="nav3" href="video.html"> Videos </a></li>
         <li id="nav2"><a  id ="nav3" href="about.html"> About </a></li>

         <li id="nav2"><a  id ="nav3" href="contact.html"> Contact </a></li>

         <li id="nav2" class="dropdown"><a  id ="nav3"  class= "dropbtn" href="profile.php"> Profile </a>

         <div class="dropdown-content">
         <a href="login.php"> Login </a>
         <a href="signup.php"> Sign Up </a>
         </div>
         
         </li>

         <h3 id="navright">ModelKitShowcase.com</h3>
      </ul>
</div>


<div id="wrapper">


   <div id="item_box">


   

   <div class="form_style">

   <h2>Login!</h2>
   <form method="POST" action="">

      <div class="section"><span>1</span>Username</div>
      <div class="inner-wrap">
         <label>Your Username <br> <br> <input type="text" required="required" name="uname"></label>
      </div>
      
      <div class="section"><span>2</span>Password</div>
      <div class="inner-wrap">
         <label>***** <br> <br> <input type="password" required="required" name="passwd"></label>
         <label>Remember Me <br> <br> <input type="checkbox" name="me"></label>
      </div>   

      
      

      <div class="button-section">
     <input type="submit" name="Sign Up" />
      </div>

   </div>












   </div>




</div>






</body>


<footer>


<div id="f1" class="foot">
<h5>modelkitshowcase.com</h5>
</div>

<div id="f2" class="foot">
<h5>- Copyright 2016</h5>
</div>

<div id="f3" class="foot">
<h5>- All Rights Reserved</h5>
</div>

<div id="f4" class="foot">
<h5>- Coded by Aditya Ikhsan</h5>
</div>
\

<div id="f5" class="foot">
<h5><?php 
   if(isset($_SESSION['login_user'])) echo "Logged in as " .$_SESSION['login_user']. " ";
    else if(!isset($_SESSION['login_user'])) echo "Not Logged In";
    ?></h5>
</div>

</footer>
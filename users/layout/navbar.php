<?php
require_once 'php/DBConnect.php';
$db = new DBConnect();
//$db->authLogin(); // if user has logged in already then forward it to home.php

$message=NULL;
if(isset($_POST['loginBtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $flag = $db->login($username, $password);
    if($flag){
        header("Location: ./home.php");
    } else {
        $message = "Username of password was incorrect!";
    }
}
$title="Employee Login";
include 'layout/_header.php'; 
?>

<nav class="navbar navbar-expand navbar-light " style="background-color:white ;">
  <a class="navbar-brand ">
      <h1 style="color:#a30000; font-size:xx-large ">BLOOD BANK</h1>
  </a>
  <div class="collapse navbar-collapse " id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="<?php if (isset($setHomeActive)) { echo $setHomeActive;} else {  echo '';}?>">
        <a href="index.php" style="color:#c91c1c; margin-right: 30px; font-size:medium; text-decoration:none" >Home</a>
      </li>
      <li class="<?php if (isset($setAboutActive)) { echo $setAboutActive;} else {  echo '';}?>">
        <a href="about.php" style="color:#c91c1c; margin-right: 30px; font-size:medium; text-decoration:none">About Us</a>
      </li>
      <li class="<?php if(isset($setMemberActive)){ echo $setMemberActive; } else { echo ''; } ?>">
        <a href="member.php" style="color:#c91c1c; margin-right: 30px; font-size:medium; text-decoration:none">Our Members</a>
        </li>
                        
      <li class="<?php if(isset($setJoinUsActive)){ echo $setJoinUsActive; } else { echo ''; } ?>">
        <a href="register.php" style="color:#c91c1c; margin-right: 30px; font-size:medium; text-decoration:none">Join Us</a>
      </li>
                        
      <li class="<?php if(isset($setAvailabilityActive)) {echo $setAvailabilityActive;} else {echo '';} ?>">
        <a href="availability.php" style="color:#c91c1c; margin-right: 30px; font-size:medium; text-decoration:none">Check Availability</a>
      </li>
      <button type="button" class="btn btn-primary" onclick="window.location.href='../index.php'" style="background-color:#c91c1c; border-color:#c91c1c; font-size:medium" >
        Employee Login
      </button>
    </ul>  
  </div>
</nav><br>
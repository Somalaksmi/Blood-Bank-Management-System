<?php
require_once 'php/user_DBConnect.php';
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
include 'layout/header.php'; 
?>

<!--
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="blood_drop.png" width="30" height="30" class="d-inline-block align-top" alt="">
          <a class="navbar-brand" href="index.php" style="color:#a30000; font-size:xx-large ">Blood Bank</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="<?php
                        if (isset($setHomeActive)) {
                            echo $setHomeActive;
                        } else {
                            echo '';
                        }
                        ?>"><a href="index.php" style="color:#c91c1c ;">Home</a></li>
                        <li class="<?php
                        if (isset($setAboutActive)) {
                            echo $setAboutActive;
                        } else {
                            echo '';
                        }
                        ?>"><a href="about.php" style="color:#c91c1c ;">About Us</a></li>
                        <li class="<?php if(isset($setMemberActive)){ echo $setMemberActive; } else { echo ''; } ?>">
                            <a href="member.php" style="color:#c91c1c ;">Our Members</a>
                        </li>
                        
                        <li class="<?php if(isset($setJoinUsActive)){ echo $setJoinUsActive; } else { echo ''; } ?>">
                            <a href="register.php" style="color:#c91c1c ;">Join Us</a>
                        </li>
                        
                        <li class="<?php if(isset($setAvailabilityActive)) {echo $setAvailabilityActive;} else {echo '';} ?>">
                            <a href="availability.php" style="color:#c91c1c ;">Check Availability</a>
                        </li>
                        
                        <li class="">
                            <a href="C:\xampp\htdocs\SME Project\admin\index.php" style="color:#c91c1c ;" >Employee Login</a>
                        </li>
          </ul>
        </div>
      </div>
    </nav>
	</br>
</br>
                      -->
<nav class="navbar navbar-expand navbar-light " style="background-color:white ;">
  <a class="navbar-brand ">
      <h1 style="color:#a30000; font-size:xx-large ">BLOOD BANK</h1>
  </a>
  <div class="collapse navbar-collapse " id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="<?php if (isset($setHomeActive)) { echo $setHomeActive;} else {  echo '';}?>">
        <a href="user_index.php" style="color:#c91c1c; margin-right: 30px; font-size:medium; text-decoration:none" >Home</a>
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
      <button type="button" class="btn btn-primary" onclick="window.location.href='login_index.php'" style="background-color:#c91c1c; border-color:#c91c1c; font-size:medium" >
        Employee Login
      </button>
    </ul>  
  </div>
</nav><br>


<!--<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <?php if(isset($message)): ?>
            <div class="alert-danger"><?= $message; ?></div>
        <?php endif; ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">EMPLOYEE LOGIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <form class="form-vertical" role="form" method="post" action="index.php">
                            <div class="form-group">
                                <input type="text" class="form-control" required="true" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" required="true" class="form-control" name="password" placeholder="Password">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="loginBtn" class="btn btn-primary btn-sm">Login</button>
                    <a href="users/" class="btn btn-sm btn-warning">I do not have username or password</a>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="modal fade" id="employeeLoginModal" tabindex="-1" role="dialog" aria-labelledby="employeeLoginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="employeeLoginModalLabel" style="font-size:xx-large; font-family:'Sans-Serif'; font-style:normal; font-weight:bold">EMPLOYEE LOGIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php if(isset($invalid)): ?>
        <div class="alert-danger" id="invalid"><?= $invalid; ?></div>
      <?php endif; ?>
        <div class="panel-body">
            <form class="form-vertical" role="form" method="post" action="index.php">
              <div class="form-group">
                <input type="text" class="form-control" required="true" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" required="true" class="form-control" name="password" placeholder="Password">
              </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color:#a30000; border-color:#a30000; font-size:larger">Login</button>
        <button type="button" class="btn btn-primary" style="background-color:#a30000; border-color:#a30000; font-size:larger">Forgot Username/Password</button>
      </div>
    </div>
  </div>
</div>

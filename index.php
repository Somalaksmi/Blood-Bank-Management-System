<?php
require_once 'php/DBConnect.php';
$db = new DBConnect();
$db->authLogin(); // if user has logged in already then forward it to home.php

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
$title="Login";
include 'layout/_header.php'; 
?>

<style>
    * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

<div class="container">
    <div class="row">
            <div class="column">
                <?php if(isset($message)): ?>
                <div class="alert-danger"><?= $message; ?></div>
                <?php endif; ?>
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#a30000 ;">
                        <h5 style="color:white ; font-size:x-large ; text-align:center ;"> User Login </h5>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6" style="margin: 20px 20px 20px 150px;">
                            <img src="assets/security-icon.png" class="img img-responsive img-thumbnail">
                        </div>
                        <form class="form-vertical" role="form" method="post" action="login_index.php">
                            <div class="form-group">
                                <input type="text" class="form-control" required="true" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" required="true" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group loginBtn">
                                <button type="submit" name="loginBtn" class="btn btn-primary btn-sm" style="color:white ; font-size:small ; background-color:#a30000;  border:#a30000">Login</button>
                                <a href="users/" class="btn btn-sm btn-warning" style="color:white ; font-size:small ; background-color:#a30000; border:#a30000">I do not have username or password</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="column">
                <img src="assets/left-index-logo.jpg" class="img img-responsive">
            </div>
        </div>
    </div>
</div>

<?php include 'layout/_footer.php'; ?>  
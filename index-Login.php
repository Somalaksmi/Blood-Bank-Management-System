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
<!--
<div class="container">
<div class="row">
    <div class="col-md-6">
        <?php if(isset($message)): ?>
        <div class="alert-danger"><?= $message; ?></div>
        <?php endif; ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="col-md-6">
                    <img src="assets/security-icon.png" class="img img-responsive img-thumbnail">
                </div>
                <h5> User Login </h5>
            </div>
            <div class="panel-body">
                <form class="form-vertical" role="form" method="post" action="index.php">
                    <div class="form-group">
                        <input type="text" class="form-control" required="true" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" required="true" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group loginBtn">
                        <button type="submit" name="loginBtn" class="btn btn-primary btn-sm">Login</button>
                        <a href="users/" class="btn btn-sm btn-warning">I do not have username or password</a>
                    </div>
                </form>
            </div>
			</div>
        </div>
    </div>
    <div class="col-md-4">
        <img src="assets/left-index-logo.jpg" class="img img-responsive">
    </div>
</div>
        -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
</div>

<?php include 'layout/_footer.php'; ?>


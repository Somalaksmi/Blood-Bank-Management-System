<?php
require_once 'php/DBConnect.php';
$db = new DBConnect();
$db->checkAuth();

$invalid = NULL;
if(isset($_POST['loginBtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username == "vs_lala"){
        if($password == "123"){
            session_start();
            $_SESSION['username'] = $username;
            header("Location: http://localhost/BDManagement/admin/home.php");
        } else {
            $invalid = "Invalid Password!";
        }
    }else{
        $invalid = "Invalid username or password!";
    }
}

$title="Admin Login";
include 'layout/_header.php'; 
    
?>
<!--
<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <?php if(isset($invalid)): ?>
        <div class="alert-danger" id="invalid"><?= $invalid; ?></div>
        <?php endif; ?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-4">
                    <img src="assets/security-icon.png" class="img img-responsive img-thumbnail">
                </div>
                <h3>Admin Login</h3>
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
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
-->

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
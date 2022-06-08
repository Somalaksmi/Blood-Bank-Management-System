<?php
include('users/php/DBConnect.php');
$db = new DBConnect();
$db->auth();
$mysqli = $db->mysqli();
$id=$_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM donors WHERE id=$id;");

while($res = mysqli_fetch_array($result))
{
	$fname = $res['fname'];
    $mname = $res['mname'];
    $lname = $res['lname'];
	$sex = $res['sex'];
	$b_type = $res['b_type'];
    $bday = $res['bday'];	
    $h_address = $res['h_address'];
    $city = $res['city'];
    $mobile = $res['mobile'];
    $phone = $res['phone'];
    $don_date = $res['don_date'];
    $stats = $res['stats'];
    $temp = $res['temp'];
    $pulse = $res['pulse'];
    $bp = $res['bp'];
    $weight = $res['weight'];
    $hemoglobin = $res['hemoglobin'];
    $hbsag = $res['hbsag'];
    $aids = $res['aids'];
    $malaria_smear = $res['malaria_smear'];
    $hematocrit = $res['hematocrit'];
}
?>
<html>
<head>	
	<title>Edit Donor</title>
</head>

<body>
    <?php $setDonorslistActive = "active";
        include 'layout/_header.php';
        include 'layout/_top_nav.php';
    ?>
	<!-- The updated form data entered by user is sent using the HTTP POST method -->
	<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            
            <?php if(isset($success)): ?>
            <div class="alert-success fade-out-5"><?= $success; ?></div>
            <?php endif; ?>
            <?php if(isset($message)): ?>
            <div class="alert-danger fade-out-5"><?= $message; ?></div>
            <?php endif; ?>
            
            <form method="post" class="form-horizontal" role="form" action="updatedonor.php?id=<?php echo $id; ?>">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5>Donor Basic Info</h5>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3">Name</label>
                            <div class="col-sm-3">
                                <input type="text" name="fname" value="<?php echo $fname;?>" placeholder="First Name" class="form-control" required="true">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="mname" value="<?php echo $mname;?>" placeholder="Middle Name" class="form-control" >
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="lname" value="<?php echo $lname;?>" placeholder="Last Name" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Gender</label>
                            <?php if($sex=="male"): ?>
                            <div class="col-sm-4 radio-inline">
                                <input type="radio" value="male" name="sex" checked="true">Male                        
                            </div>
                            <div class="col-sm-2 radio-inline">
                                <input type="radio" value="female" name="sex">Female                        
                            </div>
                            <?php endif; ?>
                            <?php if($sex=="female"): ?>
                            <div class="col-sm-4 radio-inline">
                            <input type="radio" value="male" name="sex">Male 
                            </div>  
                            <div class="col-sm-2 radio-inline">
                            <input type="radio" value="female" name="sex" checked="true">Female   
                            </div> 
                            <?php endif; ?>                     

                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Blood Type:</label>
                            <div class="col-sm-8">
                                <select name="b_type" class="form-control">
                                    <?php if($b_type=="O+"): ?>
                                        <option value="O+"selected>O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    <?php endif; ?>
                                    <?php if($b_type=="O-"): ?>
                                        <option value="O+">O+</option>
                                        <option value="O-"selected>O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    <?php endif; ?>
                                    <?php if($b_type=="A+"): ?>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+"selected>A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    <?php endif; ?>
                                    <?php if($b_type=="A-"): ?>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-"selected>A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    <?php endif; ?>
                                    <?php if($b_type=="B+"): ?>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+"selected>B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    <?php endif; ?>
                                    <?php if($b_type=="B-"): ?>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-"selected>B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    <?php endif; ?>
                                    <?php if($b_type=="AB+"): ?>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+"selected>AB+</option>
                                        <option value="AB-">AB-</option>
                                    <?php endif; ?>
                                    <?php if($b_type=="AB-"): ?>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-"selected>AB-</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">D.O.B</label>
                            <div class="col-sm-8">
                                <input type="date" name="bday" value="<?php echo $bday;?>" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Address</label>
                            <div class="col-sm-8">
                                <textarea rows="8" name="h_address" value="" class="form-control" required="true"><?php echo $h_address;?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">City</label>
                            <div class="col-sm-8">
                                <input type="text" name="city" value="<?php echo $city;?>" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Mobile</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="10000000000" name="mobile" value="<?php echo $mobile;?>" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Phone</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="10000000000" name="phone" value="<?php echo $phone;?>" class="form-control">
                            </div>
                        </div>           
                    </div>
                    <div class="panel-heading">
                        <h5>Donor Medical Info</h5>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-4">Date of Donation</label>
                            <div class="col-sm-8">
                                <input type="date" name="don_date" value="<?php echo $don_date;?>" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Statistics</label>
                            <div class="col-sm-8">
                                <input type="text" name="stats" value="<?php echo $stats;?>" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Temperature</label>
                            <div class="col-sm-8">
                                <input type="decimar" name="temp" value="<?php echo $temp;?>" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Pulse</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="300" name="pulse" value="<?php echo $pulse;?>" class="form-control" required="true"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Blood Pressure</label>
                            <div class="col-sm-8">
                                <input type="text" name="bp" value="<?php echo $bp;?>" class="form-control" required="true"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Weight</label>
                            <div class="col-sm-8">
                                <input type="decimal" name="weight" value="<?php echo $weight;?>" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Hemoglobin</label>
                            <div class="col-sm-8">
                                <input type="text" name="hemoglobin" value="<?php echo $hemoglobin;?>" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">HBsAg </label>
                            <div class="col-sm-8">
                                <input type="text" name="hbsag" value="<?php echo $hbsag;?>" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Aids </label>
                            <div class="col-sm-8">
                                <input type="text" name="aids" value="<?php echo $aids;?>" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Malaria Smear </label>
                            <div class="col-sm-8">
                                <input type="text" name="malaria_smear" value="<?php echo $malaria_smear;?>" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Hematocrit </label>
                            <div class="col-sm-8">
                                <input type="text" name="hematocrit" value="<?php echo $hematocrit;?>" required="true" class="form-control"/>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-4"> </label>
                            <div class="col-sm-8">
                            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
				            <input type="submit" name="update" value="Update">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php include 'layout/_footer.php'; ?>

</body>
</html>

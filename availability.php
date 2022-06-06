<?php
$i=0;
if(isset($_POST['searchBtn'])){
    require_once 'php/user_DBConnect.php';
    $db = new DBConnect();
    
    $bloodType = $_POST['blood_group'];
    $donors = $db->getDonorsByBloodType($bloodType);
}
$title = "Blood Availability";
$setAvailabilityActive = "active";
include 'layout/header.php';

include 'layout/user_navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form class="form-inline" role='form' method="post" action="availability.php">
                <label class="form-label" style="font-weight:bold ; font-size:large ; margin-right:10px ;">Select Blood Group: </label>
                <select name="blood_group" class="form-control" style="font-size:large ; margin-right:10px ;">
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
                <button type="submit" class="btn btn-success" name="searchBtn" style="font-size:large ; margin-right:10px ; background-color:#a30000; border:none">Check Availability</button>
            </form>
            <br>
            <div class="form-group">
                <?php if(isset($donors[0])): ?>
                <label style="font-size:large ; margin-right:10px ;">Total number of donors with <?= $donors[0]['b_type']; ?> </label><div class="emphasize" style="font-size:x-large ; margin-right:10px ;"><?= count($donors); ?> Donors</div>
                <table class="table table-condensed">
                    <thead style="font-weight:bold ; font-size:medium ;">
                    <th>Name</th>
                    <th>Gender</th>
                    <th>D.O.B</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Blood Group</th>
                    </thead>
                    
                    <?php foreach($donors as $d): $i++;?>
                    
                    <tr class="<?php if($i%2==0){echo 'bg-danger';} else{echo 'bg-success';} ?>" style="font-size:small ; color:white ; text-decoration:none">
                        <td><a href="profile.php?id=<?= $d['id']; ?>" style="color:white ;"><?= $d['fname'] ." ".$d['mname']." ".$d['lname']; ?></a></td>
                        <td><?= $d['sex']; ?></td>
                        <td><?= $d['bday']; ?></td>
                        <td><?= wordwrap($d['h_address'],26,'<br>' ); ?></td>
                        <td><?= $d['city']; ?></td>
                        <td><?= $d['b_type']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </table>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<?php include 'layout/user_footer.php'; ?>

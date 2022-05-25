<?php
	include('users/php/DBConnect.php');
    $db = new DBConnect();
    $mysqli = $db->mysqli();
	$id=$_GET['id'];
 
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);	
	$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
    $mname = mysqli_real_escape_string($mysqli, $_POST['mname']);
    $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
	$sex = mysqli_real_escape_string($mysqli, $_POST['sex']);
	$b_type = mysqli_real_escape_string($mysqli, $_POST['b_type']);
    $bday = mysqli_real_escape_string($mysqli, $_POST['bday']);	
    $h_address = mysqli_real_escape_string($mysqli, $_POST['h_address']);
    $city = mysqli_real_escape_string($mysqli, $_POST['city']);
    $mobile = mysqli_real_escape_string($mysqli, $_POST['mobile']);
    $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
    $don_date = mysqli_real_escape_string($mysqli, $_POST['don_date']);
    $stats = mysqli_real_escape_string($mysqli, $_POST['stats']);
    $temp = mysqli_real_escape_string($mysqli, $_POST['temp']);
    $pulse = mysqli_real_escape_string($mysqli, $_POST['pulse']);
    $bp = mysqli_real_escape_string($mysqli, $_POST['bp']);
    $weight = mysqli_real_escape_string($mysqli, $_POST['weight']);
    $hemoglobin = mysqli_real_escape_string($mysqli, $_POST['hemoglobin']);
    $hbsag = mysqli_real_escape_string($mysqli, $_POST['hbsag']);
    $aids = mysqli_real_escape_string($mysqli, $_POST['aids']);
    $malaria_smear = mysqli_real_escape_string($mysqli, $_POST['malaria_smear']);
    $hematocrit = mysqli_real_escape_string($mysqli, $_POST['hematocrit']);
 
	$result = mysqli_query($mysqli, "UPDATE donors SET fname='$fname',mname='$mname',lname='$lname',sex='$sex',b_type='$b_type',bday='$bday',h_address='$h_address',city='$city',mobile='$mobile',phone='$phone',don_date='$don_date',stats='$stats',temp='$temp',pulse='$pulse',bp='$bp',weight='$weight',hemoglobin='$hemoglobin',hbsag='$hbsag',aids='$aids',malaria_smear='$malaria_smear',hematocrit='$hematocrit' WHERE id=$id");
	header('location:donor.php');
?>
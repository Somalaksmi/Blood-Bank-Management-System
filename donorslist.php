<?php

$i=0;
require_once 'users/php/DBConnect.php';
$db = new DBConnect();
$donors = $db->getDonors();

$title="Donors Area";$bg_background="bg-warning";
$setDonorslistActive = "active";
include 'layout/_header.php';

include 'layout/_top_nav.php';
?>

<?php include 'users/layout/_donor_layout.php'; ?>

<?php include 'layout/_footer.php'; ?>

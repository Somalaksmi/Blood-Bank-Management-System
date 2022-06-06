<?php
require_once 'php/DBConnect.php';
$db = new DBConnect();
$db->auth();

$title = "Blood Requests";
$setBloodRequestActive = "active";
include 'layout/header.php';

include 'layout/admin_navbar.php';

?>
<?php include 'layout/admin_footer.php'; ?>
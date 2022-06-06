<?php

$i=0;
require_once 'php/user_DBConnect.php';
$db = new DBConnect();
$users = $db->getUsers();

$title="Members Area";$setMemberActive="active";$bg_background="bg-success";
include 'layout/header.php';

include 'layout/admin_navbar.php';
?>

<?php include 'layout/_member_layout.php'; ?>

<?php include 'layout/admin_footer.php'; ?>

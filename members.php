<?php

$i=0;
require_once 'users/php/DBConnect.php';



$db = new DBConnect();
$db->auth();
$users = $db->getUsers();

$title="Members Area";$setMemberActive="active";$bg_background="bg-warning";
include 'layout/_header.php';

include 'layout/_top_nav.php';
?>

<?php include '_member_layout.php'; ?>

<?php include 'layout/_footer.php'; ?>

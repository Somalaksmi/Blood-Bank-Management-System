<?php
//Example - MySQLi
//Step 1. Connect to the database.
//Step 2. Handle connection errors
//including the database connection file
include("users/php/DBConnect.php");

//getting id of the data from url
$id = $_GET['id'];

//3. Execute the SQL query.
//deleting the row from table
$db = new DBConnect();
$mysqli = $db->mysqli();
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

//Step 5: Freeing Resources and Closing Connection using mysqli
mysqli_close($mysqli);

//4. Process the results.
//redirecting to the display page (index.php in our case)
header("Location:members.php");

?>
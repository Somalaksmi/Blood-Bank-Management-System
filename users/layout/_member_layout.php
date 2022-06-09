<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<?php

include_once("php/DBConnect.php");

$db = new DBConnect();
$mysqli = $db->mysqli();
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <?php if(isset($users)): $i++;?>
            <table class="table table-condensed">
                <thead style="font-size:medium ; font-weight:bold">
                <th>Name</th>
                <th>Email</th>
                <th>D.O.B</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Address</th>
                <th>City</th>
                <th>Mobile</th>
                </thead>
                <?php 
                while($res = mysqli_fetch_array($result)) { 
                $i++;
                ?>
                    <tr class="<?php if($i%2==0){echo $bg_background;}else{echo 'bg-danger';} ?>" style="color:white ; font-size:small">
                    <?php 
                        echo "<td>".$res['first_name']." ".$res['last_name']."</td>";
                        echo "<td>".$res['email']."</td>";
                        echo "<td>".$res['dob']."</td>";	
                        echo "<td>".$res['gender']."</td>";
                        echo "<td>".$res['b_type']."</td>";	
                        echo "<td>".wordwrap($res['address'], 26, '<br>')."</td>";	
                        echo "<td>".$res['city']."</td>";	
                        echo "<td>".$res['mobile']."</td>";								
                        // echo "<td><a href=\"editmember.php?id=$res[id]\"><i class=\"fa-solid fa fa-pen\" aria-hidden=\"true\"></i></a></td>";
                    //     echo "<td><a href=\"deletemember.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></td>";
			        // echo "</tr>";
		        }
		
		        //Step 5: Freeing Resources and Closing Connection using mysqli
		        mysqli_close($mysqli);
	            ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
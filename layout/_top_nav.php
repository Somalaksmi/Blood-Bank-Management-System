 <nav class="navbar navbar-expand navbar-light " style="background-color:white ;">
  <a class="navbar-brand ">
      <h1 style="color:#a30000; font-size:xx-large ">BLOOD BANK</h1>
  </a>
  <div class="collapse navbar-collapse " id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="<?php if (isset($setHomeActive)) {echo $setHomeActive;} else {echo '';}?>">
        <a href="home.php" style="color:#c91c1c; margin-right: 30px; font-size:medium; text-decoration:none">Home</a>
      </li>
      <li class="<?php if (isset($setDonorActive)) {echo $setDonorActive;} else {echo '';}?>">
        <a href="donor.php" style="color:#c91c1c; margin-right: 30px; font-size:medium; text-decoration:none">New Donor</a>
      </li>
      <li class="<?php if(isset($setDonorslistActive)) { echo $setDonorslistActive; } else { echo ''; } ?>">
        <a href="donorslist.php" style="color:#c91c1c; margin-right: 30px; font-size:medium; text-decoration:none">Our Donors</a>
      </li>                 
      <li class="<?php if(isset($setMemberActive)) { echo $setMemberActive; } else { echo ''; } ?>">
        <a href="members.php" style="color:#c91c1c; margin-right: 30px; font-size:medium; text-decoration:none">Our Members</a>
      </li>
      <li><a href="logout.php" style="color:#c91c1c; margin-right: 30px; font-size:medium; text-decoration:none">Logout</a></li>
    </ul>  
  </div>
</nav><br>
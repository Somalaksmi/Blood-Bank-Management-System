 <!-- Fixed navbar
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Blood Bank</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
             <li class="<?php
                        if (isset($setHomeActive)) {
                            echo $setHomeActive;
                        } else {
                            echo '';
                        }
                        ?>"><a href="home.php">Home</a></li>
                        <li class="<?php
                        if (isset($setDonorActive)) {
                            echo $setDonorActive;
                        } else {
                            echo '';
                        }
                        ?>"><a href="donor.php">New Donor</a></li>
                        
                        <li class="<?php if(isset($setMemberActive)) { echo $setMemberActive; } else { echo ''; } ?>">
                            <a href="members.php">Our Members</a>
                        </li>
                      <li class="<?php //if(isset($setBloodRequestActive)){ echo $setBloodRequestActive; } else { echo ''; } ?>">
                            <a href="blood_request.php">Blood Requests</a>
                        </li>
                        <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
	</br></br>-->

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
      <li class="<?php if(isset($setMemberActive)) { echo $setMemberActive; } else { echo ''; } ?>">
        <a href="members.php" style="color:#c91c1c; margin-right: 30px; font-size:medium; text-decoration:none">Our Members</a>
      </li>
      <li class="<?php if(isset($setBloodRequestActive)){ echo $setBloodRequestActive; } else { echo ''; } ?>">
        <a href="blood_request.php" style="color:#c91c1c; margin-right: 30px; font-size:medium; text-decoration:none">Blood Requests</a>
      </li>
      <li><a href="logout.php" style="color:#c91c1c; margin-right: 30px; font-size:medium; text-decoration:none">Logout</a></li>
    </ul>  
  </div>
</nav><br>
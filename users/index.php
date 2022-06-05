<?php
$title = "Home";
$setHomeActive = "active";
include 'layout/header.php';

include 'layout/user_navbar.php';
?>

<style>
* {
  box-sizing: border-box;
}


/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}

.clearfix::after,
.calendar ol::after {
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}

.calendar {
  border-radius: 10px;
}

.month {
  font-size: 2rem;
}

@media (min-width: 992px) {
  .month {
    font-size: 3.5rem;
  }
}

.calendar ol li {
  float: left;
  width: 14.28571%;
}

.calendar .day-names {
  border-bottom: 1px solid #eee;
}

.calendar .day-names li {
  text-transform: uppercase;
  margin-bottom: 0.5rem;
}

.calendar .days li {
  border-bottom: 1px solid #eee;
  min-height: 8rem;
}

.calendar .days li .date {
  margin: 0.5rem 0;
}

.calendar .days li .event {
  font-size: 0.75rem;
  padding: 0.4rem;
  color: white;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  border-radius: 4rem;
  margin-bottom: 1px;
}

.calendar .days li .event.span-2 {
  width: 200%;
}

.calendar .days li .event.begin {
  border-radius: 1rem 0 0 1rem;
}

.calendar .days li .event.end {
  border-radius: 0 1rem 1rem 0;
}

.calendar .days li .event.clear {
  background: none;
}

.calendar .days li:nth-child(n+29) {
  border-bottom: none;
}

.calendar .days li.outside .date {
  color: #ddd;
}
</style>

<!--
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <a href="#" id="Heading">Why Are We Here For?</a>
            <p id="About">
                Blood Bank Management System (BBMS) is a browser based system that is designed to store, process, retrieve and analyze information concerned with the administrative and inventory management within a blood bank. This project aims at maintaining all the information pertaining to blood donors, different blood groups available in each blood bank and help them manage in a better way. Aim is to provide transparency in this field, make the process of obtaining blood from a blood bank hassle free and corruption free and make the system of blood bank management effective.
            </p>
            <hr id="line_1">
            <a href="#" id="Heading2"></a>
            <p>

                - Blood Donation Camp & Camp Organiser Management.<br>
                - Donor Management - Donor Registration, Managing donor database, recording their physical and medical statistics.<br>
                - Inventory management in blood bank for storage and issuance of blood.<br>
                - Blood requisition and issuance of blood.<br>
                - Online transfer of blood from one blood bank to another.<br>
                - Discarding of expired and unsuitable blood (Less Qty., Reactive, Clotting, Hemolysis).<br>
                - Being a web based system, can be implemented throughout the state. - - Separate user accounts can be created for each blood bank.<br>
                - Patient Register/Blood Sample Receiving Register, Donor Register, Blood Issue Register and Discarded Blood report.<br>
                - Fridge Wise Stock Position and Printing of Fridge Stickers.<br>
                - List of Donors who are eligible for donation on a particular date with contact Number.<br>
                - Camp Wise Donor List and Printing of Donor Cards.<br>
            </p>
        </div>
        <div class="col-md-2">
            <img src="../assets/donate_blood_right.jpg" class="img img-responsive img-thumbnail" style="width:200px ;">
             <img src="http://bbmspunjab.gov.in/images/bbmsRht.png" class="img img-responsive img-thumbnail">
        </div>



    </div>
</div>
-->
<div class="container" style="margin: 10px 100px 10px 100px;">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" style="width:600px; margin-left:370px">
        <div class="carousel-item active" data-interval="3000">
          <img src="BDP-1.jpg" class="d-block w-100" alt="BLOOD DONATION" style="height: 900px;">
        </div>
        <div class="carousel-item" data-interval="3000 ">
          <img src="BDP-3.jpg" class="d-block w-100" alt="BLOOD DONATION" style="height: 900px;">
        </div>
        <div class="carousel-item" data-interval="3000">
          <img src="BDP-2.png" class="d-block w-100" alt="BLOOD DONATION" style="height: 900px;">
        </div>
      </div>
    </div>
  </div>
</div><br>

<div class="row">
  <div class="column" style="background-color:#C91C1C; padding:50px">
    <p class="text-center" style="color:#f2f2f2;font-size:15px;">Blood Bank Management System (BBMS) is a browser based system that is designed to store, process, retrieve and analyze information concerned with the administrative and inventory management within a blood bank. This project aims at maintaining all the information pertaining to blood donors, different blood groups available in each blood bank and help them manage in a better way. Aim is to provide transparency in this field, make the process of obtaining blood from a blood bank hassle free and corruption free and make the system of blood bank management effective.</p>
    <a href="product.html" class="btn " style="margin-top: 25px; margin-left: 45%; background-color: #f2f2f2; color:#C91C1C; font-weight:bold">About Us</a>
  </div>
  <div class="column" style="background-color:white">
    <img src="BDP-4.jpg" alt="BLOOD DONATION" style="width:275px; height:275px; margin-left:250px">
  </div>
</div>

<div class="container" style="margin-top:50px; margin-bottom:50px">
<div class="calendar shadow bg-white p-5">
    <div class="d-flex align-items-center"><i class="fa fa-calendar fa-3x mr-3"></i>
      <h2 class="month font-weight-bold mb-0 text-uppercase">May 2022</h2>
    </div>
    <p class="font-italic text-muted mb-5">No events for this day.</p>
    <ol class="day-names list-unstyled">
      <li class="font-weight-bold text-uppercase">Sun</li>
      <li class="font-weight-bold text-uppercase">Mon</li>
      <li class="font-weight-bold text-uppercase">Tue</li>
      <li class="font-weight-bold text-uppercase">Wed</li>
      <li class="font-weight-bold text-uppercase">Thu</li>
      <li class="font-weight-bold text-uppercase">Fri</li>
      <li class="font-weight-bold text-uppercase">Sat</li>
    </ol>

    <ol class="days list-unstyled">
      <li>
        <div class="date">1</div>
        <div class="event all-day end bg-success" style="font-size:small;">Blood Drive - Damansara</div>
      </li>
      <li>
        <div class="date">2</div>
      </li>
      <li>
        <div class="date">3</div>
      </li>
      <li>
        <div class="date">4</div>
      </li>
      <li>
        <div class="date">5</div>
      </li>
      <li>
        <div class="date">6</div>
      </li>
      <li>
        <div class="date">7</div>
      </li>
      <li>
        <div class="date">8</div>
      </li>
      <li>
        <div class="date">9</div>
      </li>
      <li>
        <div class="date">10</div>
      </li>
      <li>
        <div class="date">11</div>
      </li>
      <li>
        <div class="date">12</div>
      </li>
      <li>
        <div class="date">13</div>
        <div class="event all-day end bg-success" style="font-size:small">Blood Drive - Bangsar South</div>
      </li>
      <li>
        <div class="date">14</div>
      </li>
      <li>
        <div class="date">15</div>
        <div class="event all-day end bg-success" style="font-size:small">Blood Drive - Bukit Jalil</div>
      </li>
      <li>
        <div class="date">16</div>
      </li>
      <li>
        <div class="date">17</div>
      </li>
      <li>
        <div class="date">18</div>
      </li>
      <li>
        <div class="date">19</div>
      </li>
      <li>
        <div class="date">20</div>
      </li>
      <li>
        <div class="date">21</div>
      </li>
      <li>
        <div class="date">22</div>
      </li>
      <li>
        <div class="date">23</div>
      </li>
      <li>
        <div class="date">24</div>
      </li>
      <li>
        <div class="date">25</div>
      </li>
      <li>
        <div class="date">26</div>
      </li>
      <li>
        <div class="date">27</div>
      </li>
      <li>
        <div class="date">28</div>
      </li>
      <li>
        <div class="date">29</div>
      </li>
      <li>
        <div class="date">30</div>
      </li>
      <li>
        <div class="date">31</div>
      </li>
      <li class="outside">
        <div class="date">1</div>
      </li>
      <li class="outside">
        <div class="date">2</div>
      </li>
      <li class="outside">
        <div class="date">3</div>
      </li>
      <li class="outside">
        <div class="date">4</div>
      </li>
    </ol>
  </div>
</div>

<?php include 'layout/user_footer.php'; ?>
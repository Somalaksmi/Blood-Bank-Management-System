<?php
$title = "Home";
$setHomeActive = "active";
include 'layout/_header.php';
include 'layout/navbar.php';
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
          <img src="assets/BDP-1.jpg" class="d-block w-100" alt="BLOOD DONATION" style="height: 900px;">
        </div>
        <div class="carousel-item" data-interval="3000 ">
          <img src="assets/BDP-3.jpg" class="d-block w-100" alt="BLOOD DONATION" style="height: 900px;">
        </div>
        <div class="carousel-item" data-interval="3000">
          <img src="assets/BDP-2.png" class="d-block w-100" alt="BLOOD DONATION" style="height: 900px;">
        </div>
      </div>
    </div>
  </div>
</div><br>

<div class="row">
  <div class="column" style="background-color:#C91C1C; padding:50px">
    <p class="text-center" style="color:#f2f2f2;font-size:25px;">Blood Bank Management System (BBMS) is a browser based system that is designed to store, process, retrieve and analyze information concerned with the administrative and inventory management within a blood bank.</p>
    <a href="product.html" class="btn " style="margin-top: 25px; margin-left: 45%; background-color: #f2f2f2; color:#C91C1C; font-weight:bold">About Us</a>
  </div>
  <div class="column" style="background-color:white">
    <img src="assets/BDP-4.jpg" alt="BLOOD DONATION" style="width:275px; height:275px; margin-left:250px">
  </div>
</div>

<div class="container" style="margin-top:50px; margin-bottom:50px">
<div class="calendar shadow bg-white p-5">
    <div class="d-flex align-items-center"><i class="fa fa-calendar fa-3x mr-3"></i>
      <h2 class="month font-weight-bold mb-0 text-uppercase">JUNE 2022</h2>
    </div>
    <p class="font-italic text-muted mb-5"></p>
    <ol class="day-names list-unstyled">
      <li class="font-weight-bold text-uppercase">Sun</li>
      <li class="font-weight-bold text-uppercase">Mon</li>
      <li class="font-weight-bold text-uppercase">Tue</li>
      <li class="font-weight-bold text-uppercase">Wed</li>
      <li class="font-weight-bold text-uppercase">Thu</li>
      <li class="font-weight-bold text-uppercase">Fri</li>
      <li class="font-weight-bold text-uppercase">Sat</li>
    </ol>

    <ol class="days list-unstyled" style="font-size:small ;">
      <li class="outside">
        <div class="date">30</div>
      </li>
      <li class="outside">
        <div class="date">31</div>
      </li>
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
    </ol>
  </div>
</div>

<div class="container-fluid"><br>
  <div class="row" style="margin-left: 5%;">
    <div class="col-sm-4">
      <div style="width: 40rem; height:29rem;background-color:#C91C1C;">
        <img src="assets/Feature.png" class="card-img-top">
        <div class="card-body" style="background-color:#C91C1C">
          <p class="card-text text-center" style="font-size:medium ; color:white"><strong style="font-size:large ;">ABOUT SYSTEM</strong><br> This project aims at maintaining all the information pertaining to blood donors, different blood groups available in each blood bank and help them manage in a better way.
            Aim is to provide transparency in this field, make the process of obtaining blood from a blood bank hassle free and corruption free and make the system of blood bank management effective.</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aboutSystemModal" style="background-color:white ; border:none ; color:#C91C1C ; font-size:medium ; margin:10px 160px 20px 160px">
             More...
          </button>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div style="width: 40rem;background-color:#a30000;">
        <img src="assets/Blood.png" class="card-img-top">
        <div class="card-body">
          <p class="card-text text-center" style="font-size:medium ; color:white"><strong style="font-size:large ;">BLOOD FACTS</strong><br>It's important to know your blood type—whether you're a donor or a patient in need of blood products. You may be surprised to learn how many people will benefit from your generous gift, no matter what type you have.
            See how common or rare various types of blood are in the Malaysia. Whatever your blood type, we encourage you to donate.</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bloodFactsModal" style="background-color:white ; border:none ; color:#C91C1C ; font-size:medium ; margin:10px 160px 20px 160px">
            More...
          </button>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div style="width: 40rem; height:29rem; background-color:#C91C1C">
        <img src="assets/Blood donation.png" class="card-img-top">
          <div class="card-body" style="background-color:#C91C1C">
            <p class="card-text text-center" style="font-size:medium ; color:white"><strong style="font-size:large ;">BLOOD DONATION</strong><br>Want to learn more about blood, blood need and blood donation?</br>
              <br> Check out these facts to help you whet your curiosity and to understand just why your donation is so important to people in our community.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bloodDonationModal" style="background-color:white ; border:none ; color:#C91C1C ; font-size:medium ; margin:30px 160px 20px 160px">
              More...
            </button>
          </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="aboutSystemModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#C91C1C; font-weight:bold; color:white">
        <h1 class="modal-title">ABOUT SYSTEM</h1>
        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
      </div>
      <div class="modal-body">
        <h3>Features In The System...</h3>
        <h5 style="color:#a30000 ;">
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
        </h5>

        <h3>Importance...</h3>
        <h5 style="color:#a30000 ;">Today, most medical care depends on a steady supply of blood from donors, as one in seven people entering the hospital need blood. 
          For Moffitt, as cancer care increases, so does the demand for blood and platelet donations. An adequate amount of blood is needed in 
          all health care facilities to meet the urgent need for patients facing trauma and other lifesaving procedures, such as blood transfusions – which saves millions of lives each year. Donating blood is a simple procedure that can be done within an hour. 
        </h5>
        <h3>Statistics...</h3>
        <h5 style="color:#a30000 ;">
          - Every 2 seconds someone in the U.S. needs blood and or platelets.  <br>
          - Approximately 29,000 units of red blood cells are needed every day in the U. S.  <br>
          - Nearly 5,000 units of platelets and 6.500 units of plasma are needed daily in the U.S. <br> 
          - Nearly 16 million blood components are transfused each year in the U.S. <br>
          - Sickle cell disease affects 90,000 to 100,000 people in the U.S. <br>
          - About 1,000 babies are born with the disease each year. <br>
          - Sickle cell patients can require blood transfusions throughout their lives. <br>
          - The average red blood cell transfusion is approximately 3 units.<br>
          - A single car accident victim can require as many as 100 units of blood. <br>
          - Blood and platelets cannot be manufactured; they can only come from volunteer donors. <br>
          - The blood type most often requested by hospitals is type O. <br>
          - One donation can help save more than one life. <br>
          - According to the American Cancer Society, more than 1.8 million people are expected to be diagnosed with cancer in 2020. Many of them will need blood, sometimes daily, during &nbsp;&nbsp;their chemotherapy treatment.  
        </h5>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bloodFactsModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#a30000; font-weight:bold; color:white">
        <h1 class="modal-title">BLOOD FACTS</h1>
        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
      </div>
      <div class="modal-body">
        <h3>Blood Types...</h3>
        <h5 style="color:#a30000 ;">              
          It's important to know your blood type—whether you're a donor or a patient in need of blood products. You may be surprised to learn how many people will benefit from your generous gift, no matter what type you have.
          See how common or rare various types of blood are in the Malaysia. Whatever your blood type, we encourage you to donate.
        </h5>
        <table class="table table-bordered" style="width:60%; border:2px solid">
          <tr>
            <th class="text-center" style="border:2px solid">Blood Type</th>
            <th class="text-center" style="border:2px solid">Percent of the population (%)</th>
          </tr>
          <tr>
            <td style="border:2px solid">O</td>
            <td style="border:2px solid">37%</td>
          </tr>
          <tr>
            <td style="border:2px solid">O-</td>
            <td style="border:2px solid">6%</td>
          </tr>
          <tr>
            <td style="border:2px solid">A</td>
            <td style="border:2px solid">34%</td>
          </tr>
          <tr>
            <td style="border:2px solid">A-</td>
            <td style="border:2px solid">6%</td>
          </tr>
          <tr>
            <td style="border:2px solid">B</td>
            <td style="border:2px solid">10%</td>
          </tr>
          <tr>
            <td style="border:2px solid">B-</td>
            <td style="border:2px solid">2%</td>
          </tr>
          <tr>
            <td style="border:2px solid">AB</td>
            <td style="border:2px solid">4%</td>
          </tr>
          <tr>
            <td style="border:2px solid">AB-</td>
            <td style="border:2px solid">1%</td>
          </tr>
        </table>
        <h3>Compatibility...</h3>
        <h5 style="color:#a30000 ;">
          Everyone who is eligible can donate blood, but depending on your blood type, you're only able to receive certain types of blood, plasma or platelets.
          There are eight different blood types, and they're not always compatible with each other. Interestingly, people who have O-negative blood are considered universal donors for the entire population.
        </h5>
        <table class="table table-bordered" style="width:60%; border:2px solid">
          <tr>
            <th class="text-center" style="border:2px solid">Blood Type</th>
            <th class="text-center" style="border:2px solid">Can Donate Red Blood Cells To</th>
            <th class="text-center" style="border:2px solid">Can Receive Red Blood Cells From</th>
          </tr>
          <tr>
            <td style="border:2px solid">O</td>
            <td style="border:2px solid">O,A,B,AB</td>
            <td style="border:2px solid">O,O-</td>
          </tr>
          <tr>
            <td style="border:2px solid">O-</td>
            <td style="border:2px solid">EVERYONE</td>
            <td style="border:2px solid">O-</td>
          </tr>
          <tr>
            <td style="border:2px solid">A</td>
            <td style="border:2px solid">A,AB</td>
            <td style="border:2px solid">O,O-,A,A-</td>
          </tr>
          <tr>
            <td style="border:2px solid">A-</td>
            <td style="border:2px solid">A,A-,AB,AB-</td>
            <td style="border:2px solid">O-,A-</td>
          </tr>
          <tr>
            <td style="border:2px solid">B</td>
            <td style="border:2px solid">B,AB</td>
            <td style="border:2px solid">O,O-,B,B-</td>
          </tr>
          <tr>
            <td style="border:2px solid">B-</td>
            <td style="border:2px solid">B,B-,AB,AB-</td>
            <td style="border:2px solid">O-,B-</td>
          </tr>
          <tr>
            <td style="border:2px solid">AB</td>
            <td style="border:2px solid">AB</td>
            <td style="border:2px solid">EVERYONE</td>
          </tr>
          <tr>
            <td style="border:2px solid">AB-</td>
            <td style="border:2px solid">AB,AB-</td>
            <td style="border:2px solid">O-,A-,B-,AB</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bloodDonationModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#C91C1C; font-weight:bold; color:white">
        <h1 class="modal-title">BLOOD DONATION</h1>
        <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
      </div>
      <div class="modal-body">
        <h3>Blood donation is a safe process. The average adult has 4 to 5 litres of blood. During a donation, only 350 to 450 ml of blood is drawn. About 8% to 12% of your blood volume (depending on your weight) will be taken during blood donation. The fluid (plasma) portion of your donated blood will be replaced in a few days.
          Whole blood donations collect the blood with all its components, while apheresis donations collect specific blood components such as plasma or platelets.
        </h3><br>
        <h3>Eligibility...</h3>
        <h5 style="color:#a30000 ;"> Most people can give blood if they are in good health. There are some basic requirements one  need to fulfill in order to become a blood donor.  Below are some basic eligibility guidelines: 
        </h5>
        <h4>Age :</h4>
        <h5 style="color:#a30000 ;">You are aged between 18 and 65. <br>
        &nbsp;&nbsp;&nbsp;&nbsp;-  In some countries national legislation permits 16–17 year-olds to donate provided that they fulfil the physical and hematological criteria required and that appropriate consent is &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obtained.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;-  In some countries, regular donors over the age of 65 may be accepted at the discretion of the responsible physician. The upper age limit in some countries are 60. </h5>
        <h4>Weight :</h4>
        <h5 style="color:#a30000 ;">You weigh at least 50 kg.  <br>&nbsp;&nbsp;&nbsp;&nbsp; - In some countries, donors of whole blood donations should weigh at least 45 kg to donate 350 ml ± 10% . </h5>
        <h4>Health :</h4> 
        <h5 style="color:#a30000 ;">You must be in good health at the time you donate.
        You cannot donate if you have a cold, flu, sore throat, cold sore, stomach bug or any other infection.
        If you have recently had a tattoo or body piercing you cannot donate for 6 months from the date of the procedure.  If the body piercing was performed by a registered health professional and any inflammation has settled completely, you can donate blood after 12 hours.
        If you have visited the dentist for a minor procedure you must wait 24 hours before donating; for major work wait a month.
        You must not donate blood If you do not meet the minimum haemoglobin level for blood donation.<br>&nbsp;&nbsp;&nbsp;&nbsp;- A test will be administered at the donation site. In many countries, a haemoglobin level of not less than 12.0 g/dl for females and not less than 13.0 g/dl for males as the threshold.
        </h5>
      </div>
    </div>
  </div>
</div>

<div class="row" style="background-color:#C91C1C ; margin-top:50px; margin-bottom: 50px; padding: 10px 0px 30px 0px;">
  <p style="color:white; font-size:xx-large; font-weight:bold; padding-left:20px">Blood Donation Process - FAQ</p>
  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo7" style="color:white; font-size:medium;">Who can donate blood? </button>
    <div id="demo7" class="collapse" style="background-color:white; padding:20px 20px 20px 20px;">
      <h5 style="color:black">In most states, donors must be age 17 or older. Some states allow donation by 16-year-olds with a signed parental consent form. Donors must weigh at least 110 pounds and be in good health. Additional eligibility criteria apply.
          For more information, please refer to our home page - <a href="index.php">BLOOD DONATION</a>
      </h5>
    </div><br>

  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo6" style="color:white; font-size:medium;">How often can I donate blood? </button>
    <div id="demo6" class="collapse" style="background-color:white; padding:20px 20px 20px 20px">
      <h5 style="color:black">You must wait at least eight weeks (56 days) between donations of whole blood and 16 weeks (112 days) between Power Red donations. Whole blood donors can donate up to 6 times a year. Platelet apheresis donors may give every 7 days up to 24 times per year. Regulations are different for those giving blood for themselves (autologous donors).
      </h5>
    </div><br>

  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo1" style="color:white; font-size:medium;">What should I do after donating blood?</button>
    <div id="demo1" class="collapse" style="background-color:white; padding:20px 20px 20px 20px">
      <h5 style="color:black">After you give blood,take the following precautions:<br>
        - Drink an extra four glasses (eight ounces each) of non-alcoholic liquids.<br>
        - Keep your bandage on and dry for the next five hours, and do not do heavy exercising or lifting.<br>
        - If the needle site starts to bleed, raise your arm straight up and press on the site until the bleeding stops.<br> 
        - Because you could experience dizziness or loss of strength, use caution if you plan to do anything that could put you or others at risk of harm. <br>
        - For any hazardous occupation or hobby, follow applicable safety recommendations regarding your return to these activities following a blood donation.<br> 
        - Eat healthy meals and consider adding iron-rich foods to your regular diet, or discuss taking an iron supplement with your health care provider, to replace the iron lost with blood &nbsp;&nbsp;donation.<br>
        - If you get a bruise:  Apply ice to the area intermittently for 10-15 minutes during the first 24 hours. <br>
        - Thereafter, apply warm, moist heat to the area intermittently for 10-15 minutes. <br>
        - A rainbow of colors may occur for about 10 days.If you get dizzy or lightheaded:  Stop what you are doing, lie down, and raise your feet until the feeling passes and you feel well &nbsp;&nbsp;enough to safely resume activities.<br>
        - And remember to enjoy the feeling of knowing you have helped save lives!<br>
        - Schedule your next appointment.
      </h5>
    </div><br>
  
  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo2" style="color:white; font-size:medium;">Will it hurt when you insert the needle? </button>
    <div id="demo2" class="collapse" style="background-color:white; padding:20px 20px 20px 20px">
      <h5 style="color:black">Only for a moment. Pinch the fleshy, soft underside of your arm. That pinch is similar to what you will feel when the needle is inserted.
      </h5>
    </div><br>

  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo" style="color:white; font-size:medium;">How does blood donation process works?</button>
    <div id="demo" class="collapse" style="background-color:white; padding:20px 20px 20px 20px">
      <h5 style="color:black">Donating blood is a simple thing to do, but can make a big difference in the lives of others. The donation process from the time you arrive until the time you leave takes about an hour. The donation itself is only about 8-10 minutes on average. The steps in the process are:<br>
        Registration<br>

        &nbsp;&nbsp; 1. You will complete donor registration, which includes information such as your name, address, phone number, and donor identification number (if you have one).<br>
        &nbsp;&nbsp;2. You will be asked to show a donor card, driver’s license or two other forms of ID.<br>

        Health History and Mini Physical<br>

        &nbsp;&nbsp;1. You will answer some questions during a private and confidential interview about your health history and the places you have traveled.<br>
        &nbsp;&nbsp;2. You will have your temperature, hemoglobin, blood pressure and pulse checked.<br>

        Donation<br>

        &nbsp;&nbsp;1. We will cleanse an area on your arm and insert a brand–new, sterile needle for the blood draw. This feels like a quick pinch and is over in seconds.<br>
        &nbsp;&nbsp;2. You will have some time to relax while the bag is filling. (For a whole blood donation, it is about 8-10 minutes. If you are donating platelets, red cells or plasma by apheresis the collection can take up to 2 hours.)<br>
        &nbsp;&nbsp;3. When approximately a pint of blood has been collected, the donation is complete and a staff person will place a bandage on your arm. <br>

        Refreshments<br>

        &nbsp;&nbsp;1. You will spend a few minutes enjoying refreshments to allow your body time to adjust to the slight decrease in fluid volume.<br>
        &nbsp;&nbsp;2. After 10-15 minutes you can then leave the donation site and continue with your normal daily activities.<br>
        &nbsp;&nbsp;3. Enjoy the feeling of accomplishment knowing that you have helped to save lives.<br>

        Your gift of blood may help up to three people. Donated red blood cells do not last forever. They have a shelf-life of up to 42 days. A healthy donor may donate every 56 days.<br>
      </h5>
    </div><br>
  
  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo3" style="color:white; font-size:medium;">How long does a blood donation take? </button>
    <div id="demo3" class="collapse" style="background-color:white; padding:20px 20px 20px 20px">
      <h5 style="color:black">The entire process takes about one hour and 15 minutes; the actual donation of a pint of whole blood unit takes eight to 10 minutes. However, the time varies slightly with each person depending on several factors including the donor’s health history and attendance at the blood drive.
      </h5>
    </div><br>

  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo4" style="color:white; font-size:medium;">How long will it take to replenish the pint of blood I donate? </button>
    <div id="demo4" class="collapse" style="background-color:white; padding:20px 20px 20px 20px">
      <h5 style="color:black">The plasma from your donation is replaced within about 24 hours. Red cells need about four to six weeks for complete replacement. That’s why at least eight weeks are required between whole blood donations.</h5>
    </div><br>  

  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo8" style="color:white; font-size:medium;">Can I donate after receiving the COVID-19 vaccination?  </button>
    <div id="demo8" class="collapse" style="background-color:white; padding:20px 20px 20px 20px">
      <h5 style="color:black">You may still donate blood, platelets and plasma after receiving a COVID-19 vaccine. Knowing the name of the manufacturer of the vaccine is important in determining your blood donation eligibility.
      </h5>
    </div><br>

  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo9" style="color:white; font-size:medium;"> What if I have tested positive for COVID-19 in the last 10 days? </button>
    <div id="demo9" class="collapse" style="background-color:white; padding:20px 20px 20px 20px">
      <h5 style="color:black">You must be fully recovered from COVID-19 and symptom-free for a least 10 days before donating blood.<br><br>
        If you have had a positive diagnostic test in the past 10 days for COVID-19 but didn’t have symptoms, you will need to wait 10 days after the COVID-19 test. <br><br>
        If you have a pending COVID-19 diagnostic test for COVID-19, you are not able to donate during this time. Once you have tested negative or been symptom-free for 10 days you will be eligible to donate blood.   
      </h5>
    </div><br>

  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo5" style="color:white; font-size:medium;">What if a donor doesn’t want to wear a mask? For example, what if they have a medical condition that makes it difficult or impossible to wear a mask?  </button>
    <div id="demo5" class="collapse" style="background-color:white; padding:20px 20px 20px 20px">
      <h5 style="color:black">
        To ensure the safety of our staff and the blood donor community, if a donor does not want to wear a face mask, we ask they postpone their donation for a later date when masks may no longer be required.
      </h5>
    </div><br>
</div>

<?php include 'layout/_footer.php'; ?>
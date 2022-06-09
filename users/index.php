<?php
$title = "Home";
$setHomeActive = "active";
include 'layout/_header.php';
include 'layout/navbar.php';
?>

<div class="container">

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Facts</a></li>
    <li><a data-toggle="tab" href="#menu2">Activities</a></li>
    <li><a data-toggle="tab" href="#menu3">Q&A</a></li>
  </ul><br>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Why Are We Here For...</h3>
      <h5>Blood Bank Management System (BBMS) is a browser based system that is designed to store, process, retrieve and analyze information concerned with the administrative and inventory management within a blood bank. This project aims at maintaining all the information pertaining to blood donors, different blood groups available in each blood bank and help them manage in a better way. Aim is to provide transparency in this field, make the process of obtaining blood from a blood bank hassle free and corruption free and make the system of blood bank management effective.</h5>
      <h3>Features In The System...</h3>
      <h5>- Blood Donation Camp & Camp Organiser Management.<br>
                - Donor Management - Donor Registration, Managing donor database, recording their physical and medical statistics.<br>
                - Inventory management in blood bank for storage and issuance of blood.<br>
                - Blood requisition and issuance of blood.<br>
                - Online transfer of blood from one blood bank to another.<br>
                - Discarding of expired and unsuitable blood (Less Qty., Reactive, Clotting, Hemolysis).<br>
                - Being a web based system, can be implemented throughout the state. - - Separate user accounts can be created for each blood bank.<br>
                - Patient Register/Blood Sample Receiving Register, Donor Register, Blood Issue Register and Discarded Blood report.<br>
                - Fridge Wise Stock Position and Printing of Fridge Stickers.<br>
                - List of Donors who are eligible for donation on a particular date with contact Number.<br>
                - Camp Wise Donor List and Printing of Donor Cards.<br></h5>

                <h3>Importance...</h3>
                <h5>Today, most medical care depends on a steady supply of blood from donors, as one in seven people entering the hospital need blood. 
            For Moffitt, as cancer care increases, so does the demand for blood and platelet donations. An adequate amount of blood is needed in 
            all health care facilities to meet the urgent need for patients facing trauma and other lifesaving procedures, such as blood transfusions – which saves millions of lives each year. Donating blood is a simple procedure that can be done within an hour. </h5>
            <h3>Statistics...</h3>
            <h5>- Every 2 seconds someone in the U.S. needs blood and or platelets.  <br>
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
            <table class="text-center" style="width:40%">
            <h3>Blood Types...</h3>
            <h5>              
                It's important to know your blood type—whether you're a donor or a patient in need of blood products. You may be surprised to learn how many people will benefit from your generous gift, no matter what type you have.
                See how common or rare various types of blood are in the Malaysia. Whatever your blood type, we encourage you to donate.
</h5>
  <tr>
    <th class="text-center">Blood Type</th>
    <th class="text-center">Percent of the population (%)</th>
  </tr>
  <tr>
    <td>O</td>
    <td>37%</td>
  </tr>
  <tr>
    <td> &nbsp;O-</td>
    <td>6%</td>
  </tr>
  <tr>
    <td>A</td>
    <td>34%</td>
  </tr>
  <tr>
    <td>&nbsp;A-</td>
    <td>6%</td>
  </tr>
  <tr>
    <td>B</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>&nbsp;B-</td>
    <td>2%</td>
  </tr>
  <tr>
    <td>&nbsp;AB</td>
    <td>4%</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;AB-</td>
    <td>1%</td>
  </tr>
</table>
<h3>Compatibility...</h3>
<h5>
    Everyone who is eligible can donate blood, but depending on your blood type, you're only able to receive certain types of blood, plasma or platelets.
    There are eight different blood types, and they're not always compatible with each other. Interestingly, people who have O-negative blood are considered universal donors for the entire population.
</h5>

<table class="text-center" style="width:60%">
  <tr>
    <th class="text-center">Blood Type</th>
    <th class="text-center">Can Donate Red Blood Cells To</th>
    <th class="text-center">Can Receive Red Blood Cells From</th>
  </tr>
  <tr>
    <td>O</td>
    <td>O,A,B,AB</td>
    <td>O,O-</td>
  </tr>
  <tr>
    <td>&nbsp;O-</td>
    <td>EVERYONE</td>
    <td>O-</td>
  </tr>
  <tr>
    <td>A</td>
    <td>A,AB</td>
    <td>O,O-,A,A-</td>
  </tr>
  <tr>
    <td>&nbsp;A-</td>
    <td>A,A-,AB,AB-</td>
    <td>O-,A-</td>
  </tr>
  <tr>
    <td>B</td>
    <td>B,AB</td>
    <td>O,O-,B,B-</td>
  </tr>
  <tr>
    <td>&nbsp;B-</td>
    <td>B,B-,AB,AB-</td>
    <td>O-,B-</td>
  </tr>
  <tr>
    <td>&nbsp;AB</td>
    <td>AB</td>
    <td>EVERYONE</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;AB-</td>
    <td>AB,AB-</td>
    <td>O-,A-,B-,AB</td>
  </tr>
</table><br>
<h3>Eligibility...</h3>
<h5> Most people can give blood if they are in good health. There are some basic requirements one  need to fulfill in order to become a blood donor.  Below are some basic eligibility guidelines: 
</h5>
<h4>Age :</h4>
<h5>You are aged between 18 and 65. <br>
&nbsp;&nbsp;&nbsp;&nbsp;-  In some countries national legislation permits 16–17 year-olds to donate provided that they fulfil the physical and hematological criteria required and that appropriate consent is &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obtained.<br>
&nbsp;&nbsp;&nbsp;&nbsp;-  In some countries, regular donors over the age of 65 may be accepted at the discretion of the responsible physician. The upper age limit in some countries are 60. </h5>
 <h4>Weight :</h4>
<h5>You weigh at least 50 kg.  <br>&nbsp;&nbsp;&nbsp;&nbsp; - In some countries, donors of whole blood donations should weigh at least 45 kg to donate 350 ml ± 10% . </h5>
<h4>Health :</h4> 
<h5>You must be in good health at the time you donate.
You cannot donate if you have a cold, flu, sore throat, cold sore, stomach bug or any other infection.
If you have recently had a tattoo or body piercing you cannot donate for 6 months from the date of the procedure.  If the body piercing was performed by a registered health professional and any inflammation has settled completely, you can donate blood after 12 hours.
If you have visited the dentist for a minor procedure you must wait 24 hours before donating; for major work wait a month.
You must not donate blood If you do not meet the minimum haemoglobin level for blood donation.<br>&nbsp;&nbsp;&nbsp;&nbsp;- A test will be administered at the donation site. In many countries, a haemoglobin level of not less than 12.0 g/dl for females and not less than 13.0 g/dl for males as the threshold.
</h5>



    </div>
    <div id="menu1" class="tab-pane fade">
    <h3>Blood Donation Facts</h3>
    
    <p  style="font-size: 17px;">
    Want to learn more about blood, blood need and blood donation? Check out these facts below to help you whet your curiosity and to understand just why your donation is so important to people in our community.</p>
    <br>
    <img src="know.png" class="rounded mx-auto d-block" style="width:70%;"> <br>
    <p  style="font-size: 17px;">Blood donation is a safe process. The average adult has 4 to 5 litres of blood. During a donation, only 350 to 450 ml of blood is drawn. About 8% to 12% of your blood volume (depending on your weight) will be taken during blood donation. The fluid (plasma) portion of your donated blood will be replaced in a few days.
        Whole blood donations collect the blood with all its components, while apheresis donations collect specific blood components such as plasma or platelets.
</p><br>
<div class="row">
<img src="Facts.png" class="rounded mx-auto d-block" style="width:40%;"> &nbsp;
<img src="200.jpg" class="rounded mx-auto d-block" style="width:45%;">
</div>

     
      
    
    </div>

    <div id="menu2" class="tab-pane fade">
    <button type="button" class="btn btn-outline-success">Blood Donation Campaign Being Held</button><br>
    <div class="row">
      <div class="col-sm-3" style="width: 29rem;">
      <img src="Poster.jpg" class="rounded" style="width:100%;"> 
      </div><br>
      <div class="col-sm-3" style="width: 29rem;">
      <img src="drive.png" class="rounded" style="width:100%;"> 
      </div>
      <div class="col-sm-3" style="width: 29rem;">
      <img src="donor.webp" class="rounded" style="width:100%;"> 
      </div>
      <div class="col-sm-3" style="width: 29rem;">
      <img src="world.jpg" class="rounded" style="width:135%;"> 
      </div>
</div>

  <div class="row">
      <div class="col-sm-3" style="width: 29rem;">
      <img src="mab.jpg" class="rounded" style="width:105%;"> 
      </div><br>
      <div class="col-sm-3" style="width: 29rem;">
      <img src="donate.jpg" class="rounded" style="width:100%;"> 
      </div>
      <div class="col-sm-3" style="width: 29rem;">
      <img src="abc.png" class="rounded" style="width:100%;"> 
      </div>
      <div class="col-sm-3" style="width: 29rem;">
      <img src="let.jpg" class="rounded" style="width:110%;"> 
      </div>
  </div>
    </div>
    <div id="menu3" class="tab-pane fade">
    <h3>Blood Donation Process</h3>
    <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo7">Who can donate blood? </button>
  <div id="demo7" class="collapse">
    <h5>In most states, donors must be age 17 or older. Some states allow donation by 16-year-olds with a signed parental consent form. Donors must weigh at least 110 pounds and be in good health. Additional eligibility criteria apply.
        For more information, please refer to our home page - <a href="index.php">Eligibility</a>
</h5>
  </div><br>

  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo6">How often can I donate blood? </button>
  <div id="demo6" class="collapse">
    <h5>You must wait at least eight weeks (56 days) between donations of whole blood and 16 weeks (112 days) between Power Red donations. Whole blood donors can donate up to 6 times a year. Platelet apheresis donors may give every 7 days up to 24 times per year. Regulations are different for those giving blood for themselves (autologous donors).
</h5>

  </div><br>
  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo1">What should I do after donating blood?</button>
  <div id="demo1" class="collapse">

<h5>After you give blood:<br>

Take the following precautions:

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
   - Schedule your next appointment.</h5>


  </div><br>
 

  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo2">Will it hurt when you insert the needle? </button>
  <div id="demo2" class="collapse">
    <h5>Only for a moment. Pinch the fleshy, soft underside of your arm. That pinch is similar to what you will feel when the needle is inserted.
</h5>
  </div><br>
  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo">How does blood donation process works?</button>
  <div id="demo" class="collapse">
     

<h5>Donating blood is a simple thing to do, but can make a big difference in the lives of others. The donation process from the time you arrive until the time you leave takes about an hour. The donation itself is only about 8-10 minutes on average. The steps in the process are:<br>

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
 

  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo3">How long does a blood donation take? </button>
  <div id="demo3" class="collapse">
    <h5>The entire process takes about one hour and 15 minutes; the actual donation of a pint of whole blood unit takes eight to 10 minutes. However, the time varies slightly with each person depending on several factors including the donor’s health history and attendance at the blood drive.
</h5>
  </div><br>

  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo4">How long will it take to replenish the pint of blood I donate? </button>
  <div id="demo4" class="collapse">
    <h5>The plasma from your donation is replaced within about 24 hours. Red cells need about four to six weeks for complete replacement. That’s why at least eight weeks are required between whole blood donations.</h5>
  </div><br>  

  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo8">Can I donate after receiving the COVID-19 vaccination?  </button>
  <div id="demo8" class="collapse">
    <h5>You may still donate blood, platelets and plasma after receiving a COVID-19 vaccine. Knowing the name of the manufacturer of the vaccine is important in determining your blood donation eligibility.
</h5>
  </div><br>

  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo9"> What if I have tested positive for COVID-19 in the last 10 days? </button>
  <div id="demo9" class="collapse">
    <h5>You must be fully recovered from COVID-19 and symptom-free for a least 10 days before donating blood.<br><br>
If you have had a positive diagnostic test in the past 10 days for COVID-19 but didn’t have symptoms, you will need to wait 10 days after the COVID-19 test. <br><br>
If you have a pending COVID-19 diagnostic test for COVID-19, you are not able to donate during this time. Once you have tested negative or been symptom-free for 10 days you will be eligible to donate blood.   
</h5>
  </div><br>
  <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#demo5">What if a donor doesn’t want to wear a mask? For example, what if they have a medical condition that makes it difficult or impossible to wear a mask?  </button>
  <div id="demo5" class="collapse">
    <h5>
    To ensure the safety of our staff and the blood donor community, if a donor does not want to wear a face mask, we ask they postpone their donation for a later date when masks may no longer be required.
</h5>

  </div><br>

</div>
    </div>
  </div>    
        </div>
    </div>
  </div>
<br>
<?php include 'layout/_footer.php'; ?>
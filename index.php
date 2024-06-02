<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Actuarial Worksite Marketing Services, Inc.</title>

  <link rel="icon" href="images/awms_logo_red_icon.png">

  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/productPage.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/services.css">
  <link rel="stylesheet" href="css/clients.css">
  <link rel="stylesheet" href="css/burger.css">
  <link rel="stylesheet" href="css/contactModal.css">


  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <!-- swiper.js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <script>
    $(document).ready(function() {

      contentHeight = window.innerHeight - $('.navContainer').height();
      $(".pageContentContainer").height(contentHeight);

      $(window).resize(function() {
        contentHeight = window.innerHeight - $('.navContainer').height();
        $(".pageContentContainer").height(contentHeight);

        /* if ($(window).width() < 921) {
          $(".nav-links").height(window.innerHeight + 25);
        } else {
          $('.nav-links').css('height', '');
          if ($('.nav-links').hasClass('open'))
            toggleMenu();
        } */

      });

      $.ajax({
        type: "GET",
        url: "home.html",
        data: {},
        success: function(data) {
          //$('#pageContentContainer').empty();
          //$('#pageContentContainer').html(data);
        },
        error: function() {
          console.log("Error!");
        },
      });

      $('.navButtonContainer, .logo').click(function(e) {
        var url = $(this).attr('id') + ".html";
        console.log(url);
        if (url != "contact.html") {

          e.preventDefault();
          $.ajax({
            type: "GET",
            url: url,
            data: {},
            success: function(data) {
              $('#pageContentContainer').empty();
              $('#pageContentContainer').html(data).hide().fadeIn("slow");
            },
            error: function() {
              console.log("Error!");
            },
          });

        }

      });

    });
  </script>

</head>

<body>
  <!-- 
  
Start of Navigation Bar and Burger Menu

-->
  <div class="navContainer">
    <img class="logo" id="home" src="images/AWMS-Logo.png" alt="">

    <div class="burger">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="burgerMenu"></div>

    <div class="navBar">
      <!-- <div class="navButtonContainer">
        <div class="navButton" id="home">Home</div><i></i>
      </div> -->
      <div class="navButtonContainer" id="services">
        <div class="navButton">Services</div><i></i>
      </div>
      <div class="navButtonContainer" id="products">
        <div class="navButton">Products</div><i></i>
      </div>
      <div class="navButtonContainer" id="clients">
        <div class="navButton">Clients</div><i></i>
      </div>
      <div class="navButtonContainer" id="about">
        <div class="navButton">About Us</div><i></i>
      </div>
      <div class="navButtonContainer" id="contact">
        <div class="navButton">Contact</div><i></i>
      </div>

    </div>

  </div>
  <!-- 
  
End of Navigation Bar and Burger Menu

-->
  <!-- 
  
Start of Page Content 

-->
  <div class="pageContentContainer" id="pageContentContainer">

    <h2 class="clientSectionTitle">Our Clients</h2>

    <p class="clientSectionDescription">We serve our clients in several different capacities from one time ad hoc projects to long term assignments. Client projects include product development, pricing (i.e. manual rating, credibility rating, and experience rating), policy language, actuarial rate filings, reserve valuation, data analytics, experience reporting & forecasting (i.e. utilization, price, cost, and loss ratio), financial projections, profit forecasting, and business modeling.</p>

    <div class="logoCarousel">Logo Carousel</div>

    <h3 class="clientListButton" id="openClientModal">Full Client List</h3>

  </div>
  <!-- 
  
End of Page Content 

-->
  <!-- 
  
Start of Background 

-->

  <div class="background">
    <img class="clouds" id="clouds" src="images/home_background_clouds_min.png">
    <div class="towers" id="towers"></div>
  </div>
  <!-- 
  
End of Background

-->

  <!-- 
  
Start of Client Modal 

-->

  <dialog class="clientModal" id="clientModal">
    <div class="closeClientModal" id="closeClientModal"><ion-icon name="close-circle-outline"></ion-icon></div>
    <h2 class="clientModalTitle">Client List</h2>
    <div class="clientListHolder">
      <ul class="clientList">
        <li>Guardian Life Insurance Company</li>
        <li>United Concordia</li>
        <li>Companion Life Insurance Company</li>
        <li>P&R Dental Strategies</li>
        <li>Dental Network of America</li>
        <li>WellPoint Dental Services</li>
        <li>Continental Life Insurance Company</li>
        <li>DentaQuest</li>
        <li>Delta Dental of Michigan </li>
        <li>Delta Dental of Arkansas</li>
        <li>Delta Dental of Idaho</li>
        <li>Delta Dental of Massachusetts</li>
        <li>Delta Dental of Kansas</li>
        <li>Delta Dental of Oklahoma</li>
        <li>SafeGuard Health Enterprises</li>
        <li>Assurant (Fortis Life and Fortis Benefits)</li>
        <li>Dearborn Life Insurance Company</li>
        <li>Renaissance Life and Health Insurance Company</li>
        <li>Davis Vision</li>
        <li>Superior Vision</li>
        <li>PerioProtect</li>
        <li>Merchant Benefit Administration</li>
        <li>Argus Dental</li>
        <li>Employers Select Benefits</li>
        <li>Transamerica Assurance Company</li>
        <li>Health Resources, Inc.</li>
        <li>Premera Blue Cross of Washington</li>
        <li>Gerber Life Insurance Company</li>
        <li>Premier Access Dental Plans</li>
        <li>DentistDirect Dental Plans</li>
        <li>Bright Benefits</li>
        <li>PrimeCare Benefits Group</li>
        <li>Risk Solutions Resources, Inc.</li>
        <li>Global Preferred Solutions, Inc.</li>
        <li>Time Insurance Company</li>
        <li>Conseco Insurance Companies</li>
        <li>Starmount Life Insurance Company</li>
        <li>Federal Life Insurance Company</li>
        <li>American Public Life Insurance Company</li>
      </ul>
      <ul class="clientList">
        <li>Aflac (American Family Life)</li>
        <li>Dental Care Plus</li>
        <li>Beam Dental</li>
        <li>National Guardian Life Insurance Company</li>
        <li>Nationwide Life Insurance Company</li>
        <li>Kansas City Life Insurance Company</li>
        <li>CareFirst BlueCross BlueShield of Maryland</li>
        <li>American International Group (AIG)</li>
        <li>American Fidelity Assurance Company</li>
        <li>Careington International Corporation</li>
        <li>Louisiana Sate University</li>
        <li>Fidelity Security Life Insurance Company</li>
        <li>Avesis</li>
        <li>Citizens Security Life Insurance Company</li>
        <li>Mutual of Omaha Life insurance Company</li>
        <li>Key Life Insurance Company</li>
        <li>Southland National Insurance Corporation</li>
        <li>SurePoint Reinsurance Advisors, LLC</li>
        <li>Niagara Life Insurance Company</li>
        <li>Blue Cross Blue Shield of South Carolina</li>
        <li>Blue Cross Blue Shield of Minnesota</li>
        <li>Corvesta, Inc.</li>
        <li>Blue Cross Blue Shield of Tennessee</li>
        <li>Liberty Dental Plans</li>
        <li>SeeChange Life Insurance Company</li>
        <li>John Alden Life Insurance Company</li>
        <li>Lewer Life Insurance Company</li>
        <li>Cypress Dental Administrators</li>
        <li>Commercial Travelers Life Insurance Company</li>
        <li>Healthy Choices Benefits</li>
        <li>Nevada Dental Benefits</li>
        <li>LifeMap Assurance Company</li>
        <li>Excel Vision</li>
        <li>Group Vision Services</li>
        <li>Level Benefits</li>
        <li>Humana Specialty Benefits</li>
        <li>Life Insurance Company of Alabama</li>
        <li>Madison National Life Insurance Company </li>
        <li>Group Dental Services</li>
      </ul>
    </div>

  </dialog>

  <!-- 
  
End of Client Modal 

-->

  <!-- 
  
Start of Contact Modal 

-->
  <dialog class="contactModal" id="contactModal">
    <img src="images/awms_logo_red_icon.png" alt="X" class="informationBlockImg">
    <div class="informationBlock">
      <!-- <p>Mobile: (317) 514-5027</p>
      <p>Email: jeff@awms.net</p>
      <p>Address: 5099 E Paynetown Road, Bloomington, IN 47401</p> -->
    </div>

    <div class="closeContactModal" id="closeContactModal"><ion-icon name="close-circle-outline"></ion-icon></div>

    <form class="frm" id="frm" method="dialog">

      <h1>Contact Us</h1>

      <div class="allInp">
        <div class="inp">
          <input type="text" name="name" id="name" required />
          <label>Name</label>
        </div>
        <div class="inp">
          <input type="password" name="email" id="email" required />
          <label>Email</label>
        </div>
        <div class="inp">
          <input type="text" name="subject" id="subject" required />
          <label>Subject</label>
        </div>
        <div class="inp">
          <textarea class="inpTextArea" name="message" id="message" cols="50" rows="4" required></textarea>
          <label>Message</label>
        </div>
      </div>

      <div class="contactButtonContainer" id="contactSend">
        <div class="contactButton">Send</div>
        <input type="submit" style="display: none">
      </div>

    </form>

  </dialog>
  <!-- 
  
End of Contact Modal 

-->

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script type="text/javascript" src="js/burger.js"></script>
  <script type="text/javascript" src="js/modal.js"></script>


</body>

</html>
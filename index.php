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
      <div class="navButtonContainer" id="about">
        <div class="navButton">About Us</div><i></i>
      </div>
      <div class="navButtonContainer" id="clients">
        <div class="navButton">Clients</div><i></i>
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

    <div class="servicesContainer">

      <h1 class="servicesPageTitle">Our Services</h1>

      <div class="servicesGrid">

        <div class="service">
          <h2 class="serviceTitle serviceTitleLeft">Product Development</h2>
          <ul class="serviceList">
            <li>Policy Language</li>
            <li>Underwriting Guidelines</li>
            <li>Marketing Guidelines</li>
            <li>ACA Compliant Plans</li>
          </ul>
        </div>

        <div class="service">
          <h2 class="serviceTitle serviceTitleLeft">Actuarial Financial Services</h2>
          <ul class="serviceList">
            <li>Reserve Valuations</li>
            <li>Statements of Actuarial Opinion</li>
            <li>Financial Forecasting Models</li>
            <li>Actuarial Valuations of Plan Changes</li>
          </ul>
        </div>

        <div class="service">
          <h2 class="serviceTitle serviceTitleRight">Product Pricing</h2>
          <ul class="serviceList">
            <li>Fully Insured Products - PPO, MAC, SBP, Indemnity</li>
            <li>DHMO/Capitated Products</li>
            <li>Individual and Group Products</li>
            <li>Voluntary and Employer Paid Products</li>
            <li>Manual Rating Software Systems</li>
            <li>Renewal Rating Software Systems</li>
            <li>Dollar Based Dental</li>
            <li>Hybrid Dental Plans</li>
          </ul>
        </div>

        <div class="service">
          <h2 class="serviceTitle serviceTitleRight">Experience Analysis</h2>
          <ul class="serviceList">
            <li>Utilization Studies</li>
            <li>Utilization, Price, and Cost Trend Analysis</li>
            <li>Claim Cost and Loss Ratio Trend Analysis</li>
            <li>Persistency/Lapse Studies</li>
            <li>Loss Ratios by Risk Factors</li>
            <li>Durational Loss Ratio Studies</li>
            <li>Scenario Studies</li>
            <li>etc.</li>
          </ul>
        </div>

        <div class="service">
          <h2 class="serviceTitle serviceTitleLeft">Actuarial Rate Filings</h2>
          <ul class="serviceList">
            <li>Actuarial Memorandums</li>
            <li>Annual Rate Certifications</li>
            <li>ACA Rate Filings</li>
            <li>State Specific Certifications</li>
          </ul>
        </div>

        <div class="service">
          <h2 class="serviceTitle serviceTitleLeft">Data Analytics</h2>
          <ul class="serviceList">
            <li>Data Cleaning</li>
            <li>Forecast Modeling</li>
            <li>Insight Evaluation</li>
            <li>Visualization and Analysis</li>
          </ul>
        </div>

      </div>

      <div class="bottom"></div>

    </div>

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
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

    <!-- <div class="aboutContainer">

      <h1 class="aboutPageTitle">About Us</h1>

      <div class="personContainer">
        
        <div class="titleRibbon"> The Company</div>
        <div class="descriptionBox companyBox">Actuarial Worksite Marketing Services, Inc. provides actuarial and data analytic consulting services for employer sponsored group and individual insurance products including Dental, Vision, Critical Illness, Accident, Hearing, and Limited Medical. Our goals are to develop, price, and provide clients with new marketable product solutions while profitably managing existing books of business. As actuaries and data scientists we are uniquely trained and qualified to accomplish these goals. In cooperation with enterprise data warehouse clients, AWMS is setting the industry standard for data analytics, visualization reporting, and dental pricing methodology.</div>
      </div>

      <div class="aboutContainerInner">

        <div class="personContainer">
          <div class="titleRibbon">Jeff DeCapua</div>
          <div class="descriptionBox">Jeff's background includes over 35 years of actuarial experience in the health insurance industry. He was the dental pricing actuary at Protective Life Insurance Company, 2nd VP of Actuarial and Underwriting at Conseco Health Insurance Company, and VP in the Worksite Marketing Division of Transamerica. Jeff has worked as a consulting actuary for 20 years and specializes in group and individual Dental, Vision, Hearing, Critical Illness and Accident Insurance products.</div>
        </div>
        <div class="personContainer">
          <div class="titleRibbon"> Jeff Blacker</div>
          <div class="descriptionBox">Jeff has over 25 years of actuarial experience including consulting projects in Nicaragua, Guatemala, India, Kenya and the United States. His work has included product development, pricing, reserve calculations, and manual rating processes. His projects include, Statements of Actuarial Opinion, actual to expected claims analysis, specified disease incidence rate and long term care claim persistency studies. In addition, Jeff has over 10 years of experience using and coding Polysystems Health Master for LTC, CII, Medicare Supplement as well as ROP and Cash Value riders.</div>
        </div>

      </div>

      <div class="personContainer">
        <div class="titleRibbon"> Jacob Decapua</div>
        <div class="descriptionBox">Jacob graduated in May 2021 with a M.S. in Mathematics from Ball State University. His role as a Data Quality Analyst for Meta involves leading the data collection and reporting for multiple research locations. In addition, as Data Scientist at AWMS, he is the lead programmer and analyst assisting in all decision making processes. His responsibilities include data engineering, data cleaning, data visualization, data analysis, and insight reporting.</div>
      </div>

      <div class="bottom"></div>

    </div> -->

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
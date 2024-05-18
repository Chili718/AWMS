<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Actuarial Worksite Marketing Services, Inc.</title>

  <link rel="icon" href="images/awms_logo_red_icon.png">

  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/pageContent.css">
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
        //console.log(url);
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

    <div class="productPageContent">

      <h1 class="productPageTitle">Our Products</h1>

      <h2>Group -- Voluntary -- Individual</h2>

      <!-- Slider main container -->
      <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="productContainer swiper-slide">
            <img class="productImg" id="dental" src="images/dental.png" alt="X">
            <h3 class="productDescriptor">Dental</h3>
          </div>
          <div class="productContainer swiper-slide">
            <img class="productImg" id="vision" src="images/vision.png" alt="X">
            <h3 class="productDescriptor">Vision</h3>
          </div>
          <div class="productContainer swiper-slide">
            <img class="productImg" id="hearing" src="images/hearing.png" alt="X">
            <h3 class="productDescriptor">Hearing</h3>
          </div>
          <div class="productContainer swiper-slide">
            <img class="productImg" id="illness" src="images/critical_illness.png" alt="X">
            <h3 class="productDescriptor">Critical Illness</h3>
          </div>
          <div class="productContainer swiper-slide">
            <img class="productImg" id="accident" src="images/accident.png" alt="X">
            <h3 class="productDescriptor">Accident</h3>
          </div>
          <div class="productContainer swiper-slide">
            <img class="productImg" id="limited" src="images/limited_medical.png" alt="X">
            <h3 class="productDescriptor">Limited Medical</h3>
          </div>
        </div>
        <!-- If we need pagination -->
        <!--     <div class="swiper-pagination"></div> -->

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- <div class="swiper-pagination"></div> -->
      </div>

      <div class="productDetails">
        <div class="productDetailsContainer" id="benefit">
          <h1 class="detailsTitle">Benefit Options</h1>
          <ul class="productDetailsList">

          </ul>
        </div>
        <div class="productDetailsContainer" id="features">
          <h1 class="detailsTitle">Key Features</h1>
          <ul class="productDetailsList">

          </ul>
        </div>
        <div class="productDetailsContainer" id="rating">
          <h1 class="detailsTitle">Rating Options</h1>
          <ul class="productDetailsList">

          </ul>
        </div>
      </div>


      <div class="bottom"></div>

      <!-- <h1 class="productPageTitle">Our Products</h1>

      <h2>Group -- Voluntary -- Individual</h2>



      <div class="products">
        <div class="productContainer">
          <img class="productImg" id="dental" src="images/dental.png" alt="X">
          <h3 class="productDescriptor">Dental</h3>
        </div>
        <div class="productContainer">
          <img class="productImg" id="vision" src="images/vision.png" alt="X">
          <h3 class="productDescriptor">Vision</h3>
        </div>
        <div class="productContainer">
          <img class="productImg" id="hearing" src="images/hearing.png" alt="X">
          <h3 class="productDescriptor">Hearing</h3>
        </div>
        <div class="productContainer">
          <img class="productImg" id="illness" src="images/critical_illness.png" alt="X">
          <h3 class="productDescriptor">Critical Illness</h3>
        </div>
        <div class="productContainer">
          <img class="productImg" id="accident" src="images/accident.png" alt="X">
          <h3 class="productDescriptor">Accident</h3>
        </div>
        <div class="productContainer">
          <img class="productImg" id="limited" src="images/limited_medical.png" alt="X">
          <h3 class="productDescriptor">Limited Medical</h3>
        </div>
      </div>



      <div class="productDetails">
        <div class="productDetailsContainer" id="benefit">
          <h1 class="detailsTitle">Benefit Options</h1>
          <ul class="productDetailsList">

          </ul>
        </div>
        <div class="productDetailsContainer" id="features">
          <h1 class="detailsTitle">Key Features</h1>
          <ul class="productDetailsList">

          </ul>
        </div>
        <div class="productDetailsContainer" id="rating">
          <h1 class="detailsTitle">Rating Options</h1>
          <ul class="productDetailsList">

          </ul>
        </div>
      </div>


      <div class="bottom"></div> -->
    </div>
    <script type="text/javascript" src="js/products.js"></script>
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
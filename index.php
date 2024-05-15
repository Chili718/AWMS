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

  <script>
    $(document).ready(function() {

      $.ajax({
        type: "GET",
        url: "home.html",
        data: {},
        success: function(data) {
          $('#pageContent').empty();
          $('#pageContent').html(data);
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
              $('#pageContent').empty();
              $('#pageContent').html(data).hide().fadeIn("slow");
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
        <div class="navButton">Our Services</div><i></i>
      </div>
      <div class="navButtonContainer" id="products">
        <div class="navButton">Our Products</div><i></i>
      </div>
      <div class="navButtonContainer" id="about">
        <div class="navButton">About Us</div><i></i>
      </div>
      <div class="navButtonContainer" id="clients">
        <div class="navButton">Our Clients</div><i></i>
      </div>
      <div class="navButtonContainer" id="contact">
        <div class="navButton">Contact</div><i></i>
      </div>

    </div>

  </div>

  <div class="pageContentContainer" id="pageContentContainer">

    <div class="pageContent" id="pageContent"></div>

  </div>


  <div class="background">
    <img class="clouds" id="clouds" src="images/home_background_clouds_min.png">
  </div>

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

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script type="text/javascript" src="js/burger.js"></script>
  <script type="text/javascript" src="js/modal.js"></script>


</body>

</html>
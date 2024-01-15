<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
  <!-- footer starts -->
  <section class="footer container-fluid">
    <div class="custom-container">
      <div class="row">
        <div class="col-md-8 col-12">
          <div class="addess">
            <h4>Address</h4>
            <p>Office Name</p>
            <p>Building Name</p>
            <p>Location</p>
            <h6>OPEN FROM 9 AM TO 6 PM FROM MONDAY TO FRIDAY</h6>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="contact">
            <a href="#"><img src="img/whatsapp.png"> Chat with us</a>
            <a href="tel:+971552010747"><span class="material-symbols-outlined">call</span> +91 1234567890</a>
            <a href="mailto:info@Company.ae"><span class="material-symbols-outlined">mail</span> info@company.ae</a>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <p>Copyright © 2023 Company Center. All Rights Reserved.</p>
    </div>
  </section>
  <!-- footer ends -->




    
  

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

  <script src="js/bootstrap.min.js"></script>


  <script>
    $(function () {
      $(document).scroll(function () {
        var $nav = $(".navbar-fixed-top");
        $nav.toggleClass('scrolled-inner', $(this).scrollTop() > $nav.height());
      });
    });
  </script>

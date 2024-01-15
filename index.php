<?php
include('connection.php');
include('fetch_ads.php');
include('fetch_servicemodels.php');
$query = "SELECT *FROM image_tb";
$res = mysqli_query($con,$query);
if($res)
{
  if(mysqli_num_rows($res)>0)
  {
    $row = mysqli_fetch_assoc($res);
    $logo = $row['logo'];
    $banner = $row['banner'];
    $contact_img = $row['contact_img'];
    $path_of_images = 'img/';
    if($logo!='')
    $logo_path = $path_of_images.$logo;
    if($banner!='')
    $banner_path = $path_of_images.$banner;
    if($contact_img!='')
    $contact_img_path = $path_of_images.$contact_img;
  }
  $query = "SELECT *FROM index_tb";
$res = mysqli_query($con,$query);
if($res)
{
  $ph_default = '1234567890';
  $mail_default = 'info@company.ae';
  if(mysqli_num_rows($res)>0)
  {
    $row = mysqli_fetch_assoc($res);
    if($row['title']!='')
    $title = $row['title'];
    if($row['subtitle']!='')
    $subtitle = $row['subtitle'];
    if($row['phone']!='')
    $phone = $row['phone'];
    else
    $phone = $ph_default;
    if($row['email']!='')
    $email = $row['email'];
    else
    $email = $mail_default;
    if($row['timing']!='')
    $timing = $row['timing'];
    else
    $timing = 'Monday to Friday 9 AM to 6 PM';
    if($row['contact_title']!='')
    $contact_title = $row['contact_title'];
    if($row['contact_subtitle']!='')
    $contact_subtitle = $row['contact_subtitle'];
    if($row['service_title']!='')
    $service_title = $row['service_title'];
  }
  else {
    $phone = $ph_default;
    $email = $mail_default;
  }
}
}
$query = "SELECT *FROM address_tb";
$res = mysqli_query($con,$query);
if($res)
{
  if(mysqli_num_rows($res)>0)
  {
    $row = mysqli_fetch_assoc($res);
    if($row['office_name']!='')
    $office_name = $row['office_name'];
    else
    $office_name = 'office name';
    if($row['building_name']!='')
    $building_name = $row['building_name'];
    else
    $building_name = 'Building name';
    if($row['location']!='')
    $location = $row['location'];
    else
    $location = 'Location';
  }
  else{
    $office_name='Office name';
    $building_name='Building name';
    $location='Location';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
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
<body>

  <!-- navbar starts -->
  <div class="navbar navbar-fixed-top">
    <div class="logo">
      <?php
      if(isset($logo_path))
      {
        ?>
        <img src="<?php echo $logo_path; ?>">
        <?php
      }
      else
      {
      ?>
      <img src="img/logo.png">
      <?php
      }
      ?>
    </div>
    <div class="nav-btns">
      <ul>
        <li><a href="#"><img src="img/phone-call.png"> <span><?php if(isset($phone)): echo '+91 '.$phone; endif; ?></span></a></li>
        <li><a href="#"><img src="img/whatsapp.png"> <span>Chat with us</span></a></li>
         <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
  <!-- navbar ends -->

  <!-- slider starts -->
  <section class="slider-main container-fluid" <?php if (isset($banner_path) && !empty($banner_path)): ?>
    style="background-image: url('<?php echo $banner_path; ?>');"
<?php endif; ?>>
    <div class="custom-container">
      <div class="row">
        <div class="col-md-7 col-12 m-auto">
          <div class="content">
            <?php
              if(isset($title))
              {
                ?>
                <h1><?php echo $title; ?></h1>
                <?php
              }
              else
              {
                ?>
                <h1>Business Virtual Office with Company in 60 Minutes</h1>
                <?php
              }
              ?>
              <?php
              if(isset($subtitle))
              {
                ?>
                <h2><?php echo $subtitle; ?></h2>
                <?php
              }
              else
              {
              ?>
              <h2>Get started with Company Now</h2>
              <?php
              }
              ?>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <div class="form-box">
            <div class="head">
              <span class="material-symbols-outlined">phone_in_talk</span>
              <h4>Request Call back</h4>
            </div>
            <form>
              <div class="form-group">
                <span class="material-symbols-outlined">person</span>
                <input type="text" placeholder="Name">
              </div>
              <div class="form-group">
                <span class="material-symbols-outlined">call</span>
                <input type="tel" placeholder="Mobile Number">
              </div>
              <div class="form-group">
                <span class="material-symbols-outlined">mail</span>
                <input type="email" placeholder="Email">
              </div>
              <div class="form-group">
                <span class="material-symbols-outlined">description</span>
                <input type="text" placeholder="Message">
              </div>
              <div class="form-group">
                <button>Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- slider ends -->


  <!-- about starts -->
  <section class="about-main container-fluid">
    <div class="custom-container">
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="content">
            <span class="material-symbols-outlined">description</span>
            <h4><?php echo $ad_lines[0]; ?></h4>
            <p><?php echo $ad_descriptions[0]; ?></p>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="content">
            <span class="material-symbols-outlined">trending_up</span>
            <h4><?php echo $ad_lines[1]; ?></h4>
            <p><?php echo $ad_descriptions[1]; ?></p>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="content">
            <span class="material-symbols-outlined">schedule</span>
            <h4><?php echo $ad_lines[2]; ?></h4>
            <p><?php echo $ad_descriptions[2]; ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about ends -->


  <!-- banner starts -->
  <section class="banner-starts container-fluid" <?php if (isset($contact_img_path) && !empty($contact_img_path)): ?>
    style="background-image: url('<?php echo $contact_img_path; ?>');"
<?php endif; ?>>
    <div class="custom-container">
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="content">
            <?php
              if(isset($contact_title))
              {
                echo "<h4>$contact_title</h4>";
              }
              else
              {
                ?>
            <h4>Ready to Kickstart Your Business Success Now?</h4>
            <?php
              }
              if(isset($contact_subtitle))
              {
                echo "<h6>$contact_subtitle</h6>";
              }
              else
              {
              ?>
            <h6>Accelerate your business setup with Company</h6>
            <?php
              }
              ?>
          </div>
        </div>
        <div class="col-md-6 col-12 m-auto">
          <div class="button">
            <a href="#">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner ends -->


  <!-- highlights starts -->
  <section class="highlights-main container-fluid">
    <div class="custom-container">
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="caption">
            <?php
              if(isset($service_title))
              echo "<h2>$service_title</h2>";
              else
              {
               ?>
              <h2>No Hidden Charges, Complete Transparency</h2>
              <?php
              }
            ?>
          </div>
        </div>
        <div class="col-md-8 col-12">
          <div class="highlights">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="ht-content">
                  <div class="row">
                    <div class="col-1">
                      <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <div class="col-11">
                      <h4><?php echo $service_lines[0]; ?></h4>
                      <p><?php echo $service_descriptions[0]; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="ht-content">
                  <div class="row">
                    <div class="col-1">
                      <span class="material-symbols-outlined">price_check</span>
                    </div>
                    <div class="col-11">
                      <h4><?php echo $service_lines[1]; ?></h4>
                      <p><?php echo $service_descriptions[1]; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="ht-content">
                  <div class="row">
                    <div class="col-1">
                      <span class="material-symbols-outlined">history</span>
                    </div>
                    <div class="col-11">
                      <h4><?php echo $service_lines[2]; ?></h4>
                      <p><?php echo $service_descriptions[2]; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="ht-content">
                  <div class="row">
                    <div class="col-1">
                     <span class="material-symbols-outlined">groups</span>
                    </div>
                    <div class="col-11">
                      <h4><?php echo $service_lines[3]; ?></h4>
                      <p><?php echo $service_descriptions[3]; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="ht-content">
                  <div class="row">
                    <div class="col-1">
                     <span class="material-symbols-outlined">computer</span>
                    </div>
                    <div class="col-11">
                      <h4><?php echo $service_lines[4]; ?></h4>
                      <p><?php echo $service_descriptions[4]; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="ht-content">
                  <div class="row">
                    <div class="col-1">
                     <span class="material-symbols-outlined">center_focus_strong</span>
                    </div>
                    <div class="col-11">
                      <h4><?php echo $service_lines[5]; ?></h4>
                      <p><?php echo $service_descriptions[5]; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- highlights ends -->


  <!-- footer starts -->
  <section class="footer container-fluid">
    <div class="custom-container">
      <div class="row">
        <div class="col-md-8 col-12">
          <div class="addess">
            <h4>Address</h4>
            <p><?php echo $office_name; ?></p>
            <p><?php echo $building_name; ?></p>
            <p><?php echo $location; ?></p>
            <?php 
            if(isset($timing))
            {
              ?>
              <h6 style="text-tranform:uppercase;"><?php echo $timing; ?></h6>
              <?php
            }
            else
            {
              ?>
            <h6>OPEN FROM 9 AM TO 6 PM FROM MONDAY TO FRIDAY</h6>
            <?php
            }
            ?>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="contact">
            <a href="#"><img src="img/whatsapp.png"> Chat with us</a>
            <?php 
            if(isset($phone))
            {
              ?>
              <a href="tel:+971552010747"><span class="material-symbols-outlined">call</span> +91 <?php echo $phone; ?></a>
              <?php
            }
            else
            {
            ?>
            <a href="tel:+971552010747"><span class="material-symbols-outlined">call</span> +91 1234567890</a>
            <?php
            }
            ?>
            <a href="<?php if(isset($email)): echo $email; endif; ?>"><span class="material-symbols-outlined">mail</span><?php if(isset($email)): echo $email; endif; ?></a>
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
</body>
</html>
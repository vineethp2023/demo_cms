  <?php
    session_start();
    if(!isset($_SESSION['login_id']))
    header('Location:../index.php');
    else
    {
    include 'admin_header.php';
    $_SESSION['preventBack'] = true;
    }
  ?>
  <style>
    textarea{
      width:100%;
      padding-left:30px;
      padding-right:30px;
      border-color: black;
    }
    caption{
      font-weight: bold;
      color:darkblue;
    }
  </style>
  <!-- slider starts -->
  <section class="slider-main container-fluid">
    <div class="custom-container">
      <div class="row">
        <div class="col-md-7 col-12 m-auto">
          <div class="content">
            <h1>Edit Images and logo in Home page</h1>
            <h2>We let you decide on the way you like to choose</h2>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <div class="form-box">
            <div class="head">
              <h4>Manage Images</h4>
            </div>
            <form method='post' action='process_images.php' enctype='multipart/form-data'>
              <div class="form-group">
              <div class="form-group">
                <caption>Update logo image</caption>
                <input type="file" name="logo">
              </div>
              <div class="form-group">
                <caption>Change banner image</caption>
                <input type="file" name="banner_img">
              </div>
              <div class="form-group">
                <caption>Change Contact form image</caption>
                <input type="file" name="contact_img">
              </div>
              <br>
              <div class="form-group">
               <input type="submit" value="submit" name="submit"></input>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- slider ends -->
<?php 
  include 'admin_footer.php';
?>

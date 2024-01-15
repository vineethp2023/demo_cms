  <?php
    session_start();
    if(!isset($_SESSION['login_id']))
    header('Location:../index.php');
    else
    {
    include 'admin_header.php';
    if ($_SESSION['preventBack'] == false) {
      echo '<script>';
      // JavaScript code to prevent back navigation
      echo 'history.pushState(null, null, location.href);';
      echo 'window.onpopstate = function () { history.go(1); };';
      echo '</script>';
    }
    }
  ?>
  <!-- section starts -->
  <section class="slider-main container-fluid">
    <div class="custom-container">
      <div class="row">
        <div class="col-md-7 col-12 m-auto">
          <div class="content">
            <h1>Manage Info and content in your home page</h1>
            <h2>We let you decide on the way you like to choose</h2>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <div class="form-box">
            <div class="head">
              <h4>Manage Index Feed</h4>
            </div>
            <form method='post' action='process_feed.php'>
              <div class="form-group">
              <div class="form-group">
                <caption>Title for the page</caption>
                <input type="text"  name="title" placeholder="Title for the page">
              </div>
               <div class="form-group">
                <caption>Subtitle</caption>
                <input type="text" name="subtitle"  placeholder="Subtitle here">
              </div>
              <div class="form-group">
                <caption>Ttile for contact us</caption>
                <input type="text" name="contact_title"  placeholder="Create a subtitle">
              </div>
              <div class="form-group">
                <caption>Subttile for contact us</caption>
                <input type="text" name="contact_subtitle"  placeholder="Create a subtitle">
              </div>
              <div class="form-group">
                <caption>Ttile for Service model</caption>
                <input type="text" name="service_title"  placeholder="Service delivery model title">
              </div>
              <div class="form-group">
                <caption>E-mail</caption>
                <input type="email" name="email" placeholder="ex: yourmail@xyz.com">
              </div>
              <div class="form-group">
                <caption>Phone no</caption>
                <input type="text" name="phone" placeholder="Your phone number">
              </div>
              <div class="form-group">
                <caption>Timing Details</caption>
                <input type="text" name="timing" placeholder="Ex: Monday to Friday 9AM to 4PM">
              </div>
              <div class="form-group">
               <button type="submit" name="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section ends -->
<?php 
  include 'admin_footer.php';
?>

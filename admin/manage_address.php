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
            <h1>Manage address info in your home page</h1>
            <h2>We let you decide on the way you like to choose</h2>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <div class="form-box">
            <div class="head">
              <h4>Manage Index Feed</h4>
            </div>
            <form method='post' action='process_address.php'>
              <div class="form-group">
              <div class="form-group">
                <caption>Office name</caption>
                <input type="text"  name="office_name" placeholder="Name of office">
              </div>
               <div class="form-group">
                <caption>Building name</caption>
                <input type="text" name="building_name"  placeholder="ABC Buildings">
              </div>
              <div class="form-group">
                <caption>Location</caption>
                <input type="text" name="location" placeholder="ex: Kottayam">
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

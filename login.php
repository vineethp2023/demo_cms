  <?php
    session_start();
    include 'header.php';
    if(isset($_SESSION['error']))
    $error = $_SESSION['error'];
    else
    $error = '';
  ?>
  <!-- slider starts -->
  <section class="slider-main container-fluid">
    <div class="custom-container">
      <div class="row">
        <div class="col-md-7 col-12 m-auto">
          <div class="content">
            <h1>Business Virtual Office with Company in 60 Minutes</h1>
            <h2>Get started with Company Now</h2>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <div class="form-box">
            <div class="head">
              <h4>Login Here</h4>
            </div>
            <form method='post' action='process_login.php'>
              <div class="form-group">
                <caption>Email/Username</caption>
                <input type="email" placeholder="Email" name='email' onkeyup='clear_error()'>
              </div>
                <div class="form-group">
                    <caption>Password</caption>
                <input type="password" placeholder="Type your password" name='password'  onkeyup='clear_error()'>
              </div>
              <?php
              if($error)
              {
                ?>
              <p id="error"><?php echo $error; ?></p>
                <?php
              }
              ?>
              <div class="form-group">
                <input type='submit' value='submit'>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    function clear_error()
    {
       document.getElementById('error').innerHTML= '';
    }
  </script>
  <style>
    #error{
      color:red;
      font-weight:bolder;
    }
  </style>
  <!-- slider ends -->
<?php 
  include 'footer.php';
?>

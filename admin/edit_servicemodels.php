<?php
    session_start();
    include('../connection.php');
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
    $query = "SELECT *FROM service_tb";
    $res = mysqli_query($con,$query);
?>
  <!-- section starts -->
  <section class="slider-main container-fluid">
    <div class="custom-container">
      <div class="row">
        <div class="col-md-3 col-5 m-auto">
          <div class="content">
            <h1>Manage description of your service delivery</h1>
            <h2>We let you decide on the way you like to choose</h2>
          </div>
        </div>
        <div class="col-md-8 col-13">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">SI No</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
                <?php
                if(mysqli_num_rows($res)>0)
                {
                    $count = 0;
                    ?>
                <?php
                while($row = mysqli_fetch_assoc($res))
                {
                  ?>
                   <tr>
                    <?php
                    $count = $count+1;
                    ?>
                    <th scope="row"><?php echo $count; ?></th>
                    <th scope="row"><?php echo $row['title']; ?></th>
                    <th scope="row"><?php echo $row['description']; ?></th>
                    <th scope="row"><button  class="promptButton btn btn-primary" data-id="<?php echo $row['id']; ?>">Edit</button></th>
                    </tr>
                    <?php
                }
                ?>
                    <?php
                }
                else
                {
                    ?>
                    <tbody>
                        <tr>
                        <th scope="row" colspan="4">NO RECORDS FOUND</th>
                        </tr>
                    </tbody>
                    <?php
                }
                ?>
        </tbody>
        </table>
        </div>
      </div>
    </div>
  </section>
  <!-- section ends -->
  <script>
  const promptButtons = document.querySelectorAll(".promptButton");
    for (const button of promptButtons) {
  button.addEventListener("click", function() {
       console.log("Button clicked:", this.dataset.id);
       var description = prompt("Enter a description:");
  var ad_id = this.dataset.id; // Get the ID from the button's data attribute
  if (description) {
    console.log('ID:'+id);
    console.log('Desc: '+description);
    // Send description to PHP using AJAX
    fetch("process_adlines.php", {
      method: "POST",
      body: JSON.stringify({ description: description, id: id })
    })
    .then(response => response.text())
    .then(data => {
      // Handle PHP response (e.g., display a success message)
      console.log(data);
    })
    .catch(error => console.error(error));
  }
  caches.keys().then(function(cacheNames) {
  return Promise.all(cacheNames.map(function(cacheName) {
    return caches.delete(cacheName);
  }));
}).then(function() {
  location.reload();
});

  });
}
    
</script>
<?php
include('admin_footer.php');
?>
<style>
    .table,.content{
        margin-top:130px;
    }
    .table{
        background-color:white;
        box-shadow: 2px 3px 5px 3px black;
    }
    .table thead{
      background-color:#102e44;
      color:white;
    }
</style>
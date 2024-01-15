<?php
include('connection.php');
$ad_query = "SELECT *FROM adv_tb";
$empty_checker_ad = mysqli_query($con,$ad_query);
if($empty_checker_ad)
{
      $ad_lines = array("Services We Offer to Our Customers","Your Trusted Business Solution Partner","Cut the Business Setup Time by 90% Get Virtual Office Company in Just 60 Minutes !");
      $ad_descriptions = array("You can rely on Company to help you to manage your company more effectively. Set up your Business & Virtual office with Company in 60 minutes.","Company is your premier online Business & Office Company assistance firm in the UAE. We understand that navigating the intricacies of Virtual Company processes can be overwhelming and time-consuming. That's why we're here to make your journey to the UAE easy, seamless, and hassle-free.","Company helps beginners and professionals to effortlessly establish businesses online, in less than an hour.");
      $counter = 0;
    if(mysqli_num_rows($empty_checker_ad)>0)
    {
      while($row=mysqli_fetch_assoc($empty_checker_ad))
      {
        if($row['ad_line']!='')
        $ad_lines[$counter] = $row['ad_line'];
        if($row['description']!='')
        $ad_descriptions[$counter] = $row['description'];
        $counter = $counter+1;
      }
    }

}
?>
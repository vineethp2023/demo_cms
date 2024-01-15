<?php
include('connection.php');
$service_query = "SELECT *FROM service_tb";
$empty_checker_service = mysqli_query($con,$service_query);
if($empty_checker_service)
{
    $service_lines = array("Time Saving",
    "24/7 Support",
    "Online Procedure"
    ,"Cost-Effective",
    "Co-operative Team",
    "Customer Focused");
    $service_descriptions = array("Getting the procedure done in just 60 minutes! The faster the better right!",
    "Get the best of the customer service with fully trained represenatives.",
    "Get it done online from the comfort of your home. No more long queues.",
    "We don’t let your pocket take a dent. Enjoy the services but at affordable prices.",
    "Our team is always there by your side. Get the support of the most dedicated team in U.A.E",
    "We focus on you and your needs. We deliver for results, to make your work easier and simpler.");
    if(mysqli_num_rows($empty_checker_service)>0)
    {
      $counter = 0;
      while($row=mysqli_fetch_assoc($empty_checker_service))
      {
        if($row['title']!='')
        $service_lines[$counter] = $row['title'];
        if($row['description']!='')
        $service_descriptions[$counter] = $row['description'];
        $counter = $counter+1;
      }
    }

}
?>
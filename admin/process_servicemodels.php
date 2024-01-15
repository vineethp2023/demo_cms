<?php
include('../connection.php');
// Access the description sent from JavaScript
$description = json_decode(file_get_contents('php://input'), true)['description'];
$id = json_decode(file_get_contents('php://input'), true)['id']; // Access the ID here

// Sanitize the description to prevent injection attacks
$sanitizedDescription = htmlspecialchars($description, ENT_QUOTES);
$sanitizedId = filter_var($ad_id,FILTER_VALIDATE_INT); // Validate ID as an integer
echo "id recievedL ".$id;
// Save the description to the database 
$query = "UPDATE service_tb SET description = '$sanitizedDescription' WHERE id='$sanitizedId'";
$res = mysqli_query($con,$query);
error_log("Received description: $sanitizedDescription");
error_log("Received ad_id: $sanitizedId");
error_log("Query result: $res");

// if($res)
// {
// header('Location:edit_adlines.php');
// echo "<script> alert('Description updated'); </script>";
// }
// Send a response back to JavaScript
echo "Description saved successfully!";
?>

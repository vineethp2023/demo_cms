<?php
include('../connection.php');
if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $contact_title = $_POST['contact_title'];
    $contact_subtitle = $_POST['contact_subtitle'];
    $service_title = $_POST['service_title'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $timing = $_POST['timing'];
    $emptycheck = "SELECT *FROM index_tb";
    $empty_chk_res = mysqli_query($con,$emptycheck);
    if($empty_chk_res)
    {
        if(mysqli_num_rows($empty_chk_res)>0)
        {
            if(!empty($title))
            {
                $updatequery = "UPDATE index_tb SET title = '$title'";
                $update_res = mysqli_query($con,$updatequery);
            }
            if(!empty($subtitle))
            {
                $updatequery = "UPDATE index_tb SET subtitle = '$subtitle'";
                $update_res = mysqli_query($con,$updatequery);
            }
            if(!empty($contact_title))
            {
                $updatequery = "UPDATE index_tb SET contact_title = '$contact_title'";
                $update_res = mysqli_query($con,$updatequery);
            }
            if(!empty($contact_subtitle))
            {
                $updatequery = "UPDATE index_tb SET contact_subtitle = '$contact_subtitle'";
                $update_res = mysqli_query($con,$updatequery);
            }
            if(!empty($service_title))
            {
                $updatequery = "UPDATE index_tb SET service_title = '$service_title'";
                $update_res = mysqli_query($con,$updatequery);
            }
            if(!empty($phone))
            {
                $updatequery = "UPDATE index_tb SET phone = '$phone'";
                $update_res = mysqli_query($con,$updatequery);
            }
            if(!empty($email))
            {
                $updatequery = "UPDATE index_tb SET email = '$email'";
                $update_res = mysqli_query($con,$updatequery);
            }
            if(!empty($timing))
            {
                $updatequery = "UPDATE index_tb SET timing = '$timing'";
                $update_res = mysqli_query($con,$updatequery);
            }
            if($update_res)
            {
            header('Location:manage_feed.php');
            echo "<script> alert('Details updated successfully'); </script>";
            }
        }
        else
        {
            $ins_query = "INSERT INTO index_tb(title,subtitle,contact_title,contact_subtitle,service_title,phone,email,timing) VALUES('$title','$subtitle','$contact_title','$contact_subtitle','$service_title','$phone','$email','$timing')";
            $ins_res = mysqli_query($con,$ins_query);
            if($ins_query)
            {
                header('Location:manage_feed.php');
                echo "<script> alert('Details updated successfully'); </script>";
            }
        }
    }

}
?>
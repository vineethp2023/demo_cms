<?php
session_start();
if(!isset($_SESSION['login_id']))
header('Location:../index.php');
include('../connection.php');
$res1 = false;
$res2 = false;
if(isset($_POST['submit']))
{
    if(isset($_FILES['logo']) or isset($_FILES['banner_img']) or isset($_FILES['contact_img']))
    {
        $logo_img_name = $_FILES['logo']['name'];
        $banner_img_name = $_FILES['banner_img']['name'];
        $contact_img_name = $_FILES['contact_img']['name'];
    }
    $target_dir = '../img/';
    $logotarget_file = $target_dir . basename($_FILES["logo"]["name"]);
    $bannertarget_file = $target_dir.basename($_FILES['banner_img']['name']);
    $contacttarget_file = $target_dir.basename($_FILES['contact_img']['name']);
    $empty_checker = "SELECT *FROM image_tb";
    $result_emptycheck = mysqli_query($con,$empty_checker);
    if($result_emptycheck)
    {
        print('Empty status checked</br>');
        if(mysqli_num_rows($result_emptycheck)>0)
        {
            if(!empty($logo_img_name))
            {
            $query_update = "UPDATE image_tb SET logo ='$logo_img_name'";
            $res1 = mysqli_query($con,$query_update);
            }
            if(!empty($banner_img_name))
            {
            $query_update = "UPDATE image_tb SET banner = '$banner_img_name'";
            $res1 = mysqli_query($con,$query_update);
            }
            if(!empty($contact_img_name))
            {
            $query_update = "UPDATE image_tb SET contact_img = '$contact_img_name'";
            $res1 = mysqli_query($con,$query_update);
            }
        }
        else
        {
            $query_insert = "INSERT INTO image_tb(logo,banner,contact_img) VALUES('$logo_img_name','$banner_img_name','$contact_img_name')";
            $res2 = mysqli_query($con,$query_insert);
        }
        if($res1 or $res2)
        {
            $upload1 = move_uploaded_file($_FILES["logo"]["tmp_name"], $logotarget_file);
            $upload2 = move_uploaded_file($_FILES["banner_img"]["tmp_name"], $bannertarget_file);
            $upload3 = move_uploaded_file($_FILES["contact_img"]["tmp_name"], $contacttarget_file);
            // if ($upload1 and $upload2 and $upload3) {
            //     echo "<script> alert('The images has been updated successfully'); </script>";
                header('Location:manage_feed.php');
            // } else {
            //     echo "There was an error uploading the file.";
            // }
        }
            else
            echo "Error in query for updating images";
    }
}
?>
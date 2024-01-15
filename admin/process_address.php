<?php
include('../connection.php');
if(isset($_POST['submit']))
{
    $office_name = $_POST['office_name'];
    $building_name = $_POST['building_name'];
    $location_name = $_POST['location'];
    $empty_chk  = "SELECT *FROM address_tb";
    $res_empty_chk = mysqli_query($con,$empty_chk);
    if($res_empty_chk)
    {
        if(mysqli_num_rows($res_empty_chk)>0)
        {
            if($office_name!= '')
            {
                $update_qry = "UPDATE address_tb SET office_name = '$office_name'";
                $res1 = mysqli_query($con,$update_qry);
            }
            if($building_name!= '')
            {
                $update_qry = "UPDATE address_tb SET building_name = '$building_name'";
                $res2 = mysqli_query($con,$update_qry);
            }
            if($location_name!= '')
            {
                $update_qry = "UPDATE address_tb SET location = '$location_name'";
                $res3 = mysqli_query($con,$update_qry);
            }
            
        }
        else
        {
            if($office_name == '')
                $office_name = 'Office name';
            if($building_name == '')
                $building_name = 'Building name';
            if($location_name == '')
                $location_name = 'Location';
            $ins_query = "INSERT INTO address_tb(office_name,building_name,location) VALUES('$office_name','$building_name','$location_name')";
            $res_ins = mysqli_query($con,$ins_query);
        }
        if($res_ins or ($res1 and $res2 and $res3))
        {
            echo "<script> alert('Address updated successfully'); </script>";
            header('Location:manage_address.php');
        }
    }

}
<?php
require('connection.php');
$admin_check = "SELECT *FROM login_tb";
$res = mysqli_query($con,$admin_check);
if($res)
{
    if(mysqli_num_rows($res)>0)
    echo "Admin account already created...";
    else
    {
        create_admin();
    }
}
function create_admin()
{
include('connection.php');
$email = mysqli_real_escape_string($con,'admin@gmail.com');
$password = mysqli_real_escape_string($con,md5('admin@123'));
$sql = "INSERT INTO login_tb(email,password) VALUES('$email','$password')";
$res = mysqli_query($con,$sql);
if($res)
echo "Admin account created successfully";
else
print('Failed to create admin account');
}
?>

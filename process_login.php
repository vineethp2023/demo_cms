<?php
session_start();
include('connection.php');
$email = $_POST['email'];
$password = $_POST['password'];
if($email== '' or $password == '')
{
$error = 'Username or password should not be empty';
$_SESSION['error'] = $error;
header('Location:login.php');
}
else
{
$password = md5($_POST['password']);
$query = "SELECT *FROM login_tb WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
    $data = mysqli_fetch_array($result);
    $_SESSION['login_id'] = $data['login_id'];
    $_SESSION['preventBack'] = false;
    header('Location:admin/manage_feed.php');
}
else
{
    $error = 'Account does not exists for the given credentials';
    $_SESSION['error'] = $error;
    header('Location:login.php');
}
}
<?php 
include $_SERVER['APP'];
include WEB_ROOT.'php/model/config.php';
include WEB_ROOT.'php/model/user.php';

$fullname = htmlspecialchars($_POST['fullname']);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$matNo = htmlspecialchars($_POST['matNo']);
$password = htmlspecialchars($_POST['password']);
$cpassword = htmlspecialchars($_POST['cpassword']);

$signup = new User();
$signup->signup($fullname, $email, $matNo, $password, $cpassword);



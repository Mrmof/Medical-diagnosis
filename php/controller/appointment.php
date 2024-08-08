<?php 
include $_SERVER['APP'];
include WEB_ROOT.'php/model/config.php';
include WEB_ROOT.'php/model/appointment.php';

$fullname = htmlspecialchars($_POST['fullname']);
$phone = htmlspecialchars($_POST['phone']);
$appointmentDate = htmlspecialchars($_POST['appointmentDate']);
$time = htmlspecialchars($_POST['time']);
$description = htmlspecialchars($_POST['description']);
$user_id = $_SESSION['userid'];



$appointment = new Appointment();
$appointment->fixappoinment($fullname, $phone, $appointmentDate, $time, $description, $user_id);
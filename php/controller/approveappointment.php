<?php 
include $_SERVER['APP'];
include WEB_ROOT.'php/model/config.php';
include WEB_ROOT.'php/model/appointment.php';


$id = $_GET['id'];

$appointment = new Appointment();
$appointment->approveappoinment($id);
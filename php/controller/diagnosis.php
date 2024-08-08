<?php 
include $_SERVER['APP'];
include WEB_ROOT.'php/model/config.php';
include WEB_ROOT.'php/model/condition.php';

$temperature = htmlspecialchars($_POST['temperature']);
$symptoms = htmlspecialchars($_POST['symptoms']);
$medicalHistory = htmlspecialchars($_POST['medicalHistory']);
$socialHistory = htmlspecialchars($_POST['socialHistory']);


$condition = new Condition();
$condition->diagnosis($temperature, $symptoms, $medicalHistory, $socialHistory);
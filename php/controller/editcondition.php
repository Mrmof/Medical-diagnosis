<?php 
include $_SERVER['APP'];
include WEB_ROOT.'php/model/config.php';
include WEB_ROOT.'php/model/condition.php';

$conditionName = htmlspecialchars($_POST['conditionName']);
$temperature = htmlspecialchars($_POST['temperature']);
$diagnosis = htmlspecialchars($_POST['diagnosis']);
$symptoms = htmlspecialchars($_POST['symptoms']);
$medicalHistory = htmlspecialchars($_POST['medicalHistory']);
$socialHistory = htmlspecialchars($_POST['socialHistory']);
$treatment = htmlspecialchars($_POST['treatment']);
$id = $_GET['id'];
$condition = new Condition();
$condition->editcondition($conditionName, $temperature, $diagnosis, $symptoms, $medicalHistory, $socialHistory, $treatment, $id);
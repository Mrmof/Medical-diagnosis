<?php 
include $_SERVER['APP'];
include WEB_ROOT.'php/model/config.php';
include WEB_ROOT.'php/model/condition.php';

$condition_id = $_GET['id'];

$deletecondition = new Condition();
$deletecondition->deletecondition($condition_id);


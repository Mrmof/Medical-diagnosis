<?php 
session_start();
session_destroy();

header('location: http://localhost/medical diagnosis/signin.php');
<?php
include "common/config.php";
$demo=new config;
if(isset($_GET['id']))
$id=$_GET['id']; 
$demo->deleteServices($id);
header('Location: view-services.php');
?>
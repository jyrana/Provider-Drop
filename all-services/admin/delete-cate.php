<?php
include "common/config.php";
$vasudev=new config;
if(isset($_GET['id']))
$id=$_GET['id']; 
$vasudev->deleteCategories($id);
header('Location: view-services-cate.php');
?>
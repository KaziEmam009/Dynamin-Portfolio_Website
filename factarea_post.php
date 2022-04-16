<?php
session_start();
require_once 'includes/db.php';
   
$factarea_icon = $_POST['factarea_icon'];
$factarea_amount = $_POST['factarea_amount'];
$factarea_title = $_POST['factarea_title'];

$insert_query = "INSERT INTO factarea (factarea_icon,factarea_amount,factarea_title) VALUES ('$factarea_icon', '$factarea_amount', '$factarea_title')";
mysqli_query($db_connect,$insert_query);
$_SESSION['status'] = "fact added successfully";
header("location: factarea.php");

?>
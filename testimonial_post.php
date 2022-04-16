<?php
session_start();
require_once 'includes/db.php';

$testimonial_text = $_POST['testimonial_text'];
$testimonial_name = $_POST['testimonial_name'];
$testimonial_dasignation = $_POST['testimonial_dasignation'];
$testimonial_stars = $_POST['testimonial_stars'];


$insert_query = "INSERT INTO testimonials (testimonial_text, testimonial_name, testimonial_dasignation, testimonial_stars) VALUES ('$testimonial_text', '$testimonial_name', '$testimonial_dasignation', $testimonial_stars)";
mysqli_query($db_connect,$insert_query);
$last_inserted_id = mysqli_insert_id($db_connect);
$_FILES['testimonial_Image'];
 header("location: testimonial.php");

// //image upload start
// $image_new_name = testimonial_Image."-".rand(100,999).".".$extention;
// echo $image_new_name;
//
// $temp_location = $_FILES['testimonial_Image']['tmp_name'];
// $new_location = "img/testimonial_Image/". $image_new_name;
// move_uploaded_file($temp_location, $new_location);
// //image upload end
// $update_query = "UPDATE testimonials SET testimonial_Image = $image_new_name WHERE id = $last_inserted_id";
// mysqli_query($db_connect, $update_query);
// $_SESSION['status'] = "Testimonial image added successfully";
// header('location: testimonial.php');

// $_SESSION['testimonial_insurt_status'] = "Testimonial insurt successfully";
// header("location: testimonial.php");

?>

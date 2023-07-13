<?php
include 'connectr.php';
$del=$_GET['id'];
mysqli_query($con,"DELETE  FROM student_tbl WHERE student_id='$del'");
header("location:view_student_details.php");
?>
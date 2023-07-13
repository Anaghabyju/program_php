<?php
include 'connectr.php';
session_start();
$var= $_SESSION['rol'];


$data=mysqli_query($con,"SELECT * FROM mark_tbl INNER JOIN subject_tbl ON subject_tbl.subject_id=mark_tbl.subject_id INNER JOIN class_tbl ON class_tbl.class_id=mark_tbl.class_id INNER JOIN student_tbl ON student_tbl.student_id=mark_tbl.student_id WHERE student_tbl.student_id='$var'");
$del=mysqli_fetch_assoc($data);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <div class="card" style="width:50%;margin-left:20%; margin-top:5%;">
<div class="card-body">
  <form action="" method="post">
    
  
    
     <h4 style="text-align:center"><?php echo $del['name']?></h4><br>
     <h4  style="text-align:center"> class : <?Php echo $del['class_name']?></h4><br>
     <h4  style="text-align:center">roll no : <?Php echo $del['roll_no']?></h4><br>
     <p> subject: <?php echo $del['subject']?></p><br>
     <p> mark: <?php echo $del['mark']?></p><br>
 
  </tbody>
                </table>
              </div>
                
              </div>
 
 
 
</form>
  </div>
</div>
 
<?php
include 'connectr.php';
$data=mysqli_query($con,"SELECT * FROM class_tbl ");
$ben=mysqli_query($con,"SELECT * FROM student_tbl");
$get=mysqli_query($con,"SELECT * FROM subject_tbl");

if(isset($_POST['submit'])){
  $mark=$_POST['mark'];
  $class=$_POST['class'];
  $student=$_POST['student'];
 $subject=$_POST['subject'];
mysqli_query($con,"INSERT INTO mark_tbl(mark,class_id,student_id,subject_id)VALUES('$mark','$class','$student','$subject')");
}
  
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
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="add_class.php">add class</a>
       </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="add_student.php">add student</a>
       </li>
       <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view_student.php">view_student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="add_subject.php">add subject</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="add_subject.php">add mark</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view_student_details.php">view student detail</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="card" style="width:50%;margin-left:20%; margin-top:5%;">
<div class="card-body">
  <form action="" method="post">
     <h2 style="text-align:center"></h2>
     <div class="row mb-3"style="margin-left:10%;marhin-top:10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">class</label>
    <div class="col-sm-8">
        
  <select class="form-select" aria-label="Default select example" name="class"> 
  <option>class</option>
                          <?php
                          while($var=mysqli_fetch_assoc($data)){?>
                          <option value="<?php echo $var['class_id']?>"><?php echo $var['class_name']?></option>
                         </div>
                      <?php
                        }?> 
                          </select>
    </div>
    </div>
   
    <div class="row mb-3"style="margin-left:10%;marhin-top:10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">student</label>
    <div class="col-sm-8">
        
  <select class="form-select" aria-label="Default select example" name="student"> 
  <option>student</option>
                          <?php
                          while($let=mysqli_fetch_assoc($ben)){?>
                          <option value="<?php echo $let['student_id']?>"><?php echo $let['name']?></option>
                         </div>
                      <?php
                        }?> 
                          </select>
    </div>
    </div>
   
    <div class="row mb-3"style="margin-left:10%;marhin-top:10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">subject</label>
    <div class="col-sm-8">
        
  <select class="form-select" aria-label="Default select example" name="subject"> 
  <option>subject</option>
                          <?php
                          while($net=mysqli_fetch_assoc($get)){?>
                          <option value="<?php echo $net['subject_id']?>"><?php echo $net['subject']?></option>
                         </div>
                      <?php
                        }?> 
                          </select>
    </div>
    </div>
   
   
  <div class="row mb-2" style="margin-top: 5%;margin-left: 10%;">
    <label for="inputText3" class="col-sm-2 col-form-label">mark</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputText3" name="mark">
    </div>
  </div>

 
  <button type="submit" class="btn btn-primary" style="margin-left: 40%;" name="submit">submit</button>
</form>
  </div>
</div>
  </body>
</html>
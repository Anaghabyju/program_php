<?php
include 'connectr.php';
session_start();
if(isset($_POST['submit'])){
    $rollno=$_POST['roll_no'];
    
    $data=mysqli_query($con,"SELECT * FROM student_tbl WHERE roll_no='$rollno'");
    if(mysqli_num_rows($data)>0){
        $row=mysqli_fetch_assoc($data);
        header("location:student_dashboard.php");
        $_SESSION['rol']=$row['student_id'];
    }
    else {
        echo "<script>alert('invalid roll number')</script>";
     }
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
          <a class="nav-link active" aria-current="page" href="login.php">login</a>
        </li>
       
      
      </ul>
    </div>
  </div>
</nav>
  <div class="card" style="width:50%;margin-left:20%; margin-top:5%;">
  <div class="card-body">
  <form action="" method="post">
     <h2 style="text-align:center">LOGIN</h2>
  <div class="row mb-3" style="margin-top: 5%;margin-left: 10%;">
    <label for="inputText3" class="col-sm-2 col-form-label">roll no</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputText3" name="roll_no">
    </div>
  </div>
 
 
  <button type="submit" class="btn btn-primary" style="margin-left: 40%;" name="submit">submit</button>
</form>
  </div>
</div>
 
  </body>
</html>

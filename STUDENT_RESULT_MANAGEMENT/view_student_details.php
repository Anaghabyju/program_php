<?php
include 'connectr.php';
$data=mysqli_query($con,"SELECT * FROM mark_tbl INNER JOIN subject_tbl ON subject_tbl.subject_id=mark_tbl.subject_id INNER JOIN class_tbl ON class_tbl.class_id=mark_tbl.class_id INNER JOIN student_tbl ON student_tbl.student_id=mark_tbl.student_id");
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
          <a class="nav-link active" aria-current="page" href="add_subject.php">add subject</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="add_mark.php">add mark</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view_student_details.php">view student detail</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="content">
      <div class="container-fluid">
        <div class="row" style="margin-top: 5%;margin-left: 5%;">
          <div class="col-md-6">
           <table class="table table-bordered" >
                  <thead>
                    <tr>
            <th>class_name</th>
            <th>roll no</th>
            <th>student name</th>
            <th>details</th>
            <th colspan="2">action</th>
        </tr>
        </thead>
                  <tbody>
        <?php
        while($var=mysqli_fetch_assoc($data)){?>
        <tr>
            <td><?php echo $var['class_name']?></td>
            <td><?php echo $var['roll_no']?></td>
        <td><?php echo $var['name']?></td>
       <td><a href="view_mark.php?id=<?php echo $var['student_id']?>">view</a></td>
       <td><a href="delete.php.?id=<?php echo $var['student_id']?>" class="btn btn-block btn-danger" name="b1">delete</button></a></td>
       <td><a href="edit.php?id=<?php echo $var['student_id']?>" class="btn btn-block btn-success" name="b1">edit</button></a></td>
    </tr>
    <?php
}
?>
  </tbody>
                </table>
              </div>
                
              </div>
              
  </body>
</html>

<?php
include 'connectr.php';
$data=mysqli_query($con,"SELECT * FROM student_tbl INNER JOIN class_tbl ON class_tbl.class_id=student_tbl.class_id");
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
            <th>name</th>
            <th>roll no</th>
            
        </tr>
        </thead>
                  <tbody>
        <?php
        while($var=mysqli_fetch_assoc($data)){?>
        <tr>
            <td><?php echo $var['class_name']?></td>
        <td><?php echo $var['name']?></td>
        <td><?php echo $var['roll_no']?></td>
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

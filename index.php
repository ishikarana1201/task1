<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>View Student Details</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Student Details</h1>
            </div>
            
            <div class="col">
                <a href="form.php" class="btn btn-primary" >Add Student</a>
            </div>
        </div>
      
        <hr>
        <table class="table table-bordered">
  <thead class="bg-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Hobby</th>
      <th scope="col">Gender</th>
      <th scope="col">Profile Pic</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
 
      <?php

      include "connection.php";
      $start = 0;
      $per_page = 3;
      $current_page = 1;
      if(isset($_GET['start'])){
        $start=$_GET['start'];
        if($start<=0){
          $start=0;
      $current_page = 1;

        }else{
      $current_page = $start;
        $start--;
        $start = $start*$per_page;
      }
    }
      $record = mysqli_num_rows(mysqli_query($con,"SELECT *FROM students"));
      $pagi = ceil($record/$per_page);
    
    $query = "SELECT *FROM students limit $start,$per_page";
    $sql = mysqli_query($con,$query);
    if(mysqli_num_rows($sql)>0){
    while($row = mysqli_fetch_array($sql)){
      
        ?>
     <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['number']?></td>
      <td><?php echo $row['hobby']?></td>
      <td><?php echo $row['gender']?></td>
      <td>
          <img src="<?php echo $row['profile']; ?>" width="100px" height="100px" alt="Image">
      </td>
      <td><div class="btn btn-group">
          <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
          <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
      </div></td>
      </tr>
   <?php } }else{?>
No Records
<?php } ?>
  </tbody>
</table>
<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <?php
    if($current_page> 1)
    { ?>
    <li class="page-item">
      <a class="page-link" href="?start=<?php echo ($current_page-1) ?>" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <?php } ?>

    <?php 
    
    for($i=1;$i<=$pagi;$i++){
      $class='';
      if($current_page==$i){
        $class='active';
      } ?>
    <li class="page-item <?php echo $class?>"><a class="page-link" href="?start=<?php echo $i ?>"><?php echo $i?></a></li>
      <?php } ?>
      <?php
    if($i>$current_page)
    { ?>
    <li class="page-item">
      <a class="page-link" href="?start=<?php echo ($current_page+1) ?>">Next</a>
    </li>
    <?php } ?>
  </ul>
</nav>  
    </div>
<script src="js/bootstrap.js"></script>
  
</body>
</html>
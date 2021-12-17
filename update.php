<?php

include "connection.php";
$id = $_GET['id'];
$edit = "SELECT *FROM students WHERE id = '$id'";
$edit1 = mysqli_query($con,$edit);
$row= mysqli_fetch_array($edit1);
$check = $row['hobby'];
$chk = explode(",",$check);
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $hobby = $_POST['hobby'];
    $hobbychk = implode(",", $hobby);

    
    if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name']!=="")){
       
        $size = $_FILES['photo']['size'];
        $temp = $_FILES['photo']['tmp_name'];
        $type = $_FILES['photo']['type'];
        $profile_name = $_FILES['photo']['name'];
        
        unlink("$old_image");
        move_uploaded_file($temp,"upload/.$profile_name");

    }else{
        $profile_name=$old_image;
    }
    $update = "UPDATE students SET name='$name',email='$email',number='$number',profile='$profile_name',gender='$gender',hobby='$hobbychk' WHERE id = '$id'";
    $u1 = mysqli_query($con,$update);
    if($u1){
        echo "Data Updated";
        header("Location:index.php");
    }else{
        echo "Some Error";
        header("Location:index.php");
    }
}

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Update Data</title>
</head>

<body>
<div class="container">
    <h1 class="text-center">Update Form</h1>
<div class="card">
  <div class="card-body">
    
  
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" placeholder="Enter Your Name*" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <input type="text" class="form-control" name="number" value="<?php echo $row['number'];?>"  placeholder="Enter Mobile Number*" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>"  placeholder="Enter Email*" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Create Your Password*" value="<?php echo $row['password'];?>" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="profile">Profile Picture</label>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                <img src="<?php echo $row['profile']; ?>" width="100px" height="100px" alt="Image">
                <input type="file" class="form-control" name="photo">
                <input type="hidden" class="form-control" name="photo" value="<?php echo $row['profile']; ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="hobby">Select Gender</label>
                </div>
            </div>
            <div class="col">
                <div class="form-group">

                    <input type="radio" id="male" name="gender" value="male"
                    <?php
                    if($row["gender"]=='male'){
                        echo "checked";
                    }
                    ?>>
                    <label for="male">Male</label>
                    
                    <input type="radio" id="female" name="gender" value="female" 
                    <?php 
                    if($row["gender"]=='female'){
                        echo "checked";
                    }
                    ?> >
                    <label for="female">Female</label>
                     
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="hobby">Select Your Hobby</label>
                </div>
            </div>
            <div class="col">
                <div class="form-group">

                    <input type="checkbox" id="hobby" name="hobby[]" value="Singing"
                    <?php if(in_array("Singing",$chk))
                    {
                        echo "checked";
                    } ?>>
                    <label for="Singing"> Singing</label>
                    <input type="checkbox" id="hobby" name="hobby[]" value="dancing"
                    <?php if(in_array("dancing",$chk))
                    {
                        echo "checked";
                    } ?>>
                    <label for="dancing"> dancing</label>
                    <input type="checkbox" id="hobby" name="hobby[]" value="drawing"
                    <?php if(in_array("drawing",$chk))
                    {
                        echo "checked";
                    } ?>>
                    <label for="drawing"> drawing</label>
                </div>
            </div>
        </div>

      
        
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <input type="submit" class="btn btn-primary" name="update" value="Save Data"> 

    </div>
    <div class="col">   
    </div>
  </div>

    </form>
    </div>
</div>
    </div>


    <script src="js/bootstrap.js"></script>
</body>
</html>
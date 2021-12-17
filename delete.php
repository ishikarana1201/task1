<?php

include "connection.php";

$id = $_GET['id'];

$delete = "DELETE FROM students WHERE id = '$id'";
$del = mysqli_query($con,$delete);
if($del){
    echo "<script>
    alert('Record Deleted Successfully');
    </script>;
    header('Location:index.php')";
}else{
    echo "<script>
    alert('Some Error');
    </script>";
    header('Location:index.php');
}
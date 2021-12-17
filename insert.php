<?php

include "connection.php";

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $number =  mysqli_real_escape_string($con, $_POST['number']);
    $email =  mysqli_real_escape_string($con, $_POST['email']);
    $password =  mysqli_real_escape_string($con, $_POST['password']);
    $hobby = $_POST['hobby'];
    $hobbychk = implode(",", $hobby);

    $gender = $_POST['gender'];

    $file = $_FILES['photo'];

    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];
    $file_ext = explode('.', $filename);

    $file_ext_check = strtolower(end($file_ext));
    $valid_file_ext = array('png', 'jpg', 'jpeg');




    //Password Hasing
    $pass = password_hash($password, PASSWORD_BCRYPT);
    $emailquery = "SELECT *FROM students WHERE email = '$email'";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);


    if ($emailcount > 0) {
        echo "Email Already Exist";
    } else if ($fileerror == 0) {
        if (in_array($file_ext_check, $valid_file_ext)) {

            $destfile = 'upload/' . $filename;
            move_uploaded_file($filepath, $destfile);



            $insert = "INSERT INTO students (name,email,number,password,profile,hobby,gender)
        VALUES ('$name','$email','$number','$pass','$destfile','$hobbychk','$gender')";

            $iquery = mysqli_query($con, $insert);

            if ($insert) { ?>
                <script type="text/javascript">
                    alert("Data Inserted Successfully");
                    window.loaction = "form.php";
                </script>
            <?php
            } else { ?>
                <script>
                    alert("Somehing is wrong");
                    window.loaction = "form.php";
                </script>
<?php
            }
        }
    }
}
?>
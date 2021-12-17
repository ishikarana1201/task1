<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Form Validation</title>
</head>

<body>
<div class="container">
    <h1 class="text-center">Form Validation</h1>
<div class="card">
  <div class="card-body">
    
  
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name*" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <input type="text" class="form-control" name="number" placeholder="Enter Your Mobile number*" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email*" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Create Your Password*" required>
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
                    <input type="file" class="form-control" name="photo">
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

                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
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

                    <input type="checkbox" id="hobby" name="hobby[]" value="Singing">
                    <label for="Singing"> Singing</label>
                    <input type="checkbox" id="hobby" name="hobby[]" value="dancing">
                    <label for="dancing"> dancing</label>
                    <input type="checkbox" id="hobby" name="hobby[]" value="drawing">
                    <label for="drawing"> drawing</label>
                </div>,
            </div>
        </div>

      
        
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <input type="submit" class="btn btn-primary" name="submit" value="Save Data"> 

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
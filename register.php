<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <title>Registration Form</title>
</head>
<body>
    <div class="registration-form">
        <form method="POST" enctype="multipart/form-data" action="upload-handler.php">
            <h1><b>Registration Form</b></h1>
            <div class="form-group">
                Complete Name:<input type="text" class="form-control" name="compname" placeholder="Please Enter Your Complete Name" required="required">
            </div>
            <div class="form-group">
                Email Address:<input type="email" class="form-control" name="email" placeholder="Please Enter Your Email Address" required="required">
            </div>
            <div class="form-group">
                Password:<input type="password" class="form-control" name="password" placeholder="Please Enter Your Password" onkeyup='check_pass();' onkeyup='check()' required="required">
            </div>
            <div class="form-group">
                Confirm Password:<input type="password" class="form-control" name="confirm_password" placeholder="Please Enter Your Password Again" onkeyup='check_pass();' onkeyup='check()' required="required">
            </div> 
            <div class="form-group">
                <label for="fileSelect">Picture</label>
                <input type="file" name="fileSelect" id="fileSelect" class="form-control form-control-lg" required >
            </div>
            <div class ="text-center">
            <br><button type="submit" class="btn btn-primary btn-lg">Submit Registration</button>
        </div>
        </div>
    </div>
</form>
</div>
</body>
</html>
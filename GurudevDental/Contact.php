<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">

    <!-- link to index.css -->
    <link rel="stylesheet" href="css/index.css">

    <style type="text/css">
        .jumbotron {
            margin-top: 10px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('image/back.jpg');
            background-size: 100%, 100%;
            background-size: cover;
            /* background-repeat: no-repeat; */
            padding-top: 220px;
            ;
            padding-bottom: 350px;
            ;

        }
    </style>








    <title>GURUDEV DENTAL</title>
</head>
<!-- max-width: 1423px; -->

<body>
    <div class="container-fluid ">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="image/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            GURUDEV DENTAL
        </a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Service.php">Services</a>
                </li>
                <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
                <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
            </ul>

            <form class="form-inline my-2 my-lg-0">

<a href="Contact.php" class="btn btn-success btn-lg text-light" role="button">Contact Us</a>
</form>
        </div>
    </nav>
    </div>


<section class="my-5">
        <div class="text-center">
            <h2>Contact Us</h2>

        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group row">
                    <label for="inputUserName3" class="col-sm-2 col-form-label">User Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUserName3" placeholder="UserName" name="User_Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="Email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="Password" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputMobile_No3" class="col-sm-2 col-form-label">Mobile No:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputMobile_No3" placeholder="Mobile_No" name="Mobile_No" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </section>


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
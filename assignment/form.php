<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
       body
    {background-image:url("com.png");
    position: relative;
	min-height: 100vh;
	background-size: cover;
	background-position: right;
	/* display: flex;
	justify-content: space-between;
	align-items: center; */
    }
             .hero::after { background-color:#17202A  ;
  content: ""; 
             
             display: block; position: absolute;background-size: cover; top: 0px; left: 0px; width: 100%; height: 100%; z-index: -1; opacity: 0.75; }
             .dfg{
    
     background: rgba(255, 255, 255, 0.05);
     box-shadow: 0 15px 35px rgba(0,0,0,0.2);
     border-radius: 15px;
     backdrop-filter: blur(10px);
                 color: white;
                 width: 40%;
             }
             .form-control {
    border: none;
    background: transparent;
    border-bottom: 1px solid white;
    color: white;
             }
             .form-control:focus{
    border: none;
    background: transparent;
    color: white;
             }
             ::placeholder{
               color: rgb(255, 255, 255);
             }
  </style>
</head>

<body>
<div class="hero"> <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-primary " href="index.php">Laiba Akram</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list.php">List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="form.php">Sign up</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    </div>      
    <!-- Navigation -->

    
    <div class="container dfg ">
  

    <!-- Form -->
    
        <form action="backend.php" method="post" name="studentForm" class="p-5" id="studentForm">
            <h1 class="text-center mb-3">Sign Up</h1>
            <div class="form-group">
                <label for="" class="form-label" id="label_name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                <div id="show_error"></div>
            </div>
            <div class="form-group">
                <label for="" class="form-label mt-2" id="label_email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                <div id="show_error_email"></div>
            </div>
            <div class="form-group mt-3">
                <button class="btn btn-primary" type="submit" id="btn">Submit</button>
            </div>
        </form>
    </div>
            </div>


    <!-- Footer  -->
    <div>
        <hr class="text-white">
        <footer class="container-fluid text-white">
            <div class="text-center">
                <p class="mb-0">&#169; All Rights Reserved by Laiba Akram<?php echo date('Y'); ?></p>
                <p>Project Of TheCITTeam Design by Laiba Akram </p>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- jQuery Validation -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            //Validation in jQuery
            $('form').submit(function() {

                var isName = false;
                var isEmail = false;

                //Name Validation

                var name = $('#name').val();
                if ((name.length <= 2) || (name.length >= 21)) {
                    $('#show_error').html('Username must be between 3 to 20 characters');
                    $('#show_error').css({
                        "color": "red"
                    });
                    $("#name").css({
                        "border": "2px solid red"
                    });
                    

                } else {
                    $('#show_error').html('Valid data.');
                    $('#show_error').css({
                        'color': 'green'
                    });
                    $('#name').css({
                        'border': '2px solid green'

                    });
                    
                    isName = true;

                }
                // End of name validation


                // Email Validation

                var Email = $('#email').val();
                if (Email == "") {
                    $('#show_error_email').html('Please enter your email.');
                    $('#show_error_email').css({
                        'color': 'red'
                    });
                    $('#email').css({
                        'border': '2px solid red',
                    });
                    
                } else {
                    $('#show_error_email').html('Valid data.');
                    $('#show_error_email').css({
                        "color": "green",
                    });
                    $('#email').css(
                        'border', '2px solid green'

                    );
                   
                    isEmail = true;
                }
                //End of email validation

                //Control Error
                if (isName == true && isEmail == true) {

                } else {

                    return false;
                }

            });
            //End of submit form 

            function addAlert(message) {
                $('#alerts').append(
                    '<div class="alert alert-success alert-dismissible fade show">' + '<div><strong >Success!</strong> Form submitted successfully.</div>' +
                    '<button type="button" class="btn-close" data-bs-dismiss="alert">' +
                    '</button>' + message + '</div>');
            }
            
        });
    </script>
</body>

</html>
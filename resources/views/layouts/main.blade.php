<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <style>
        .navbar .navbar-collapse  .navbar-brand  {
            width: 100%;
            text-align: center;
        }

        .footer {
            margin-bottom: 0;
            padding-bottom: 0;
            border-radius: 0;
        }

        .jumbotron {
            border-radius: 0;
        }
    </style>
    <title>Net Age</title>
  </head>
  <body>
    <nav class="navbar sticky-top navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">Net Age</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="/">
                <img src="https://www.netage.co.za/wp-content/uploads/2016/05/logo-new.png" class="img-fluid d-inline-block align-top" align="middle" alt="Net Age">
            </a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/about">ABOUT US</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="/contact">CONTACT US</a>
                </li>
            </ul>
        </div>
    </nav>
    
    @yield('content')

    <div class="jumbotron footer">
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4">
                    <h4>Additional Info</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Corporate Social Responsibility</a></li>
                        <li><a href="#">News & Articles</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4">
                    <h4>Consumer Rights</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Working With Third Parties</a></li>
                        <li><a href="#">PAIA Manual</a></li>
                        <li><a href="#">Consumer Protection Act</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4">
                    <h4>Legal</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Disclaimer</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>        

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
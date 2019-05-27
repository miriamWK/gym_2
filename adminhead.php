
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="theme.css">
    <link href="css/caro.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Archivo:500" rel="stylesheet">
<body>

<!-- Navigation -->
<div class="navy">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php" style="max-width: 4%;">
                <img src="img/logo.png" class="img-fluid">
             </a>


          <!-- links toggle -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#links" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


           <div class="collapse navbar-collapse" id="links">
            <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="">EDIT HOMEPAGE</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="class_edit.php">EDIT CLASSES</a>
              </li>



              <li class="nav-item active">
                <a class="nav-link" href="">ADD</a>
              </li>



            </ul>
            </div>

            <p style="color:white;"> WELCOME ADMIN<br><?php echo $_SESSION ['user_email'] ?> </p>
            <div class="collapse navbar-collapse" id="account">
            <ul class="navbar-nav ml-auto">
               <br>
               <div class ="float-right">
              <li class="nav-item active"><a class="nav-link"  href="logout.php">LOG OUT</a></li>
            </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>



       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

      </body>
</html>

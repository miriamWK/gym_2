<?php
require "header.php";
include "loginScript.php";
 ?>



 <body>
 <main>
   <div class="jumbotron jumbotron-fluid" style="background-image: url(img/gym-banner.jpg); background-size: cover; color: white;">
    <div class="container">
      <h2>“I like to meditade. But I get rid of my stress at the gym.”</h2>
    </div>
  </div>
  <body >
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Log In</h2> Please log in using the form below. </p>

          <form role="form" method="post" value ="login">
                    <div class="form-group">
                        <label for="user_email"> Email:</label>
                        <input type="user_email" class="form-control" id="user_email" name="user_email" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="password"> Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required maxlength="50">
                    </div>
                    <button type="submit" name = "login" class="btn btn-dark">Log in</button>
                </form>
                <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Logged in successfully!</h3> </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Try again!</div>
            </div>
            <div class="col-md-6 col-md-offset-3">
              <div class="container">
                <img class="img-fluid img-thumbnail" src="img/gallery_6.jpg">
              </div>
        </div>
        </div>
    </div>
</body>

  <?php
 require "footer.php";
   ?>

<?php
include "headermem.php";
?>


<div class="jumbotron jumbotron-fluid" style="background-image: url(img/gym-banner.jpg); background-size: cover; color: white;">
    <div class="container">
      <h2>“Sweat is your fat crying.”</h2>
    </div>
  </div>

 <main role="main">

<div class="container">
  <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Oscar Hunt (Silver Member):<span class="text-muted">"It’ll blow your mind.""</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <div class="col-sm-4 center"<img class="img-fluid img-thumbnail" src="img/yoga1.jpeg"></div>
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img src="img/man1.jpg" class="rounded float-left" alt="...">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"> Robert Reid (Gold Member): <span class="text-muted">"Oh yeah, it’s that good. See for yourself.""</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img src="img/man2.jpg" class="rounded float-right" alt="...">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Skylar Bird (First time visiting): <span class="text-muted">" The membership fees are very reasonable."</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img src="img/man3.jpg" class="rounded float-left" alt="...">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-3">
              <h4>Share a testimonial with the others.</h4>
              <h6> Spread the love! </h6>
                <form role="form" method="post" id="contact_form" >
                    <div class="form-group">
                        <label for="class"> Class:</label>
                        <input type="text" class="form-control" id="class" name="class" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="test_body"> Comment:</label>
                        <textarea class="form-control" type="textarea" name="test_body" id="test_body" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-success pull-right" id="btnContactUs"a href="#" style="background-color:grey">Send</button>
                </form>
                <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
            </div>


              </div>
        </div>
        </div>


    <script>
  $( window ).on( "load", function() {
      mainNav();
      $(window).scroll(function() {
         mainNav();
      });
      function mainNav() {
          var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
         if (top >1) $('.navy').stop().animate({
            "opacity": '0',
              "top": '0'
           });
         else $('.navy').stop().animate({
              "top": '1',
             "opacity": '1'
         });

       }
       });
  </script>
  </div><!-- /.container -->
</main>

<?php
if(isset($_POST) & !empty($_POST)){

  $class = $_POST['class'];
  $message = $_POST['test_body'];
  $current_user_name = $_SESSION['user_email'];
  $timestamp = '';

  if(!isset($class) || empty($class)){
    $error[] = "Class is required";
  }

  if(!isset($message) || empty($message)){
    $error[] = "Message is required";
  }

  // if(!isset($error) || empty($error)){
  //   $to = "owenlynch1310@gmail.com";
  //   $headers = "From : " . $email;

    if (empty($errors)) { // if no errors process input
      require('connect.php');


    $sql = "INSERT INTO testimonial ('user_email', 'created_at', 'test_body','class')
    VALUES ('$current_user_name', '$timestamp', '$message', '$class')";
      if(mysqli_query($db_connection, $sql)){
          echo 'Testimonial has been sent, we will upload it soon';
      }
    }

  }

?>
 <?php
require "footer.php"
  ?>

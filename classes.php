<?php
include "header.php";
include('server_class.php');

if(isset($_GET['edit'])){
  $id = $_GET['edit'];
  $edit_state = true;
  $rec =mysqli_query($db_connection, "SELECT * FROM class_features WHERE id=$id ");
  $record = mysqli_fetch_array($rec);
  $title = $record['title'];
  $content = $record['content'];
  $id = $record['id'];
}?>

<body>
 <div class="jumbotron jumbotron-fluid" style="background-image: url(img/gym-banner.jpg); background-size: cover; color: white;">

    <div class="container">
      <h2>“A champion is someone who gets up when they can’t.”</h2>
      </div>
    </div>
  </div>
<div class="container">
  <h3>Want to get fitter, leaner and stronger? <br> These gym classes will kick you into shape in no time.</h3>
</div>

    <div class="container">
    <div class="row">

        <div class="col-md-6">
            <div class="media">
              <div class="media-left">
                <a href="login.php">
                  <?php while ($row = mysqli_fetch_array($results)){ ?>
                  <img class="mr-3" src="img/yoga_mini.jpg" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><?php echo $row['title']; ?></h4>
                <?php echo $row['content']; ?>
              </div>
            </div>
        </div><?php } ?>
        <div class="col-md-6">
            <div class="media">
              <div class="media-left">
                <a href="login.php">
                  <img class="mr-3" src="img/yoga_m2.png" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Boxercise</h4>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio
              </div>
            </div>
        </div>
      </div>
        <div class="row">
        <div class="col-md-6">
            <div class="media">
              <div class="media-left">
                <a href="login.php">
                  <img class="mr-3" src="img/kettlebell_mini.png" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Kettlebell</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media">
              <div class="media-left">
                <a href="login.php">
                  <img class="mr-3" src="img/spin_mini.png" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Spin Classes</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
              </div>
            </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-6">
            <div class="media">
              <div class="media-left">
                <a href="login.php">
                  <img class="mr-3" src="img/weight_mini.png" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Weight training</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media">
              <div class="media-left">
                <a href="login.php">
                  <img class="mr-3" src="img/pilates_mini.png" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Pilates</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
              </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
            <div class="media">
              <div class="media-left">
                <a href="login.php">
                  <img class="mr-3" src="img/box.png" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Boxing</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media">
              <div class="media-left">
                <a href="login.php">
                  <img class="mr-3" src="img/instr_mini.png" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Private Sessions</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
              </div>
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

</body>
 <?php
require "footer.php";
  ?>

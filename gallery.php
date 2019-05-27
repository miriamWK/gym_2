<?php
require "header.php";
 ?>
 <body>
 <main>
   <div class="jumbotron jumbotron-fluid" style="background-image: url(img/gym-banner.jpg); background-size: cover; color: white;">
    <div class="container">
      <h2>“My protein shake brings the boys to the yard. And they’re like:
        your muscles are hard. Damn right, my muscles are hard. I could train ya, but I’d have to charge.”</h2>
    </div>
  </div>
  <div class="us"style="color:black;padding:7%;letter-spacing.7em;font-size:120%;">
            <div class="container">
          <h3> Fancy some nice pictures? <br> Go on, scroll down... </h3>
        </div>
    		<div class="row pd-t pd-t--md">
  <div class="gallery" id="gallery">
    <div class="container">
      <h3>Yoga / Boxingyoga</h3>
    </div>

  <div class="row">

    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/yoga1.jpeg"></div>
    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/yoga2.jpg"></div>
    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/yoga3.jpg"></div>
  </div>
  <div class="container">
  <h3><br>Kettlebell</h3>
  </div>
  <div class="row">

    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/kettlebell1.jpg"></div>
    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/kettlebell2.jpg"></div>
    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/kettlebell3.jpg"></div>
  </div>
  <div class="container">
  <h3><br>Spin Classes</h3>
  </div>
  <div class="row">

    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/girl_bike.jpg"></div>
    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/riding2.jpg"></div>
    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/riding3.jpg"></div>
  </div>
  <div class="container">
  <h3><br>Weight training</h3>
  </div>
  <div class="row">

    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/weight1.jpg"></div>
    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/girl_back3.png"></div>
    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/weight3.jpg"></div>
  </div>
  <div class="container">
  <h3><br>Pilates</h3>
  </div>
  <div class="row">
    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/pilates1.jpg"></div>
    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/pilates2.jpg"></div>
    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/pilates3.jpg"></div>
  </div>
  <div class="container">
  <h3><br>Boxing</h3>
  </div>
  <div class="row">
    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/boxing1.jpg"></div>
    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/boxing2.jpg"></div>
    <div class="col-sm-4 center"><img class="img-fluid img-thumbnail" src="img/boxing3.jpg"></div>
  </div>
</div>
  </div>
</div>
 </main>
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

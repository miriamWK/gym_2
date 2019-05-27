<?php
include "header.php";
include('server_mem.php');

if(isset($_GET['edit'])){
  $id = $_GET['edit'];
  $edit_state = true;
  $rec =mysqli_query($db_connection, "SELECT * FROM fee_edit WHERE id=$id ");
  $record = mysqli_fetch_array($rec);
  $type = $record['type'];
  $fee = $record['fee'];
  $line1 = $record['line1'];
  $line2 = $record['line2'];
  $line3 = $record['line3'];
  $line4 = $record['line4'];
  $id = $record['id'];
}?>

<body>
<main>
  <div class="jumbotron jumbotron-fluid" style="background-image: url(img/gym-banner.jpg); background-size: cover; color: white;">
   <div class="container">
     <h2>“Those who think they have not time for bodily exercise will sooner or later have to find time for illness.”</h2>
   </div>
 </div>
<div class="us"style="color:black;">
    <div class="container">
      <h3>Membership Levels<br> Join the Sweat Box Club by choose from one of our three membership levels: </h3>
    </div>
		<div class="row pd-t pd-t--md">


<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="btnstyl">
        <?php while ($row = mysqli_fetch_array($results)){ ?>
        <h4 class="my-0 font-weight-normal"><?php echo $row['type']; ?></h4>
      </div>
      <div class="card-body">

        <h1 class="card-title pricing-card-title">€ <?php echo $row['fee']; ?> <small class="text-muted"> /mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li><?php echo $row['line1']; ?></li>
          <li><?php echo $row['line2']; ?></li>
          <li><?php echo $row['line3']; ?></li>
          <li><?php echo $row['line4']; ?></li>
        </ul><?php } ?>
        <a href="signup.php"  class="btn btn-lg btn-block btn-dark">Sign up for Gold</a>
      </div>
    </div>

    <div class="card mb-4 shadow-sm">
    <div class="btnstyl2">
      <h4 class="my-0 font-weight-normal">Silver</h4>
    </div>
    <div class="card-body">
      <h1 class="card-title pricing-card-title">€ 35 <small class="text-muted">/ mo</small></h1>
      <ul class="list-unstyled mt-3 mb-4">
        <li>Anytime access</li>
        <li>Private Showers and Locker room</li>
        <li>Choose 3 classes</li>
        <li>Free Personal Trainer once per month</li>
      </ul>
      <a href="signup.php"  class="btn btn-lg btn-block btn-dark">Sign up for Silver</a>
    </div>
  </div>
  <div class="card mb-4 shadow-sm">
    <div class="btnstyl3">
      <h4 class="my-0 font-weight-normal">Bronze</h4>
    </div>
    <div class="card-body">
      <h1 class="card-title pricing-card-title">€ 20 <small class="text-muted">/ mo</small></h1>
      <ul class="list-unstyled mt-3 mb-4">
        <li>Limited access</li>
        <li>Private Showers and Locker room</li>
        <li>Choose 2 classes</li>
        <li>Stay Healthy</li>
      </ul>
      <a href="signup.php"  class="btn btn-lg btn-block btn-dark btn-mem">Sign up for Bronze</a>
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
         if (top > 600) $('.navy').stop().animate({
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
</main>
</body>
</html>

<?php
include "footer.php";
?>

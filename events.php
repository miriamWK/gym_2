<?php
include "header.php";
?>
<html>
<body>
  <div class="jumbotron jumbotron-fluid" style="background-image: url(img/gym-banner.jpg); background-size: cover; color: white;">
   <div class="container">
     <h2>“Courage doesn’t always roar. Sometimes courage is the quiet voice at the end of the day saying, 'I will try again tomorrow.'”</h2>
   </div>
 </div>
 <div class="us"style="color:black;">
     <div class="container">
       <h3>Bored? <br> Check out our Events! </h3>
     </div>
    <h1 class="display-6"style="text-align:center;font-family: 'Roboto', sans-serif,!important;color:black"></h1>
    <br>


<br>
<br>
<br>
    <div id="backgroundimage1"></div>
    <section>
    <div class="container ">
    <div class="row">
    	<div class="card border-0 col-md-12 p-3 ">
    		<div class="row ">
    			<div class="col-md-4">
    				<img class="w-100" src="img/focus.jpg" style ="width:500px;height:250px;margin:5%;">
    			</div>
    			<div class="col-md-8">
    				<div class="card-body">
    					<h6 class="card-title text-center border-0"style="text-align:center;font-family: 'Roboto', sans-serif,!important;color:grey">WEEKLY EVENTS</h6>
              <div id="text">
    					<p class="card-text"style="text-align:center;font-family: 'Roboto', sans-serif,!important;color:grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <div class="text-center">
              <a href="https://www.google.com" class="btn"style="text-align:center;font-family: 'Roboto', sans-serif,!important;color:white;background-color:grey;display:in-line;">More</a>
</div>
            </div>
             </div>
    			</div>

    		</div>
        </div>
        <div class="card border-0">
    	<div class="card border-0 col-md-12 p-3">

    		<div class="row ">
            <div class="col-md-4">
    				<img class="w-100" src="img/adult.jpg"style ="width:500px;height:250px;margin:5%;">
    			</div>
    			<div class="col-md-8">
    				<div class="card-body">
    					<h6 class="card-title text-center"style="text-align:center;font-family: 'Roboto', sans-serif,!important;color:grey">MONTHLY EVENTS</h6>
              <div id ="text">
    					<p class="card-text"style="text-align:center;font-family: 'Roboto', sans-serif,!important;color:grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <div class="text-center">
              <a href="#" class="btn " style="text-align:center;font-family: 'Roboto', sans-serif,!important;color:white;background-color:grey">More</a>
</div>
            </div>
    				</div>
    			</div>
</div>
</div>
</div>
</div>
</div>
<section>
</section>
<script>

$( window ).on( "load", function() {
    mainNav();
    $(window).scroll(function() {
       mainNav();
    });
    function mainNav() {
        var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
       if (top > 1) $('.navy').stop().animate({
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
</html>
<?php
include "footer.php";
?>

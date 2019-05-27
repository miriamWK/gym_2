
<?php
include "header.php";
?>
<main>
  <div class="jumbotron jumbotron-fluid" style="background-image: url(img/gym-banner.jpg); background-size: cover; color: white;">
  <div class="container">
    <h2>“One life. One body. One chance.”</h2>
  </div>
</div>

<?php

function test_input($data) {
  // $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  if ($_SERVER['REQUEST_METHOD']=="POST"){
  $errors = array();

    if(empty($_POST['user_name'])){
      $errors[]= "Name is required.";
      } else {
      $name =trim($_POST['user_name']);
      // $name =stripslashes($_POST['user_name']);
      // $name =htmlspecialchars($_POST['user_name']);
      if (!preg_match("/^[a-zA-Z ]*$/",$name)){
          $errors[] = "invalid name!";

      }
    }
      if (empty($_POST['user_email'])){
          $errors[]='Email is required.';
          }
          else {
          $email =trim($_POST['user_email']);
          // $email =stripslashes($_POST['user_email']);
          // $email =htmlspecialchars($_POST['user_email']);
          if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
          $errors[] = "invalid email address.";
          }
       }

       if(empty($_POST['mobile'])){
          $errors[]= 'Mobile  is required.';
          }else {
          $mobile =trim($_POST['mobile']);
          // $mobile =stripslashes($_POST['mobile']);
          // $mobile =htmlspecialchars($_POST['mobile']);
          if (!preg_match("/[0-9]/",$mobile)){
              $errors[] = "invalid Mobile number !";
          }
       }


    if(empty($_POST["address"])) {
      $errors[] = 'Address is required.';
      }else {
        $address = trim($_POST["address"]);
        // $address =stripslashes($_POST['address']);
        // $address =htmlspecialchars($_POST['address']);
          if(!preg_match("/\d+ [0-9a-zA-Z ]+/", $address)){
          $errors[] = "Invalid Address!";
        }
      }

       if(empty($_POST['membership'])){
        $errors[]= 'Please select membership.';
      }else {
        $membership = test_input($_POST['membership']);
      }

        if(empty($_POST['class'])){
         $errors[]= 'Please select class.';
       }else {
         $class = test_input($_POST['class']);
       }

         if(empty($_POST['password'])){
          $errors[]= 'Please enter password.';
          } else {
            $password = trim($_POST["password"]);
            // $password =stripslashes($_POST['password']);
            // $password =htmlspecialchars($_POST['password']);
          }

        // $passHash="$2y$10$";
        // $salt="iusesomecrazystrings22";
        // $hash_and_salt = $passHash.$salt;
        //
        // $password =crypt($password,$hash_and_salt);
    //
    //
    //
    //     if (strlen($_POST["user_password"]) <= '8') {
    //       $errors[] = "Your Password Must Contain At Least 8 Characters!";
    //     }
    //     elseif(!preg_match("#[0-9]+#",$password)) {
    //       $errors[] = "Your Password Must Contain At Least 1 Number!";
    //     }
    //     elseif(!preg_match("#[A-Z]+#",$password)) {
    //       $errors[] = "Your Password Must Contain At Least 1 Capital Letter!";
    //     }
    //     elseif(!preg_match("#[a-z]+#",$password)) {
    //       $errors[] = "Your Password Must Contain At Least 1 Lowercase Letter!";
    //     }
    // }
    // elseif(!empty($_POST["password"])) {
    //   $errors[] = "Please Check You've Entered Or Confirmed Your Password!";
    // } else {
    //   $errors[] = "Please enter password   ";
    // }

    if(empty($errors)){
      echo "<h3>Welcome, </h3>".htmlentities($name);
      echo "<h3>Your email: </h3>".htmlentities($email);
      echo "<h3>Mobile Number: </h3>".htmlentities($mobile);
      echo "<h3>Address: </h3>".htmlentities($address);
      echo "<h3>Membership type: </h3>".htmlentities($membership);
      echo "<h3>Classes chosen: </h3>".htmlentities($class);
      echo "<h3>Pass: </h3>".htmlentities($password);

    }

      require('connect.php');
      // $name = "";
      // $email = "";
      // $mobile = "";
      // $address = "";
      // $membership = "";
      // $class = "";
      // $password = "";
      $query = "INSERT INTO member VALUES('$name','$email','$mobile','$address','$membership', '$class','$password', 2)";
      if (mysqli_query($db_connection, $query)){
      	echo "<h2>New Member Added Successfuly...</h2>";
      }else {
      	echo "<h2>Could not add New Member...</h2>";
      }
      }else {

        ?>

      <form action="signup.php" method="POST">
        <div class="container">
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
                      <h2>Sign Up</h2> Please sign up using the form below. </p>
        <div class="form-group">
          <label for="user_name"><h5>Name:</h5></label>
            <input type="text" class="form-control" id="user_name" name="user_name"  required maxlength="50">

          </div>
          <div class="form-group">
            <label for="user_email"><h5>Email:</h5></label>
            <input type="email" class="form-control" id="user_email" name="user_email" required maxlength="50">
          </div>
          <div class="form-group">
          <label for="mobile"><h5>Mobile number:</h5></label>
            <input type="text" class="form-control" id="mobile" name="mobile" required maxlength="50">
        </div>

        <div class="form-group">
        <label for="address"><h5>Address</h5></label>
        <textarea name="address" class="form-control" cols="30" rows="6"></textarea>
        </div>

        <div class="form-group">
        <label for="membership" style="padding 100px;"><h5>Membership:</h5></label>
        <br>
        <!-- <input type="checkbox" name="membership[]" value="gold">Gold<br>
        <input type="checkbox" name="membership[]" value="silver">Silver<br>
        <input type="checkbox" name="membership[]" value="bronze">Bronze<br> -->
        <div class="custom-control custom-radio">
          <input required type="radio" id="gold" name="membership" value="Gold" class="custom-control-input">
          <label class="custom-control-label" for="gold">Gold</label>
        </div>
        <div class="custom-control custom-radio">
          <input required type="radio" id="silver" name="membership" value="Silver" class="custom-control-input">
          <label class="custom-control-label" for="silver">Silver</label>
        </div>
        <div class="custom-control custom-radio">
          <input required type="radio" id="bronze" name="membership" value="Bronze" class="custom-control-input">
          <label class="custom-control-label" for="bronze">Bronze</label>
        </div>
        </div>

        <div class="form-group">
        <label for="class" style="padding 100px;"><h5>Select primary class (you can add more later):</h5></label>
        <br>
        <!-- <input type="checkbox" name="class[]" value="yoga">Yoga<br>
        <input type="checkbox" name="class[]" value="boxingyoga">Boxingyoga<br>
        <input type="checkbox" name="class[]" value="kettlebell">Kettlebell<br>
        <input type="checkbox" name="class[]" value="spin">Spin Classes<br>
        <input type="checkbox" name="class[]" value="weight">Weight training<br>
        <input type="checkbox" name="class[]" value="pilates">Pilates<br>
        <input type="checkbox" name="class[]" value="boxing">Boxing<br> -->
        <div class="custom-control custom-radio">
          <input required type="radio" id="yoga" name="class" value="Yoga" class="custom-control-input">
          <label class="custom-control-label" for="yoga">Yoga</label>
        </div>
        <div class="custom-control custom-radio">
          <input required type="radio" id="boxingyoga" name="class" value="Boxingyoga" class="custom-control-input">
          <label class="custom-control-label" for="boxingyoga">Boxingyoga</label>
        </div>
        <div class="custom-control custom-radio">
          <input required type="radio" id="kettlebell" name="class" value="Kettlebell" class="custom-control-input">
          <label class="custom-control-label" for="kettlebell">Kettlebell</label>
        </div>
        <div class="custom-control custom-radio">
          <input required type="radio" id="spin" name="class" value="Spin Classes" class="custom-control-input">
          <label class="custom-control-label" for="spin">Spin Classes</label>
        </div>
        <div class="custom-control custom-radio">
          <input required type="radio" id="weight" name="class" value="Weight training" class="custom-control-input">
          <label class="custom-control-label" for="weight">Weight training</label>
        </div>
        <div class="custom-control custom-radio">
          <input required type="radio" id="pilates" name="class" value="Pilates" class="custom-control-input">
          <label class="custom-control-label" for="pilates">Pilates</label>
        </div>
        <div class="custom-control custom-radio">
          <input required type="radio" id="boxing" name="class" value="Boxing" class="custom-control-input">
          <label class="custom-control-label" for="boxing">Boxing</label>
        </div>

        </div>

        <div class="form-group">
        <label for="password"><h5>Password:</h5></label>
        <input type="password" class="form-control" id="password" name="password" required maxlength="50">
        </div>

        <button type="submit" class="btn btn-dark">Sign up</button>

        </div>


        <div class="col-md-6 col-md-offset-3">
        <div class="container">
        <img class="img-fluid img-thumbnail" src="img/gallery_4.jpg">
        </div>
        </div>


        </div>
        </div>

<?php

}

?>
  </form>

  <?php
  include "footer.php";
  ?>

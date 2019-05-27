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

<!doctype html>
<html lang="en">
<body>




<main>
  <div class="jumbotron jumbotron-fluid" style="background-image: url(img/gym-banner.jpg); background-size: cover; color: white;">
     <div class="container">
       <h2>“The brain is a wonderful organ. It starts working the moment you get up in the morning and does not stop until you get into the office.”</h2>
     </div>
   </div>

   <div class="under-border" style="background: #CFDE00"></div>
   	<div class="under-border under-border--opaic" style="background: #CFDE00"></div>

    <div class="container">

      <?php if(isset($_SESSION['msg'])): ?>
      <div class="msg alert alert-success">
          <?php

              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
          ?>
      </div>
      <?php endif ?>
      <h2>Membership Information Edit</h2> Membership information may be added, editted, or deleted below: </p>
        <!--Displays the table of information with edit and delete buttons beside each -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Membership Type</th>
            <th scope="col">Fee</th>
            <th scope="col">Line 1</th>
            <th scope="col">Line 2</th>
            <th scope="col">Line 3</th>
            <th scope="col">Line 4</th>
            <th colspan="2"> Action</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_array($results)){ ?>
              <tr>
                  <td><?php echo $row['type']; ?></td>
                  <td><?php echo $row['fee']; ?></td>
                    <td><?php echo $row['line1']; ?></td>
                      <td><?php echo $row['line2']; ?></td>
                        <td><?php echo $row['line3']; ?></td>
                        <td><?php echo $row['line4']; ?></td>
                  <td>
                    <a class="btn btn-info" href="mem_edit.php?edit=<?php echo $row['id']; ?>">Edit</a>
                  </td>
                  <td>
                    <a class="btn btn-danger" href="server_mem.php?del=<?php echo $row['id']  ?>">Delete</a>
                  </td>
              </tr> <?php } ?>
        </tbody>
      </table>

      <!-- this is the form for editting or adding - this is for admin -->
    <form class="form-group" method="post" action="server_mem.php">
    <input type ="hidden" name="id" value="<?php echo $id; ?> ">
    <div class="form-group ">
      <label>Membership Type</label>
      <input class="form-control" type="text" name="type" value="<?php echo $type; ?>">
    </div>
    <div class="form-group">
      <label>Fee Amount</label>
      <input class="form-control" type="text" name="fee" value= "<?php echo $fee; ?>">
    </div>
    <div class="form-group">
      <label>Info Line 1</label>
      <input class="form-control" type="text" name="line1" value= "<?php echo $line1; ?>">
    </div>
    <div class="form-group">
      <label>Info Line 2</label>
      <input class="form-control" type="text" name="line2" value= "<?php echo $line2; ?>">
    </div>
    <div class="form-group">
      <label>Info Line 3</label>
      <input class="form-control" type="text" name="line3" value= "<?php echo $line3; ?>">
    </div>
    <div class="form-group">
      <label>Info Line 4</label>
      <input class="form-control" type="text" name="line4" value= "<?php echo $line4; ?>">
    </div>
    <div class="form-group">
    <?php if ($edit_state == false): ?>
      <button class="btn btn-info btn-lg" type="submit" name="save" class="btn">Save</button>
    <?php else: ?>
      <button class="btn btn-info btn-lg" type="submit" name="update" class="btn">Update</button>
    <?php endif ?>
    </div>
    </form>









    </div>



<!-- /.container -->

<br>
<br>
</main>

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

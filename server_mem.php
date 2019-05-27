<?php
require('connect.php');
    session_start();
    $type = "";
    $fee = 0;
    $line1 = "";
    $line2 = "";
    $line3 = "";
    $line4 = "";
    $id = 0;
    $edit_state = false;


    if(isset($_POST['save'])){
      $type = $_POST['type'];
      $fee = $_POST['fee'];
      $line1 = $_POST['line1'];
      $line2 = $_POST['line2'];
      $line3 = $_POST['line3'];
      $line4 = $_POST['line4'];

      $query = "INSERT INTO fee_edit (type, fee, line1, line2, line3, line4) VALUES ('$type','$fee','$line1','$line2','$line3','$line4')";
      mysqli_query($db_connection, $query);
      $_SESSION['msg'] = "Content saved";
      header('location: mem_edit.php'); //redirect here after inserting
    }
//update records
    if(isset($_POST['update'])){
      $type = mysqli_real_escape_string($db_connection, $_POST['type']);
      $fee = mysqli_real_escape_string($db_connection, $_POST['fee']);
      $line1 = mysqli_real_escape_string($db_connection, $_POST['line1']);
      $line2 = mysqli_real_escape_string($db_connection, $_POST['line2']);
      $line3= mysqli_real_escape_string($db_connection, $_POST['line3']);
      $line4= mysqli_real_escape_string($db_connection, $_POST['line4']);
      $id = mysqli_real_escape_string($db_connection, $_POST['id']);

      mysqli_query($db_connection, "UPDATE fee_edit SET type ='$type', fee='$fee', line1='$line1', line2='$line2', line3='$line3', line4='$line4'
      WHERE id=$id");
      $_SESSION['msg'] = "Content updated";
      header('location: mem_edit.php');
    }

    //delete records
    if(isset($_GET['del'])){
      $id = $_GET['del'];
      mysqli_query($db_connection, "DELETE FROM fee_edit WHERE id=$id");
      $_SESSION['msg'] = "Content deleted";
      header('location: mem_edit.php');
    }

    $results = mysqli_query($db_connection, "SELECT * FROM fee_edit");
?>

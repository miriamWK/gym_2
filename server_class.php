<?php
require('connect.php');

    session_start();
    $title = "";
    $content = "";
    $id = 0;
    $edit_state = false;


    if(isset($_POST['save'])){
      $title = $_POST['title'];
      $content = $_POST['content'];

      $query = "INSERT INTO class_features (title, content) VALUES ('$title','$content')";
      mysqli_query($db_connection, $query);
      $_SESSION['msg'] = "Content saved";
      header('location: class_edit.php'); //redirect here after inserting
    }
//update records
    if(isset($_POST['update'])){
      $title = mysqli_real_escape_string($db_connection, $_POST['title']);
      $content = mysqli_real_escape_string($db_connection, $_POST['content']);
      $id = mysqli_real_escape_string($db_connection, $_POST['id']);

      mysqli_query($db_connection, "UPDATE class_features SET title ='$title', content='$content'
      WHERE id=$id");
      $_SESSION['msg'] = "Content updated";
      header('location: class_edit.php');
    }

    //delete records
    if(isset($_GET['del'])){
      $id = $_GET['del'];
      mysqli_query($db_connection, "DELETE FROM class_features WHERE id=$id");
      $_SESSION['msg'] = "Content deleted";
      header('location: index_edit.php');
    }

    $results = mysqli_query($db_connection, "SELECT * FROM class_features");
?>

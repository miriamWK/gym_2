<?php
require('connect.php');
 ?>


<?php


if(isset($_POST['login'])){

    $email = $_POST['user_email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($db_connection,$email);
    $password = mysqli_real_escape_string($db_connection,$password);



    //SQL query to check the email and password of the user are in the database
    $query = "SELECT * FROM member WHERE user_email ='{$email}'";
    $select_member_query =mysqli_query($db_connection,$query);

    if (!$select_member_query){
        die("Query failed".mysqli_error($db_connection));
    }

//looping through the info in the database to see if it is there
   while ($row =mysqli_fetch_array($select_member_query)){

       $db_email = $row['user_email'];
       $db_password= $row['password'];
       $db_role= $row['role'];


// This should redirect to the index page if the username and user password are not  the same . This is not working and I am not sure why.
    if ($email != $db_email || $password != $db_password){

        header('Location: about.php');

// This should redirect if the password and user email are the same .
} else if ($email == $db_email && $password == $db_password){

    if ($db_role == 2  ){//here if the user role is 2 then it will log the user in as normal user
        $_SESSION['user_email'] = $db_email;// here we are assigning this user name (email) to a session called username.
        $_SESSION['role'] = $db_role;
        $_SESSION['password'] = $db_password;

        header ('Location: indexmem.php');
        // exit();
    } else if ($db_role == 1){ // here it will log the user in as 1 because one is the admin in the user table.
        $_SESSION['user_email'] = $db_email;
        $_SESSION['role'] = $db_role;

        header ('Location: adminindex.php');
        // exit();
    }
}else {
    header ('Location:index.php');
}
}

}

?>

<?php
// Check if the update button has been clicked
if (isset($_POST["btn_update"])){
    //Receive the update data from the form
    $userId =$_POST["u_id"];
    $userName =$_POST["u_name"];
    $userEmail =$_POST["u_email"];
    $userPassword =$_POST["u_pass"];
    //Connect to the database to return the data
    require_once "db_connection.php";
    //Create update query
    $updatequery ="UPDATE `user` SET `jina`='$updateName',
                `arafa`='$updateEmail',
                `siri`='$updatePassword'
              WHERE id='userId'";
    //Finally execute the update query by use of mysqli_query()
    $update = update_mysqli($connection , $updatequery);
    //check whether the update was successful
    if (isset($update)){
        //Redirect the user to users.php to see changes
        header("location:user.php");

    }else{
        echo"Updating failed";
    }
}

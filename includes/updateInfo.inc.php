<?php 
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $password2 = $_GET['password2'];

    $baduser = 0;

    if($password != $password2 && $password2 != ""){
        $baduser = 1;
        echo "<div class=\"msg-container fail-msg-container\">
            <h2 class =\"fail-msg msg\">Passwords do not match</h2>
            <a href=\"index.php?page=updateUser\" class=\"page-link\">Home</a>
        </div>";
    }
    // Connection to Db
    require_once("library/connection.php");
    $con = connectToDb();
    //-------------------
    $query = "SELECT email from ms_users WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $email2 = $row["email"];

    if($email === $email2){
        $baduser = 1;
        echo "<div class=\"msg-container fail-msg-container\">
            <h2 class =\"fail-msg msg\">Email is already taken</h2>
            <a href=\"index.php?page=updateUser\" class=\"page-link\">Use Another Email. Try Again</a>
        </div>";
    }
    if($baduser === 0){

    }
?>
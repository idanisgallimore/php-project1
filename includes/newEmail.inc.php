<?php  include("nav.php"); ?>
<?php 
require_once("library/connection.php");
$con = connectToDb();
$email = $_SESSION["user"];
$email1 = htmlspecialchars($_REQUEST['email1']);
$badUser = 0;

    $query = "SELECT * from ms_users WHERE email = '$email1'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $email2 = $row['email'];
    if($email1 === $email2){
        echo "<div class=\"msg-container fail-msg-container\">
        <h2 class =\"fail-msg msg\">That email is already taken. Choose another email.</i></h2>
        <a href=\"index.php?page=changeEmail\" class=\"page-link\">Go Back</a>
        </div>";
        $badUser = 1; 
    }
    if(!$badUser > 0){
        $query = "UPDATE ms_users SET Email ='$email1' WHERE email = '$email'";
        $result = mysqli_query($con, $query);
        if($result){
            echo "<div class=\"msg-container fail-msg-container\">
            <h2 class =\"fail-msg msg\">Confirmed. Email has been changed</i></h2>
            <a href=\"index.php?page=dashboard\" class=\"page-link\">Go to Dashboard</a>
            </div>";
            // Reset session cookie 
            $_SESSION["user"] = $email1;
        }else{
            echo "<div class=\"msg-container fail-msg-container\">
            <h2 class =\"fail-msg msg\">Could not change email</i></h2>
            <a href=\"index.php?page=dashboard\" class=\"page-link\">Go to Dashboard</a>
            </div>";
        }
    }




?>


<?php  include("nav.php"); ?>
<?php 
require_once("library/connection.php");
$con = connectToDb();

$email = $_REQUEST['email'];
$password1 = htmlspecialchars($_REQUEST['password1']);
$password2 = htmlspecialchars($_REQUEST['password2']);

if($password1 === $password2){
    $query = "UPDATE ms_users SET PASSWORD ='$password1' WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    if($result){
         echo "<div class=\"msg-container fail-msg-container\">
        <h2 class =\"fail-msg msg\">Confirmed. Password has been changed</i></h2>
        <a href=\"index.php?page=loginPage\" class=\"page-link\">Log in</a>
        </div>";
    }else{
        echo "<div class=\"msg-container fail-msg-container\">
        <h2 class =\"fail-msg msg\">Could not change password</i></h2>
        <a href=\"index.php?page=dashboard\" class=\"page-link\">Go to Dashboard</a>
        </div>";
    }
}
if($password1 != $password2){
        echo "<div class=\"msg-container fail-msg-container\">
        <h2 class =\"fail-msg msg\">Passwords don't match</i></h2>
        <a href=\"index.php?page=resetPassword&id=$email\" class=\"page-link\">Try Again</a>
        </div>";
}


?>
<?php  include("nav.php"); ?>
<?php 
require_once("library/connection.php");
$con = connectToDb();

$name = htmlspecialchars($_REQUEST['name']);
$email = $_SESSION["user"];
$query = "UPDATE ms_users SET NAME ='$name' WHERE email = '$email'";
$result = mysqli_query($con, $query);
if($result){
    echo "<div class=\"msg-container fail-msg-container\">
    <h2 class =\"fail-msg msg\">Confirmed. Name has been changed</i></h2>
    <a href=\"index.php?page=dashboard\" class=\"page-link\">Go to Dashboard</a>
    </div>";
}else{
    echo "<div class=\"msg-container fail-msg-container\">
    <h2 class =\"fail-msg msg\">Could not change name</i></h2>
    <a href=\"index.php?page=dashboard\" class=\"page-link\">Go to Dashboard</a>
    </div>";
}

?>
<?php include("nav.php");?>
<?php 
    // $fromUser = $_GET['fromWhom'];
    include_once("library/getName.php");
    // Connection to Db
    require_once("library/connection.php");
    $con = connectToDb();
    //-------------------
    $fromname = htmlspecialchars(getName($_SESSION["user"]));
    $toUser = htmlspecialchars($_GET['touser']);
    $message = htmlspecialchars($_GET['message']);
    $date = htmlspecialchars($_GET['date']);
    
    $query = "INSERT INTO msg(from_user, to_user, message, date) VALUES('$fromname', '$toUser', '$message', '$date')";
    $result = mysqli_query($con, $query);
    if($result){
        echo "<div class=\"msg-container fail-msg-container\">
            <h2 class =\"fail-msg msg\">Congrats! Message sent!</i></h2>
            <a href=\"index.php?page=dashboard\" class=\"page-link\">Home</a>
        </div>";
    }else{
        echo "<div class=\"msg-container fail-msg-container\">
            <h2 class =\"fail-msg msg\">Message didn't go through. Try again.</i></h2>
            <a href=\"index.php?page=dashboard\" class=\"page-link\">Home</a>
        </div>";
    }
?>
<?php include("nav.php");?>
<h1 class="page-title">Messages to You</h1>
<?php 
    include_once("library/getName.php");
    // Connection to Db
    require_once("library/connection.php");
    $con = connectToDb();
    //-------------------
    $user = getName($_SESSION["user"]);
// Get the emails 
    $query = "SELECT * from msg WHERE to_user = '$user'";
    $result = mysqli_query($con, $query);
    $number = mysqli_num_rows($result);
    if($number > 0){
        while($row = mysqli_fetch_assoc($result)){
            $msg = $row['message'];
            $day = $row['date'];
            $from = $row['from_user'];
            $toUser = $row['to_user'];
            $id = $row['msgid'];
        
            echo "<div class=\"msg-cont\">
                <h3 class=\"msg-author\">From: $from</h3>
                <h4 class=\"msg-text msg-date\">Date: $day</h4>
                <p class=\"msg-text\">Message: $msg</p>
                <a class=\"page-link\" href=\"index.php?page=inboxMsg&id=$id\">View message</a>
            </div>";
        }
    }   else{
        echo "<div class=\"msg-container fail-msg-container\">
            <h2 class =\"fail-msg msg\">No messages for you <i class=\"far fa-frown\"></i></h2>
            <a href=\"index.php?page=dashboard\" class=\"page-link\">Back to Dashboard</a>
        </div>";
    }

?>

<!-- echo "<div class=\"msg-cont\">
            <h3 class=\"msg-author\">From: $from</h3>
            <h4 class=\"msg-text msg-date\">Date: $day</h4>
            <p class=\"msg-text\">Message: $msg</p>
            <a class=\"page-link\" href=\"index.php?page=respondMsg&from=$from\">Respond</a>
        </div>"; -->

<?php 
include_once("library/getName.php");
$user = getName($_SESSION["user"]);
 $con = mysqli_connect("localhost", "idanis", "test", "messages_site") or die("did not connect");
 // Change the line below when you add session cookies *idy
 $query = "SELECT * from msg WHERE to_user = '$user'";
 $result = mysqli_query($con, $query);
 while($row = mysqli_fetch_assoc($result)){
    $msg = $row['message'];
    $day = $row['date'];
    $from = $row['from_user'];
    $toUser = $row['to_user'];
    $id = $row['msgid'];
    
    echo "<div class=\"msg-cont\">
        <h3 class=\"msg-author\">From: $from</h3>
        <h5 class=\"msg-rec\">To: $toUser</h5>
        <p class=\"msg-text\">$msg</p>
        <h4 class=\"msg-text\">$day</h4>
        <a class=\"page-link action-link\" href=\"index.php?page=deleteMsg&id=$id\">Delete message</a>
        <a class=\"page-link\" href=\"index.php?page=inboxMsg&id=$id\">View message</a>
    </div>";
}

?>
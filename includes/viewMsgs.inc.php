<?php include("nav.php");?>
<?php 
 
    $con = mysqli_connect("localhost", "idanis", "test", "messages_site");
    $query = "SELECT * from msg";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_assoc($result)){
        $msg = $row['message'];
        $day = $row['date'];
        $from = $row['from_user'];
        $id = $row['msgid'];
        
        echo "<div class=\"msg-cont\">
            <h3 class=\"msg-author\">From: $from</h3>
            <p class=\"msg-text\">$msg</p>
            <h4 class=\"msg-text\">$day</h4>
            <a class=\"page-link\" href=\"index.php?page=viewMsg&id=$id\">View message</a>
        </div>";
    }
?>
<a href="index.php?page=main">main </a>
<a href="index.php?page=newMsg">New Message</a>
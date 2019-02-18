<?php include("nav.php");?>
<h1 class="page-title">View Message</h1>
<?php 
    // Connection to Db
    require_once("library/connection.php");
    $con = connectToDb();
    //-------------------
    $id = $_REQUEST["id"];
    // echo $id;

    $query = "SELECT * from msg WHERE msgid = '$id'";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_assoc($result)){
        $msg = $row['message'];
        $day = $row['date'];
        $from = $row['from_user'];
        $id = $row['msgid'];
        
        echo "<div class=\"msg-cont\">
            <h3 class=\"msg-author\">From: $from</h3>
            <h4 class=\"msg-text msg-date\">Date: $day</h4>
            <p class=\"msg-text\">Message: $msg</p>
            <a class=\"page-link\" href=\"index.php?page=respondMsg&from=$from\">Respond</a>
        </div>";
    }
?>

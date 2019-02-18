<?php include("nav.php");?> 
<h1 class="page-title">Results for: <?php $search = $_GET['search']; echo $search; ?></h1>
<?php
    // Connection to Db
    require_once("library/connection.php");
    $con = connectToDb();
    //-------------------
    $search = htmlspecialchars($_GET['search']);
    // echo $search;
    if(get_magic_quotes_gpc()){
        $search = stripslashes($search);
    }
    $searchsql = mysqli_real_escape_string($con,$search);
    $query = "SELECT * from msg WHERE to_user OR from_user Or message REGEXP '$searchsql'";
    $result = mysqli_query($con, $query);
    $number = mysqli_num_rows($result);
    if($number > 0){
        while($row = mysqli_fetch_assoc($result)){
            $msg = $row['message'];
            $day = $row['date'];
            $from = $row['from_user'];
            $id = $row['msgid'];
            
            echo "<div class=\"msg-cont\">
                <h3 class=\"msg-author\">From: $from</h3>
                <h4 class=\"msg-text msg-date\">Date: $day</h4>
                <p class=\"msg-text\">Message: $msg</p>
                <a class=\"msg-link\" href=\"index.php?page=viewMsg&id=$id\">View message</a>
            </div>";
        }
    }else{
        echo "<div class=\"msg-container fail-msg-container\">
            <h2 class =\"fail-msg msg\">No messages came up <i class=\"fas fa-cat\"></i></h2>
            <a href=\"index.php?page=viewMsgs\" class=\"page-link\">Back to Message Board <i class=\"far fa-comments\"></i></a>
        </div>";
    }
?>
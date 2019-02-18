<?php include("nav.php");?> 
<h1 class="page-title">Message Board</h1>
<div class="search-container">
    <form class="search" method="get" action="index.php">
        <input type="text" class="search-field" name="search" placeholder="Search Messages"/>
        <input type="hidden" name="page" value="search"/>
        <button type="submit" class="btn btn-yes btn-small"><i class="fas fa-search"></i></button>
    </form>
</div>
<?php 
    // Connection to Db
    require_once("library/connection.php");
    $con = connectToDb();
    //-------------------
    $query = "SELECT * from msg";
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
            <a class=\"msg-link\" href=\"index.php?page=viewMsg&id=$id\">View message</a>
        </div>";
    }
?>

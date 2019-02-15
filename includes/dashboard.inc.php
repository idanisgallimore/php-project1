<?php 
    $user = $_SESSION["user"];
    $con = mysqli_connect("localhost", "idanis", "test", "messages_site") or die("did not connect");
    $query = "SELECT name from ms_users where email = '$user'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $name = ucwords($row['name']);
    echo "<h1 class=\"page-title\">Welcome $name!!!</h1>";

?>
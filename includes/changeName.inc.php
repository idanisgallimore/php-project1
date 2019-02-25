<?php  include("nav.php"); ?>
<h1 class="page-title">Change Name</h1>

<?php 
    require_once("library/connection.php");
    $con = connectToDb();
    //-------------------
    $email = $_SESSION["user"];
    // $query = "INSERT INTO msg(from_user, to_user, message, date) VALUES('$name', '$toUser', '$message', '$date')";
    $query = "SELECT name from ms_users WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['name'];
            echo "<form  class=\"login-container container\"  method=\"get\" action=\"index.php\">
                <input class=\"form-input\" type=\"text\" name=\"name\" value=\"$name\" placeholder=\"Update Name\"/>
                <input type=\"hidden\"  name=\"page\" value=\"newName\"/>
                <input class=\"btn btn-yes btn-small\" type=\"submit\" value=\"submit\"/>
            </form>";
        }
    }
?>
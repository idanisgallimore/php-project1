<?php  include("nav.php"); ?>
<h1 class="page-title">Update Info</h1>
<!-- //add from - use session cookies  -->
<?php 
    include_once("library/getName.php");
    // Connection to Db
    require_once("library/connection.php");
    $con = connectToDb();
    //-------------------
    $name = getName($_SESSION["user"]);
    $email = $_SESSION["user"];
    // $query = "INSERT INTO msg(from_user, to_user, message, date) VALUES('$name', '$toUser', '$message', '$date')";
    $query = "SELECT * from ms_users WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $email = $row['email'];
            $name = $row['name'];
            $password = $row['password'];
        }

        echo "<form method=\"get\" action=\"index.php\">
        <input class=\"form-input\" type=\"text\" name=\"name\" value=\"$name\" placeholder=\"Update Name\"/>
        <input class=\"form-input\" type=\"text\" name=\"email\" value=\"$email\" placeholder=\"Update Email\"/>
        <input class=\"form-input\" type=\"password\" name=\"password\" value=\"$password\" placeholder=\"Update password\"/>
        <input class=\"form-input\" type=\"password\" name=\"password2\" placeholder=\"Confirm password\"/>
        <input type=\"hidden\"  name=\"page\" value=\"updateInfo\"/>
        <input class=\"btn btn-yes\" type=\"submit\" value=\"submit\"/>
    </form>";
    }

?>
<?php  include("nav.php"); ?>
<h1 class="page-title">Change Name</h1>

<?php 
    require_once("library/connection.php");
    $con = connectToDb();
    //-------------------
    $email = $_SESSION["user"];
    $query = "SELECT password from ms_users WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $password = $row['password'];
            echo "<form method=\"get\" action=\"index.php\">
                <input class=\"form-input\" type=\"password\" name=\"password1\" value=\"$password\" placeholder=\"Update password\"/>
                <input class=\"form-input\" type=\"password\" name=\"password2\" placeholder=\"Confirm password\"/>
                <input type=\"hidden\"  name=\"page\" value=\"newPassword\"/>
                <input class=\"btn btn-yes btn-small\" type=\"submit\" value=\"submit\"/>
            </form>";
        }
    }
?>
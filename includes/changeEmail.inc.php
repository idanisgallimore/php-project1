<?php  include("nav.php"); ?>
<h1 class="page-title">Change Email</h1>

<?php 
    $email = $_SESSION["user"];
    echo "<form method=\"get\" action=\"index.php\">
        <input class=\"form-input\" type=\"text\" name=\"email1\" value=\"$email\" placeholder=\"Update Email\"/>
        <input type=\"hidden\"  name=\"page\" value=\"newEmail\"/>
        <input class=\"btn btn-yes btn-small\" type=\"submit\" value=\"submit\"/>
    </form>";
 
?>